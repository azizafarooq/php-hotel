<?php require_once "./main.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hotel Finder</title>
</head>
<style>
    ul{
        list-style: none;
        padding-left: 0;
        margin-top: 2rem
    }
</style>
<body>
    <div class="container mt-5">
    <h1>Available Hotels</h1>
    <ul>
        <?php if (isset($_GET['parking-included'])) {
            foreach($hotels_with_parking as $hotel_with_parking): ?>
            <li>
                    <h2><?php echo $hotel_with_parking['name']; ?></h2>
                    <p>Description: <?php echo $hotel_with_parking['description']; ?></p>
                    <p>Parking: <?php echo $hotel_with_parking['parking'] ? 'Available' : 'Not available'; ?></p>
                    <p>Vote: <?php echo $hotel_with_parking['vote']; ?></p>
                    <p>Distance to center: <?php echo $hotel_with_parking['distance_to_center']; ?> km</p>
                    </li>
                <?php endforeach;
            } else {
                 foreach($hotels as $hotel): ?>
                    <li>
                    <h2><?php echo $hotel['name']; ?></h2>
                    <p>Description: <?php echo $hotel['description']; ?></p>
                    <p>Parking: <?php echo $hotel['parking'] ? 'Available' : 'Not available'; ?></p>
                    <p>Vote: <?php echo $hotel['vote']; ?></p>
                    <p>Distance to center: <?php echo $hotel['distance_to_center']; ?> km</p>
                    </li>
                <?php endforeach;
                
            } ?>    
    </ul>
    </div>
</body>
</html>