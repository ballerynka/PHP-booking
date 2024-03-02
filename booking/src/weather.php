<? 

//weather

$temp = rand(-50, 100);
 
print($temp); 
print(" "); 


if ($temp >= 18){
    print('warm');
}else{
    print('cold');
}


?>
<br>
<br>
<hr>
<br>
<br>
<?

$ad_views = rand(0,5);

//  if ($ad_views < 4){
//  print("New features available for only $1.99");
//  }
 
print($ad_views);
print(" ");

// if ($ad_views <= 3 ) {
// print("New features available for only $1.99");
// }

$views = $ad_views < 4 ? 'New features available for only $1.99' : '';
print($views)
?>
<br>
<br>
<hr>
<br>
<br>
<?
 $day = rand(1,7);

print($day);
print(" ");

switch($day){
    case 1:  print("Monday"); break;
    case 2:  print("Tuesday"); break;
    case 3:  print("Wednesday"); break;
    case 4:  print("Thursday");break;
    case 5:  print("Friday"); break;
    case 6:  print("Saturday"); break;
    case 7:  print("Sunday"); break;
        
    default: print('Wrong day number!'); break;
}


?>
<br>
<br>
<hr>
<br>
<br>
<?

//     expression ? code_if_true : code_if_false;


$temp = rand(-50,100 );

// $estimates ??
// if ($temp >= 18){
// $estimation = 'Warm';
// }
// else{
//     $estimation = 'Cold';
// }


$estimation = $temp >= 18 ? 'Warm' : "Cold";



// send data
print($estimation);




?>
