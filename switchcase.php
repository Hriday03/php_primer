<?php
$title= 'Switch-Case';
include 'includes/header.php'
?>
<h1><?php echo $title ?></h1>
<?php 
    $grade = 'R';
    switch ($grade) {
        case 'A':
            echo"<h2 style='color:green'>You're a Genius!<h2>";
             break;
        case 'B':
            echo"<h2 style='color:blue'>You're Good!</h2>";
            break;
        case 'C':
            echo"<h2 style='color:orange'>You need Practice!</h2>";
             break;
                
        default:
            echo"<h2 style='color:red'>You Failed</h2>";
            break;
    }
     ?>
<?php
include 'includes/footer.php'
?>