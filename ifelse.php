<?php
$title= 'If-Else';
include 'Includes/header.php'
?>
<h1><?php echo $title ?>
<?php 
    echo "<h1>If Statemnt Grade</h1>";
    $grade= 20;
    if($grade >= 50)
    echo "<h2 style='color:green'>Pass</h2>";
    else
    echo "<h2 style='color:red'>Fail</h2>";
    $grade='A';
    if($grade =='A')
    echo "<h2 style='color:green'>Pass</h2>";
    elseif($grade == 'B')
    echo "<h2 style='color:blue'>Pass</h2>";
    else
    echo "<h2 style='color:red'>Fail</h2>";

    ?>
<?php
include 'Includes/footer.php'
?>