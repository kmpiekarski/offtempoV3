
<?php
	echo('<div style="width:300px;>');
for($x=0;$x<5;$x++){
    echo('<h3>' . $story_array[$x]->title .'</h3>');
    echo($story_array[$x]->summary);
	echo('<hr><a href="'.$story_array[$x]->download.'" class="ui-download" target="_blank">Download</a>');
    echo('</div></li>');
}
?> 