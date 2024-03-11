<style>
    body{
        background-color: #357;}
    .carousel{
        width: 400px;
        height: 600px;
        position: relative;
        margin: 100px auto;}
    a {
        text-decoration: none;}
    img{
        width: 400px;
        position: absolute;
        z-index: 1;}
    .arrows{
        position: absolute;
        
        top: 50%;
        left:50%;
        transform: translate(-50%, -50%);
        width: 500px;}
    .arrows a{
        font-size: 50px;
        color: white;}
    .arrows a:first-child{
        float: left;}
    .arrows a:last-child{
        float: right;}
    .slide-number {
            position: absolute;
            z-index: 5;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 30px;}
    .index{
        z-index: 2;}
    .hidden-arrows{
    opacity: 0;
    }
</style>

<?
 if(isset($_GET['slide'])){
 $slide = $_GET['slide'];
 
 }else{
    $slide =0;
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
    'https://images.pexels.com/photos/2816324/pexels-photo-2816324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
    'https://images.pexels.com/photos/1128227/pexels-photo-1128227.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
);
$slide_number = $slide + 1;
 ?>

<div class="carousel">

<div class="slide-number">SLIDE <?= $slide_number?></div>

<? for($i = 0; $i < count($images) ; $i++){?>
         <a href="?slide=<?= $i ?>"?>
         <img  class="<? if($slide == $i) {echo'index';}?>"  src="<?= $images[$i]?>" alt="">
         </a>
         <?}?>

<div class="arrows">     
   <a href="?slide=<?= $prev_slide?>" class="<?if($slide <= 0){ echo'hidden-arrows';}?>">&lt;</a> 
   <a href="?slide=<?= $next_slide?>"class="<?if($slide >= 6){ echo'hidden-arrows';}?>">&gt;</a>
</div>
   
</div>




