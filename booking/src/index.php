
<!--DATA BASE-->
<?
define("PAGE_TITLE", "Booking confirmation");
define("SEAT_PRICE", "100.50");
                  


$book_client_vip = true;                         // boolean
$book_adults = 3;                                // integer
$book_cost = $book_adults * SEAT_PRICE;         // float
$contacts_link_text = "CONTACT US";



$days_till_oppening = 29;                        //snake_case_name
$bonusPlaces = 10;                               //camelCase
?>


<!-- TEMPLATE / VIEW -->

<h1><?= PAGE_TITLE ?></h1>
<p>Adults: <?= $book_adults ?></p>
<p>Total cost: <?= $book_adults ?> x <?= number_format(SEAT_PRICE, 2)?> = <?= number_format($book_cost, 2) ?></p>



<? if ($book_client_vip == true) : ?>
  <p>VIP</p>
<? endif ?>

<a href="contacts.php"><?= $contacts_link_text ?></a>







<!--
<h1>Welcome to  our Hotel Booking</h1>

<p>Days till oppening <? print($days_till_oppening) ?></p>
<p>Bonus places left <? print($bonusPlaces) ?>
</p>
<p>Don't hesitate to early book us!</p>


-->



<!--
## Syntax

- php tag - &?php ?&
- short tag  - &? ?&
- instr1; instr2; ...
- ptint() -> function , echo -> instrution 
- flow tags:


&? control : ?&
...
&? endcontrol ?&



##Values

* String
* Integer
* Float
* Boolean



* Array
* Object
* Null
* Resourse


--> 
<hr>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<? 
const TICKET_PRICE = 100.50;   // USD
const DISCOUNT_L = 300.00;     // USD
const DISCOUNT_P = 20;     // %


$quantity = 4;   // tickets

$total = $quantity * TICKET_PRICE;
 

if ($total > DISCOUNT_L){
  $total = $total * (100 - DISCOUNT_P) / 100;

}

print($total);




?>
<hr>
<br><br><br><br><br><br><br><br>
<!-- LOGIC -->

<?
 const TICKET_COST = 100;
if (array_key_exists('quantity', $_GET)){
  $quantity = $_GET['quantity'];

  if (preg_match('/^\d+$/', $quantity)){
    $quantity = (int) $quantity;
   //$quantity = (int) $quantity;
 $cost = TICKET_COST * $quantity;
  $totalCost = $cost;
  }
  else{
    $error ="Value must be an integer number";
  }
}

else{
$error = "You didn't specify any quantity";
}



?>
<!-- TEMPLATE -->
<br>
<a href="/?quantity=1">Buy 1 ticket</a><br>
<a href="/?quantity=2">Buy 2 tickets</a><br>
<a href="/?quantity=3">Buy 3 tickets</a><br>
<hr>

<form method="GET" action="/">
  <input type="text" name="quantity" placeholder="Enter desired value...">
  <button>BUY</button>
</form>

<? if (isset($totalCost)): ?>
<div><?= $quantity?> tickets x <?= TICKET_COST?> = <?= $totalCost?></div>
<? endif ?>

<? if (isset($error)): ?>
<div style="color:red;"><?= $error?></div>
<? endif ?>

