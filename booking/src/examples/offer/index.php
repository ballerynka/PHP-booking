<?
include 'data.php';

   //function compareByPrice($p1, $p2){



//   if($p1['price']['amount'] > $p2['price']['amount']){
//      return 1;
//   }
//   if($p1['price']['amount'] < $p2['price']['amount']){
//       return -1;
//   }
//   if($p1['price']['amount'] == $p2['price']['amount']){
//       return 0;
//   }


//   usort($products, fn($p1, $p2) => $p1['price']['amount'] - $p2['price']['amount']);


//   usort($products, function($p1, $p2){
//       return $p1['price']['amount'] - $p2['price']['amount'];
//   })



//    return $p1['price']['amount'] - $p2['price']['amount'];

//}
   
//  usort($products, 'compareByPrice');
// 

?>


<style> 
   body{
        margin: 0;
        padding: 0;
        background-color:  #003d4d;
    }
ol{
    margin-top: 100px;
    width: 100%;
    text-align: center;
    background-color:  #005266;
    color: white;
    text-shadow:  0 0 3px #004466;
}
    li{
        display: inline-block;
        width: 25%;
        padding: 30px 0;
        background-color:  #007a99;
        vertical-align: middle;
        margin: 0 15px;
    }
    *{
        vertical-align: middle;
    }
    h2{
height: 60px;

    }
    img{
        vertical-align: top;
    }

    a{
        text-decoration: 0;
        color:white;
        font-size: 30px;
    }
    .hidden-arrows{
        display: none;
    }
    .page-number{
        text-decoration: underline;
        text-decoration-color:  #cc0066;
        color: white;

    }
    .arrows{
        margin: 50px auto;
 
    }
    span{
    display: inline-block;
    padding: 30px 20px;
    font-size: 25px;
    color: #b3b3b3;
   

    }
.page{
    font-size: 28px;
    text-shadow: 1px 1px 3px #004d4d;
    padding: 30px 0;

}
.price{
    margin-top: 20px;
}
.sort-arrow{
    font-size: 20px;
    margin: 0 10px;
}
.sort{
    margin-bottom: 30px;
}

</style>


<ol>
<div class="page">
You are on page <?= $page?>
</div>
<div class="sort">Sort by price
<a class="sort-arrow" href="?s=ascendent">&#8657</a>
<a class="sort-arrow" href="?s=descendent">&#8659</a>
</div>







<?if($page ==1){
  

    for($i = 0; $i < 3; $i++){?>

    <li>
    <h2><?=$products[$i]['name']?>
        <?if($products[$i]['new']){?>
            <img src="<?=NEW_STICKER?> " alt="" width='50'>
       <?}?>
    <h3><?=$products[$i]['category']?></h3>
    <img src="<?=$products[$i]['image']?>" width="100" alt="">
    <div  class="price"><?=$products[$i]['price']['amount']?><?=$products[$i]['price']['currency']?></div>
    </li>
    

 <?}}

if($page == 2 ){
  

    for($i = 3 ; $i < 6; $i++){?>
    
        <li>
        <h2><?=$products[$i]['name']?>
        <?if($products[$i]['new']){?>
            <img src="<?=NEW_STICKER?> " alt="" width='50'>
       <?}?>

    </h2>
        <h3><?=$products[$i]['category']?></h3>
        <img src="<?=$products[$i]['image']?>" width="100" alt="">
        <div  class="price"><?=$products[$i]['price']['amount']?><?=$products[$i]['price']['currency']?></div>
        </li>
        
 <?}}

     
if($page ==3){
 

    for($i = 6 ; $i < 9; $i++){?>
        
            <li>
            <h2><?=$products[$i]['name']?>
        <?if($products[$i]['new']){?>
            <img src="<?=NEW_STICKER?> " alt="" width='50'>
       <?}?>
            <h3><?=$products[$i]['category']?></h3>
            <img src="<?=$products[$i]['image']?>" width="100" alt="">
            <div class="price"><?=$products[$i]['price']['amount']?><?=$products[$i]['price']['currency']?></div>
            </li>
        
<?}}
     
?>

    <div class="arrows">
        <a href="?p=<?= $prev_page?>" <? if($page == 1){?>class='hidden-arrows';<?}?>>&lt;</a>

           <span <? if($page == 1){?>class="page-number";<?}?>>[ 1 ]</span>
           <span <? if($page == 2){?>class="page-number";<?}?>>[ 2 ]</span>
           <span <? if($page == 3){?>class="page-number";<?}?>>[ 3 ]</span>
           
        <a href="?p=<?= $next_page?>" <? if($page ==3){?>class='hidden-arrows';<?}?>>&gt;</a>
    </div> 
 </ol>



