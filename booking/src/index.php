
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