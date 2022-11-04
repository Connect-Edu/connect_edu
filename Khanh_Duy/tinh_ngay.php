<?php
if(isset($_POST['submit'])){
    $a= $_POST['a'];
    $b= $_POST['b'];
}
switch($b)
{
    case 1:
        echo "$a Tháng 1 có 31 ngày";
        break;
    case 2:
        if($a%4==0){
            echo "$a tháng 2 có 29 ngày";
        }
        else{
            echo "$a Tháng 2 có 28 ngày";
        }
        break;  
    case 3:
        echo "$a Tháng 3 có 31 ngày";
        break; 
    case 4:
        echo "$a Tháng 4 có 30 ngày";
        break;
    case 5:
        echo "$a Tháng 5 có 31 ngày";
        break;
    case 6:
        echo "$a Tháng 6 có 30 ngày";
        break;
    case 7:
        echo "$a Tháng 7 có 31 ngày";
        break;
    case 8:
        echo "$a Tháng 8 có 31 ngày";
        break;
    case 9:
        echo "$a Tháng 9 có 30 ngày";
        break;
    case 10:
        echo "$a Tháng 10 có 31 ngày";
        break;
    case 11:
        echo "$a Tháng 11 có 30 ngày";
        break;
    case 12:
        echo "$a Tháng 12 có 31 ngày";
        break;

}
?>