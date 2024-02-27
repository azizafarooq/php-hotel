<?php require __DIR__ . "/./main.php" ; 

foreach($hotels as $hotel) {
        if ($hotel['parking'] === true) {
        $hotels_with_parking[] = $hotel;
    }
}

?>