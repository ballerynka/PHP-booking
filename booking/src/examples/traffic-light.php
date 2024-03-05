<style>
    a{
        display: block;
        width: 100px;
        height: 100px;
        border-radius: 100%;
        border: 1px solid black;
        margin: 5px;
    }
    a:first-of-type{
        background-color: #ff9999 ;
     
    }
    a:nth-of-type(2){
        background-color: #ffff80;

    }
    a:nth-of-type(3){
        background-color: #66ff99;

    }
</style>



<?
 
if(isset($_GET['color'])){
    $color = ($_GET['color']);
    switch($color){
        case "red":  $color1 ='red';
       break;
        
       case "yellow": $color2 = 'yellow';
      break; 

      case "green": $color3 = 'green';
      break;
       

    }

}

?>

<a href="/examples/traffic-light.php?color=red" style="background-color:<?=$color1?>"></a>
<a href="/examples/traffic-light.php?color=yellow" style="background-color:<?=$color2?>"></a>
<a href="/examples/traffic-light.php?color=green" style="background-color:<?=$color3?>"></a>
