<?php
$title= 'String Manipulation Functions';
include 'includes/header.php'
?>
<h1><?php echo $title ?></h1>
<?php
    //String Concatenation
    $phrase1="Hi, I am";
    $phrase2="Hriday Chhaochharia";
    $name= "manish chhaochharia";
    echo $phrase1." ".$phrase2;
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    //String Transformation
    echo 'The name of my father is : '. $name .'<br>';
    echo 'The first letter in upper case : '. ucfirst($name).'<br>';
    echo 'The first letter in both the words in upper case : '. ucwords($name).'<br>';
    echo 'Upper case : '. strtoupper($name).'<br>';
    echo 'This was upper case : '. strtolower($phrase1." ".$phrase2);
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    //Repeat Function -> Nesting Functions
    echo 'Repeat String : '. str_repeat('a',5). '<br>';
    echo 'Nesting Functions : '. strtoupper(str_repeat(' a ',5)). '<br>';
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    //Substring
    echo 'Get a substring : '. substr($name, 5, 9).'<br>';
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    //position
    echo 'Position of String : '. strpos($name, 'h');
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    // Find Character 
    echo 'Find the character i : '. strchr($name, 'i'). '<br>';
    echo 'Find the character h : '. strchr($name, 'h'). '<br>';
    echo 'Find the character m : '. strchr($name, 'm'). '<br>';
    echo 'Find the character o : '. strchr($name, 'o'). '<br>';
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    //Length
    echo 'The length of the string is : '. strlen($name);
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    //TRIM
    echo 'Without trim : '. "A"." B C D ". "E". '<br>';
    echo 'With trim : '. "A". trim(" B C D "). "E". '<br>';
    echo 'With left trim : '. "A".ltrim(" B C D "). "E". '<br>';
    echo 'With right trim : '. "A".rtrim(" B C D "). "E". '<br>';
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    //Replace String
    echo 'Replace String : '. str_replace('Hriday', 'Vipanshi', $phrase2);

    



    ?>
<?php
include 'includes/footer.php'
?>