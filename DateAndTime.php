<?php
$title= 'Date and Time Manipulation Functions';
include 'Includes/header.php'
?>
<h1><?php echo $title ?></h1>
<?php 
     $datenow= getdate();
     echo $datenow['mday']. '<br>';
     echo $datenow['mon']. '<br>';
     echo $datenow['year']. '<br>';
     echo $datenow['mday']. '-'. $datenow['mon']. '-'. $datenow['year'];
    // 2nd method
    echo '<br>';
    echo "Today is ". date("d-m-Y"). "<br>";
    echo "And the day is ". date('l'). "<br>";

    echo "The time is ". date('H:i'). "<br>";
    echo "The time is ". date('h:i:sa'). "<br>";
    ?>
<?php
include 'Includes/footer.php'
?>