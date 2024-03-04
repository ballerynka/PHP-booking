<style> 
body{
    background-color: #006666;
    color: white;
   
}
table{
 
    border: 3px solid #00cccc;
}
td,input,button{
    border: 3px solid #00cccc;
    width: 100px;
    height: 100px;
    text-align: center;
    vertical-align: middle;
    font-size: 30px;
  
}

button,td:last-of-type{
    font-size: 20px;
    border: 3px solid #e60073;
}

</style>



<?

if (isset($_GET['grade1'], $_GET['grade2'], $_GET['grade3'] )){
    $grade1 = $_GET['grade1'];
    $grade2 = $_GET['grade2'];
    $grade3 = $_GET['grade3'];

    if(is_numeric($_GET['grade1'])){
      
        if ($grade1 = filter_var($grade1) >= 0 && $grade1 <= 10){
          
    }else{
        $error = "only from 0 to 10";
    }

}else{
        $error2 = 'You must enter only numeric symbols';
    }       

   
    if(is_numeric($_GET['grade2'])){
        if ($grade2 = filter_var($grade2) >= 0 && $grade2 <= 10){
            
              
      }else{
          $error = "only from 0 to 10";
      }
  
  }else{
          $error2 = 'You must enter only numeric symbols';
      }       
      if(is_numeric($_GET['grade3'])){
        if ($grade3 = filter_var($grade3) >= 0 && $grade3 <= 10){
             
            
      }else{
          $error = "only from 0 to 10";
      }
  
  }else{
          $error2 = 'You must enter only numeric symbols';
      }       
      $grade1 = (float) $_GET['grade1'];
      $grade2 = (float) $_GET['grade2'];
      $grade3 = (float) $_GET['grade3'];
      $average = ($grade1 + $grade2 + $grade3) / 3;
}

    

?>

<br>
<br>
<br>

<form action="/examples/grade-calculator.php">
    <input type="text" name="grade1" required>
    <input type="text" name="grade2" required>
    <input type="text" name="grade3" required>
    <button>Average grade</button>
</form>


<br>
<br>
<br>



   
<table>

<tr>
<td><?print($grade1)?></td>
<td><?print($grade2)?></td>
<td><?print($grade3)?></td>


<?if(isset($average)):?>
<td><?=$average?></td>
<? endif?>


</tr>
</table>

<?if(isset($error)):?><?=$error?>
<? endif?>


<?if(isset($error2)):?><?=$error2?>
<? endif?>
  


