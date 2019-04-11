<pre>
    <?php
    //Converting lowercase into Title Case
    echo ucwords("Welcome to the php world");
    echo "<br>";
    echo "<br>";
    //Converting a whole string into UPPERCASE
    // in grote letters
    echo strtoupper ("my name is jaime");

    echo "<br>";
    echo "<br>";

    //Converting whole String to lowercase
    echo strtolower("MY NAME IS JAIME");

    echo "<br>";
    echo "<br>";

    //Repeating a String
    echo str_repeat("=", 22);

    echo "<br>";
    echo "<br>";

    echo str_repeat("+", 33);

    echo "<br>";
    echo "<br>";
    //Comparing Strings
    //Je kunt twee strings vergelijken door te gebruiken strcmp()
    echo strcmp("eminem", "EMINEM");

    echo "<br>";
    echo "<br>";

    echo strcmp("jaime", "jaime");

    echo "<br>";
    echo "<br>";

    //Displaying part of String
    echo substr("welkom to hopper",8);

    echo "<br>";
    echo "<br>";
    
    //Removing white spaces from a String
    $str = "jaime ambroos";
    echo $str. "<br>";
    echo trim($str,"jambroos");




    
    ?>
<pre>