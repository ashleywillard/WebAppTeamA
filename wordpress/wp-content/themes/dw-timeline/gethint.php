<?php

require_once('../../../wp-config.php');

$q=$_REQUEST["q"];

echo '<div class="close" onclick="closePopup()">&#10006;</div>' . "\n";

echo '<div class="popup-header">' . $q . '</div>' . "\n";

$gf = 0;
$nf = 0;
$sf = 0;
$es = 0;
$v = 0;

global $wpdb;
$items2 = "SELECT glutenfree, nutfree, shellfishfree, eatsmart, vegan FROM wp_menu WHERE item_name = '" . $q . "'";
$results2 = $wpdb->get_results($items2);

echo '<div class="padding">' . "\n";
foreach($results2 as $r) {
    if ($r->glutenfree == 1) {
      $gf = 1;
      echo '<div class="popup-circles2 circle1"></div>' . "\n";
    }
    if ($r->nutfree == 1) {
      $nf = 1;
      echo '<div class="popup-circles2 circle2"></div>' . "\n";
    }
    if ($r->shellfishfree == 1) {
      $sf = 1;
      echo '<div class="popup-circles2 circle3"></div>' . "\n";
    }
    if ($r->eatsmart == 1) {
      $es = 1;
      echo '<div class="popup-circles2 circle4"></div>' . "\n";
    }
    if ($r->vegan == 1) {
      $v = 1;
      echo '<div class="popup-circles2 circle5"></div>' . "\n";
    }
}

echo "\n" . '</div>';

echo '<div class="ingredients">' . "\n" . '<div class="ingredients-header">Ingredients</div>' . "\n" . '<div id="ingredients">' . "\n"; 

$items = "SELECT item_description FROM wp_menu WHERE item_name = '" . $q . "'";
$results = $wpdb->get_results($items);

foreach($results as $r) {
    echo $r->item_description;
}

echo "\n" . '</div>' . "\n" . '</div>' . "\n";

echo '<div class="price">' . "\n" . '<div class="price-header">Price</div>' . "\n" . '<div id="price">' . "\n";

$items1 = "SELECT item_price FROM wp_menu WHERE item_name = '" . $q . "'";
$results1 = $wpdb->get_results($items1);

foreach($results1 as $r) {
    echo $r->item_price;
}

echo "\n" . '</div>' . "\n" . '</div>' . "\n";

echo '<div class="allergy-info">' . "\n" . '<div class="allergy-header">Allergy Information</div>' . "\n" . '<div id="allergies">' . "\n";

if ($gf == 1) {
  echo '<div class="popup-circles circle1"></div><div class="allergies gluten">Gluten Free</div><br>' . "\n";
}
if ($nf == 1) {
  echo '<div class="popup-circles circle2"></div><div class="allergies nut">Nut Free</div><br>' . "\n";
}
if ($sf == 1) {
  echo '<div class="popup-circles circle3"></div><div class="allergies shellfish">Shellfish Free</div><br>' . "\n";
}
if ($es == 1) {
  echo '<div class="popup-circles circle4"></div><div class="allergies eatsmart">Eat Smart</div><br>' . "\n";
}
if ($v == 1) {
  echo '<div class="popup-circles circle5"></div><div class="allergies vegan">Vegan</div>' . "\n";
}

echo "\n" . '</div>' . "\n" . '</div>' . "\n";

?>