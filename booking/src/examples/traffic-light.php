<style>
    a{
        display: block;
        width: 100px;
        height: 100px;
        border-radius: 100%;
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
        case 0;
        case "red": 
         echo '<a href="/examples/traffic-light.php?color=red" style="background-color: red;"></a>';
         echo'<a href="/examples/traffic-light.php?color=yellow"></a>';
         echo '<a href="/examples/traffic-light.php?color=green"></a>';
       break;
        
       case "yellow": 
        echo '<a href="/examples/traffic-light.php?color=red"></a>';
        echo'<a href="/examples/traffic-light.php?color=yellow" style="background-color: yellow;"></a>';
        echo '<a href="/examples/traffic-light.php?color=green"></a>';
      break;

      case "green": 
        echo '<a href="/examples/traffic-light.php?color=red"></a>';
        echo'<a href="/examples/traffic-light.php?color=yellow"></a>';
        echo '<a href="/examples/traffic-light.php?color=green" style="background-color: green;"></a>';
      break;

    }
}
?>

<a href="/examples/traffic-light.php?color=red"></a>
<a href="/examples/traffic-light.php?color=yellow"></a>
<a href="/examples/traffic-light.php?color=green"></a>
