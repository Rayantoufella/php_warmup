
<?php 

$Product = [

   ["name" => "Laptop"   ,  "prix" => 1000 , "category" => "Electronics"],

   ["name" => "Phone"    ,  "prix" => 500  , "category" => "Electronics"],

   ["name" => "Tablet"   ,  "prix" => 300  , "category" => "Electronics"],

   ["name" => "Monitor"  ,  "prix" => 200  , "category" => "Electronics"],

   ["name" => "Usb Drive",  "prix" => 50   , "category" => "Accessories"],

];

$category = $_GET["category"] ?? "" ; 

$found = false;

foreach($Product as $p){
    if ($category == "" || $category == $p["name"]){
        echo "Product you selected : " . $p["name"] . "<br>";
        $found = true;
        
    }
}
if (!$found){
    echo "No products found in this category <br>";
}

echo "----------------------------     Sort (Asc/Desc)    --------------------------------------------<br><br><br> ";

$sort = $_GET["sort"] ?? "";

usort($Product , function($a,$b) use ($sort) {
    switch($sort){
        case "desc":
            return $b["name"] <=> $a["name"];
            break;
        case "asc":
            return $a["name"] <=> $b["name"];
            break;
        default:
            return 0;
    }
});

foreach($Product as $p){
    echo "Product  : " . $p["name"] ."<br>";
}


echo "---------------------------------       Link       ---------------------------------------<br><br><br> ";


?>

<a href="Challenge6.php?category=Laptop">Laptop</a><br>
<a href="Challenge6.php?category=Phone">Phone</a><br>
<a href="Challenge6.php?category=Tablet">Tablet</a><br>
<a href="Challenge6.php?category=Monitor">Monitor</a><br>
<a href="Challenge6.php?category=Usb Drive">Usb Drive</a><br> 
<a href="Challenge6.php">All Products</a><br>
<a href="Challenge6.php?sort=asc">Sort Ascending</a><br>
<a href="Challenge6.php?sort=desc">Sort Descending</a><br>