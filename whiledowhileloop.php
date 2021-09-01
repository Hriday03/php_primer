<?php
$title= 'While and Do-While Loops';
include 'includes/header.php'
?>
<h1><?php echo $title ?></h1>
<?php
$grade=1;
while($grade <=10){
    echo"<h1>The grade is $grade</h1>";
    $grade++;
    
}
?>

<?php
include 'includes/footer.php'
?>