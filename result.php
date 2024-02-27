<?php require_once __DIR__ . "/./vars/main.php"; ?>

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

</style>

<body>
    <div class="container mt-5">
        <h1>Available Hotels</h1>
        <div class="d-flex mt-5 flex-wrap">

            <?php if (isset($_GET['parking-included'])) {
            foreach($hotels_with_parking as $hotel_with_parking): ?>
            <div class="card mb-3 mr-3" style="max-width: 18rem;">
                <div class="card-header">
                    <?php echo $hotel_with_parking['name']; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $hotel_with_parking['description']; ?>
                    </h5>
                    <p class="card-text">
                    <p>Parking:
                        <?php echo $hotel_with_parking['parking'] ? 'Available' : 'Not available'; ?>
                    </p>
                    <p>Vote:
                        <?php echo $hotel_with_parking['vote']; ?>
                    </p>
                    <p>Distance to center:
                        <?php echo $hotel_with_parking['distance_to_center']; ?> km
                    </p>
                </div>
            </div>

            <?php endforeach;
            } else {
                 foreach($hotels as $hotel): ?>
            <div class="card mb-3 mr-3" style="max-width: 18rem;">
                <div class="card-header">
                    <?php echo $hotel['name']; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $hotel['description']; ?>
                    </h5>
                    <p class="card-text">
                    <p>Parking:
                        <?php echo $hotel['parking'] ? 'Available' : 'Not available'; ?>
                    </p>
                    <p>Vote:
                        <?php echo $hotel['vote']; ?>
                    </p>
                    <p>Distance to center:
                        <?php echo $hotel['distance_to_center']; ?> km
                    </p>
                </div>
            </div>
            <?php endforeach; } ?>


        </div>
    </div>
</body>

</html>