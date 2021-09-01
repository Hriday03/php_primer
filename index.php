<?php
$title= 'Index';
include 'includes/header.php'
?>
<?php 
    //Printing to HTML using echo
    echo '<h2>Hello PHP</h2>';
    echo '<br>';
    echo 'Second Line';
?>
<?php 
//Variables need a '$'. They are not stronly typed
$name = "Hriday Chhaochharia ";
$age = 17;
// echo variable
echo $name;
echo "<h1> My name is : $name</h1>";
echo "<h1> My age is : $age</h1>";
?>
<?php
include 'includes/footer.php'
?>