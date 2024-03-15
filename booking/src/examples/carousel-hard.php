
<?
 if(isset($_GET['slide'])){
 $slide = $_GET['slide'];
 
 }else{
    $slide = 0 ;
 }
 if($slide >= 1){
    $prev_slide = $slide - 1;
    
   }
   
    if($slide <= 5){
    $next_slide = $slide + 1;
   }

$images = array( 

    'https://images.pexels.com/photos/11837725/pexels-photo-11837725.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
    'https://images.pexels.com/photos/4198566/pexels-photo-4198566.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
    'https://images.pexels.com/photos/4198572/pexels-photo-4198572.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
    'https://images.pexels.com/photos/4151484/pexels-photo-4151484.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
    'https://images.pexels.com/photos/2406392/pexels-photo-2406392.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
    'https://images.pexels.com/photos/16646950/pexels-photo-16646950/free-photo-of-purple-blossoms-on-tree-in-spring.jpeg?auto=compress&cs=tinysrgb&w=800',
    'https://images.pexels.com/photos/693857/pexels-photo-693857.jpeg?auto=compress&cs=tinysrgb&w=800'


);
$slide_number = $slide + 1;
 ?>
 <style>
    body{
        background-color: #357;}
    .carousel{
        width: calc(400px * 3);
        height: 800px;
        position: relative;
        margin: auto;
        text-align: center;
        overflow: hidden;
        background-color: #369;
        border: 3px solid #99004d;
       
       


    }
    .slider{
        font-size: 0;
        width: calc(7 * 400px);
        margin-top: 100px;
        margin-left: 400px;
      
      
    }
        
    a {
        text-decoration: none;}
    img{
        width: 400px;
    
        transform: translate(-<? echo $slide * 400;?>px );
   
 

      }
    .arrows{
        width: 300px;
        margin: auto;

    }
    .arrows a{
        font-size: 50px;
        color: white;
        display: inline-block;
        margin: 0 20px;

      
    }
    .slide-number {
            position: absolute;
            z-index: 5;
           top: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 30px;}

    .hidden-arrows{
    opacity: 0.3;
    cursor: default;
    }

    .focus{
        width: 400px;
        height: 600px;
        border: 5px solid #b30059;
        position: absolute;
        left: calc(400px - 5px);
        top: calc(100px - 5px);
        z-index: 5;
    }

</style>


<div class="carousel">
    
<div class="focus"></div>
<div class="slide-number">SLIDE <?= $slide_number?></div>
<div class="slider">
<? for($i = 0; $i < count($images) ; $i++){?>
         <a href="?slide=<?= $i ?>"?>
         <img  class="<? if($slide == $i) {echo'index';}?>"  src="<?= $images[$i]?>" alt="">
         </a>
         <?}?>
         </div>
<div class="arrows">     
   <a href="?slide=<?= $prev_slide?>" class="<?if($slide <= 0){ echo'hidden-arrows';}?>">&lt;</a> 
   <a href="?slide=<?= $next_slide?>"class="<?if($slide >= 6){ echo'hidden-arrows';}?>">&gt;</a>
</div>

</div>




