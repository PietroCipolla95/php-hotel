<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-info">

    <div class="container mt-5">
        <div class="row">

            <table class="table table-dark table-bordered">
                <thead>
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Parking
                        </th>
                        <th>
                            Vote
                        </th>
                        <th>
                            Distance to center
                        </th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($hotels as $hotel) : ?>


                        <?php if ($hotel['parking']) {
                            $parking = 'si';
                        } else {
                            $parking = 'no';
                        }
                        ?>

                        <tr>
                            <td>
                                <?php echo $hotel['name']; ?>
                            </td>
                            <td>
                                <?php echo $hotel['description']; ?>
                            </td>

                            <td>
                                <?php echo $parking; ?>
                            </td>

                            <td>
                                <?php echo $hotel['vote']; ?>
                            </td>

                            <td>
                                <?php echo $hotel['distance_to_center']; ?>
                            </td>
                        </tr>


                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>