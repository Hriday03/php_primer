<?php
$title= 'User-Defined Functions';
include 'Includes/header.php'
?>
<h1><?php echo $title?></h1>
<?php
    //Function Definition
    function Hi(){
        echo "Hi!, I am Hriday. I have scored a 1560 on my SATs. I am so happy!!"."<br>";
    }
    //Function Call
    Hi();
    Hi();
    Hi();
    Hi();
    //Function with Parameters
    function addition($num1, $num2){
        
        $sum=$num1+$num2;

        echo 'The sum of '.$num1. ' and '. $num2. ' is : '.$sum. '<br>';
    }
    function changeNum(&$num){
        $num=$num+10;

    } 
    $num=50;
    addition(10,5);
    echo '<hr>';
    $num1= 1000;
    $num2= 500;
    addition(10,$num);
    echo '<hr>';
    addition($num1,$num2);
    changeNum($num);
    echo $num. '<br>';
    //Return Function Value
    function product($num1,$num2 ){
        $product=$num1 * $num2;
        return $product;
    }
    echo 'The product = '.product(6,10).'<br>';
    $a=78;
    $Product=product($a,10);
    echo "The product is : $Product";




    ?>
<?php
include 'Includes/footer.php'
?>