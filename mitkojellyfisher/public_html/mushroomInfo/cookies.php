<?php
    $valMap = [
      "Chicken_of_the_Woods" => "Chicken of the Woods Mushroom",
      "Beech" => "Beech Mushroom",
      "Puff_Ball" => "Puff Ball Mushroom",
      "Enoki" => "Enoki Mushroom",
      "King_Trumpet" => "King Trumpet Mushroom",
      "Shiitake" => "Shiitake Mushroom",
      "Chanterelle" => "Chanterelle Mushroom",
      "Blue_Oyster" => "Blue Oyster Mushroom",
      "Cremini" => "Cremini Mushroom",
      "Lobster" => "Lobster Mushroom",
    ];

    //generalize the updateCookies function (not repeat code for each page)
    function updateCookies($mushroomType) {
        if(!isset($_COOKIE["containsCookies"])) {
          setCookie("containsCookies", 1, time() + 60 * 60 * 24 * 5, "/");
        }
        
        if(!isset($_COOKIE[$mushroomType])) {
          setcookie($mushroomType, 1, time() + 60 * 60 * 24 * 5, "/");
        }
        else {
          $counter = $_COOKIE[$mushroomType] + 1;
          setCookie($mushroomType, $counter, time() + 60 * 60 * 24 * 5, "/");
        }
    }

    //gets the top 5 products from cookies
    function getTopProducts() {
        $top_products = [];
        foreach ($_COOKIE as $key => $value) {
            if($key == "containsCookies") {
              continue;
            }
            $top_products[$key] = $value;
        }
        arsort($top_products);
        $top_products = array_slice($top_products, 0, 5);
        return $top_products;
    }
?>