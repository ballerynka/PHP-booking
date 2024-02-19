<h1>Contact us:</h1>

<?
$cityAddress = "Chisinau" ;
$streetAddress = "Mircea cel Batran 33";
$phoneNumber = "+37369043992";
$emailAddress = "ballerynka@gmail.com";
$link = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2718.2726715543085!2d28.887006776630543!3d47.05450127114444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97decb01833f5%3A0x89331e42f807a097!2zQnVsZXZhcmR1bCBNaXJjZWEgY2VsIELEg3Ryw65uIDMzLCBDaGnImWluxIN1LCBNb2xkb3Zh!5e0!3m2!1sen!2s!4v1708351256433!5m2!1sen!2s";
?>

<div><span>Sales department number:</span>
<a href="tel:<? $phoneNumber ?>"><?= $phoneNumber ?></a></div>
<br>


<div><span>Our email address:</span>
<a href="mailto:<? $emailAddress ?>"><?= $emailAddress ?></a></div>
<br>

<div><span>We are located in: <?=$cityAddress?> / <?= $streetAddress ?></span></div>
<br>

<div><span>Google Maps:</span>
<a href="<? $link?>">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2718.2726715543085!2d28.887006776630543!3d47.05450127114444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97decb01833f5%3A0x89331e42f807a097!2zQnVsZXZhcmR1bCBNaXJjZWEgY2VsIELEg3Ryw65uIDMzLCBDaGnImWluxIN1LCBNb2xkb3Zh!5e0!3m2!1sen!2s!4v1708351256433!5m2!1sen!2s" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></a></div>

