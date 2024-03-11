




<style>

    body{background-color:#333;color:white; font-size: 30px;} 
    a{text-decoration: none; color:white; margin: 10px;}
    div{text-align: center; margin: 30px;}
    /*a:nth-of-type(<//?=$page?>){border-bottom: 2px solid red;}*/
    .link-style{border-bottom: 2px solid red;}
    .hidden-arrow{opacity: 0; cursor: default;}

</style>

<!-- LOGIC -->

<?

if(isset($_GET['p'])){
$page = $_GET['p'];
}else{
    $page = 1;
}

if($page >= 2){
 $prev_page = $page - 1;
}

 if($page <= 4){
 $next_page = $page + 1;
}

?>

<!-- TEMPLATE -->

<div>
You are on page <?= $page?>

</div>

<div>

    <a href="?p=<?= $prev_page?>" <? if($page <= 1){?>class='hidden-arrow';<?}?>?>&lt;</a>



         <? for($i = 1; $i <= 5; $i++){?>
         <a href="?p=<?= $i ?>" class="<? if($page == $i) {echo'link-style';} if($i > 5 ){$page = false;}?>">
         <?= $i ?>
         </a>
         <?}?>

  
    <a href="?p=<?= $next_page?>" <? if($page >=5){?>class='hidden-arrow';<?}?>?>&gt;</a>
</div>