<?php
$title= 'Index';
include '/includes/header.php'
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
<a href="https://php-online-gaurav.herokuapp.com/index.php" class="btn btn-danger btn-lg " tabindex="-1" role="button" >Gaurav's Webpage</a>
<?php
include '/includes/footer.php'
?>