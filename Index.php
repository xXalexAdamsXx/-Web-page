<?php
$section = "Home";
include_once "Content/HTMLhead.php";
include_once "Content/HTMLheader.php";
include_once "Content/ParallaxFrame.php";

$description = "Hello, welcome to the Iota Sigma Chapter of Pi Kappa Phi!";

echo createParallax("Assets/ParallaxArt.jpg", $description, 0);

?>

<div style='height: 50px;'></div>

<?php include_once "Content/HTMLfooter.php" ?>