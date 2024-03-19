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
        text-decoration-color:  #b30059;
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
    font-size: 28px;
}
.sort a{
    font-size: 20px;
}
.sort a span{
    color: #b30059;
}

</style>


<ol>

<div class="page">
You are on page <?= $page?>
</div>

<div class="sort">Sort by price : 
    <a class="sort-arrow" href="?s=ascendent"><span>&#8657</span> Low to high</a>
    <a class="sort-arrow" href="?s=descendent"><span>&#8659</span> High to low</a>
</div>

 <?
$start = ($page - 1) * 3;
$end = $page * 3;

    for($i = $start; $i< count($products) && $i < $end ;$i++ ){?>

    <li>
    <h2><?=$products[$i]['name']?>
        <?if($products[$i]['new']){?>
            <img src="<?=NEW_STICKER?> " alt="" width='50'>
       <?}?>
    <h3><?=$products[$i]['category']?></h3>
    <img src="<?=$products[$i]['image']?>" width="100" alt="">
    <div  class="price"><?=$products[$i]['price']['amount']?><?=$products[$i]['price']['currency']?></div>
    </li>
    
 <?}?>

<div class="arrows">
<?if($sort === 'ascendent'){?>
    <a href="?p=<?= $prev_page?>&s=ascendent"<? if($page == 1){?>class='hidden-arrows';<?}?>>&lt;</a>
    <span <? if($page == 1){?>class="page-number";<?}?>>[ 1 ]</span>
           <span <? if($page == 2){?>class="page-number";<?}?>>[ 2 ]</span>
           <span <? if($page == 3){?>class="page-number";<?}?>>[ 3 ]</span>
    <a href="?p=<?= $next_page?>&s=ascendent"<? if($page ==3){?>class='hidden-arrows';<?}?>>&gt;</a>
<?}else {?>
       <a href="?p=<?= $prev_page?>&s=descendent"<? if($page == 1){?>class='hidden-arrows';<?}?>>&lt;</a>
       <span <? if($page == 1){?>class="page-number";<?}?>>[ 1 ]</span>
           <span <? if($page == 2){?>class="page-number";<?}?>>[ 2 ]</span>
           <span <? if($page == 3){?>class="page-number";<?}?>>[ 3 ]</span>
       <a href="?p=<?= $next_page?>&s=descendent"<? if($page ==3){?>class='hidden-arrows';<?}?>>&gt;</a>
<?}?>
    </div> 
 </ol>



