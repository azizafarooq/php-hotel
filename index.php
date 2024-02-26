<?php require_once "./main.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel PHP</title>
</head>
<body>
    <ul>
            <?php foreach($hotels as $hotel): ?>
                <li>
                <h2><?php echo $hotel['name']; ?></h2>
                <p>Description: <?php echo $hotel['description']; ?></p>
                <p>Parking: <?php echo $hotel['parking'] ? 'Available' : 'Not available'; ?></p>
                <p>Vote: <?php echo $hotel['vote']; ?></p>
                <p>Distance to center: <?php echo $hotel['distance_to_center']; ?> km</p>
                </li>
            <?php endforeach;
            ?>
    </ul>
    
</body>
</html>