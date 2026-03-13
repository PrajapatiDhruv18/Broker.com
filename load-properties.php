<?php
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 5;
$start = ($page - 1) * $limit;

/* Home Equipment Data */
$items = [
  ["name"=>"Refrigerator","brand"=>"LG","price"=>"₹28,000"],
  ["name"=>"Washing Machine","brand"=>"Samsung","price"=>"₹32,000"],
  ["name"=>"Microwave Oven","brand"=>"IFB","price"=>"₹14,500"],
  ["name"=>"Air Conditioner","brand"=>"Daikin","price"=>"₹45,000"],
  ["name"=>"LED TV","brand"=>"Sony","price"=>"₹55,000"],
  ["name"=>"Water Purifier","brand"=>"Kent","price"=>"₹18,000"],
  ["name"=>"Geyser","brand"=>"Havells","price"=>"₹9,500"],
  ["name"=>"Ceiling Fan","brand"=>"Usha","price"=>"₹3,200"],
  ["name"=>"Induction Cooktop","brand"=>"Prestige","price"=>"₹4,000"],
  ["name"=>"Vacuum Cleaner","brand"=>"Philips","price"=>"₹8,500"],
  ["name"=>"Mixer Grinder","brand"=>"Bajaj","price"=>"₹5,200"],
  ["name"=>"Dishwasher","brand"=>"Bosch","price"=>"₹38,000"],
  ["name"=>"Air Fryer","brand"=>"Philips","price"=>"₹12,000"],
  ["name"=>"Room Heater","brand"=>"Orient","price"=>"₹3,800"],
  ["name"=>"Iron","brand"=>"Morphy Richards","price"=>"₹2,200"]
];

$slice = array_slice($items, $start, $limit);

foreach ($slice as $item) {
  echo '
  <div class="card">
    <div class="img"></div>

    <div class="details">
      <h3>'.$item['name'].'</h3>
      <div>Brand: '.$item['brand'].'</div>
      <div class="price">'.$item['price'].'</div>
    </div>

    <div class="cart-actions">
      <button class="buy-btn">Buy Now</button>
      <button class="cart-btn" onclick="addToCart()">Add to Cart</button>
    </div>
  </div>';
}
