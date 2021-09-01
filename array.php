<?php
$title= 'Arrays in PHP';
include 'includes/header.php'
?>
<?php
    echo '<h1>'.$title.'</h1>';
    ?>
<?php
    $numbers= array(1,2,3,44,5,6,7);
    echo"$numbers[4]";
    $size= count($numbers);
    echo "<p>The array is size: $size</p>";

    for($count=0;$count<$size;$count++)
    {
        echo"<p style='color:red;'>$numbers[$count]</p>";
    }
    ?>
<?php
include 'includes/footer.php'
?>