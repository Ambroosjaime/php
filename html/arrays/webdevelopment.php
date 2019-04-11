<?php
    echo '<pre>';
$web_development = array(
    "frontend" => [],
    "backend" => []
);

// voegt "xhtml", "Ruby on Rils", "JavaScript" toe aan uw lege array ["frontend"]
array_push($web_development["frontend"], "html", "Ruby on Rails", "JavaScript");

//vervangt het woord "xhtml met "html"
//$web_development["frontend"][0] = "html";
$webdev = str_replace("html", "xhtml", $webdev["front-end"]);



//voegt "css" en "flash" toe aan uw lege array ["backend"]
array_push($web_development["backend"], "css", "Flash");

//removes Flash
unset($web_development["backend"][1]);

print_r($web_development["frontend"]);

print_r($web_development["backend"]);



    echo '</pre>';
?>

