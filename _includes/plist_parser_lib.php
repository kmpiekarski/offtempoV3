<?php

$xml_file = "podcast.xml";

$xml_title_key = "*RSS*CHANNEL*ITEM*TITLE";
$xml_summary_key = "*RSS*CHANNEL*ITEM*ITUNES:SUMMARY";
$xml_download_key = "*RSS*CHANNEL*ITEM*GUIDE";

$story_array = array();

$counter = 0;
class xml_story{
    var $title, $summary, $download;
}

function startTag($parser, $data){
    global $current_tag;
    $current_tag .= "*$data";
}

function endTag($parser, $data){
    global $current_tag;
    $tag_key = strrpos($current_tag, '*');
    $current_tag = substr($current_tag, 0, $tag_key);
}

function contents($parser, $data){
    global $current_tag, $xml_title_key, $xml_summary_key, $xml_download_key, $counter, $story_array;
    switch($current_tag){
        case $xml_title_key:
            $story_array[$counter] = new xml_story();
            $story_array[$counter]->title = $data;
            break;
        case $xml_summary_key:
            $story_array[$counter]->summary = $data;
            $counter++;
            break;
        case $xml_download_key:
            $story_array[$counter]->download = $data;
            $counter++;
            break;
    }
}

$xml_parser = xml_parser_create();

xml_set_element_handler($xml_parser, "startTag", "endTag");

xml_set_character_data_handler($xml_parser, "contents");

$fp = fopen($xml_file, "r") or die("Could not open file");

$data = fread($fp, filesize($xml_file)) or die("Could not read file");

if(!(xml_parse($xml_parser, $data, feof($fp)))){
    die("Error on line " . xml_get_current_line_number($xml_parser));
}

xml_parser_free($xml_parser);

fclose($fp);

?> 
