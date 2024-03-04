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

if(isset($_GET['grade1'],$_GET['grade2'],$_GET['grade2'])){
        $grade1 = $_GET['grade1'];
        $grade2 = $_GET['grade2'];
        $grade3 = $_GET['grade3'];

}



    if(is_numeric($_GET['grade1']) && is_numeric($_GET['grade2']) && is_numeric($_GET['grade3'])){
  
    }else{
        $error = 'You can enter only numeric symbols';
        
    }
 



    if ($grade1 = filter_var($grade1) >= 0 && $grade1 <= 10 && $grade2 = filter_var($grade2) >= 0 && $grade2 <= 10 && $grade3 = filter_var($grade3) >= 0 && $grade3 <= 10) {
        $grade1 = (float)$_GET['grade1'];
        $grade2 = (float)$_GET['grade2'];
        $grade3 = (float)$_GET['grade3'];
        $average =  ((float)$_GET['grade1'] + (float)$_GET['grade2']+ (float)$_GET['grade3']) / 3;
    }else{
        $error2 = "You can enter only numbers from 0 to 10";}
        
?>



<form action="/examples/grade-calculator2.php" method="GET">
    <input type="text" name="grade1" required>
    <input type="text" name="grade2" required>
    <input type="text" name="grade3" required>
    <button>Average grade</button>
</form>


    <?if(isset($average)):?>
<table><tr>
<td><?= ($grade1)?></td>
<td><?= ($grade2)?></td>
<td><?= ($grade3)?></td>
<td><?= ($average)?></td></tr></table>
    <?endif?>
    <?if(isset($error)){
    print($error);
}else{
    if(isset($error2)):
 print($error2);
    endif;
    }
?>
 
