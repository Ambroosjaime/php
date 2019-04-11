<?php
    echo '<pre>';
$me = array(

        "birth" => "1987",
        "first name" => "Jaime",
        "last name"=> "Ambroos",
        "hobbies" => ["Muziek", "rhymes", "drawing"],
        
);

$dad = array(
    
        "birth" => "1952",
        "first name" => "Ludovicus",
        "last name"=> "Ambroos",
        "hobbies" => ["Muziek","tv"],
    
);


$soulmate = array(

    "first name" => "daphne",
    "last name" =>  "Van Gestel",
    "hobbies" => ["Muziek","tv", "Running", "Swimming"],
);



/*in de variable $me, element papa heb aangemaakt waar ik de variable $dad heb ingezet*/
$me ["papa"] = array();
$me ["papa"] = $dad;

/*Add taxidermy to your list of hobbies.*/
$me ["hobbies"][] = "taxidermy";

/*Je ruzie maakt met je vader en
besluit om van naam te veranderen. Verander uw achternaam in "Peeters".*/
$dad ["last name"] = "peters";


echo
print_r($me);
print_r($dad);
print_r($soulmate);
/*Find the PHP function that allows us to count the number of elements of an array and count its hobbies.*/
print_r(count($me["hobbies"]));
echo '<br>';
print_r(count($dad["hobbies"]));
echo '<br>';

/*https://www.w3schools.com/php/func_array_intersect.asp*/
$result=array_intersect($me["hobbies"], $dad ["hobbies"]);
print_r($result);

/*https://www.w3schools.com/php/func_array_merge.asp*/
print_r(array_merge($me["hobbies"], $dad["hobbies"], $soulmate["hobbies"]));
echo '</pre>';
?>





