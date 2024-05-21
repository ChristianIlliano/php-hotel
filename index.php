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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    $parcking = $_GET["parcking"];
    $votation = $_GET["votation"];
    // var_dump($_GET)
    ?>

    <form method="GET">
        <fieldset class="mb-3 container ">
            <h2>Dati Hotels</h2>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Disponibilità parcheggio Obbligatoria</label>
                <select id="disabledSelect" name="parcking" class="form-select">
                    <option value="true">SI</option>
                    <option value="false">NO</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Voto</label>
                <select id="disabledSelect" name="votation" class="form-select">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cerca</button>
        </fieldset>
    </form>
    <div class="mb-3">
        <table class="table container">

            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($hotels as $hotel_index => $info_hotel) { ?>
                        <?php
                        //var_dump($votation, $info_hotel["vote"]);
                        if ($parcking  === 'true' && $info_hotel["parking"] == true && $info_hotel["vote"] >= $votation) { ?>
                <tr>
                    <th scope="row"><?php echo $info_hotel['name']; ?></th>
                    <td><?php echo $info_hotel["description"]; ?></td>
                    <td> <?php echo $info_hotel["vote"]; ?></td>
                    <td><?php echo $info_hotel["distance_to_center"]; ?></td>
                </tr>
            <?php } elseif ($info_hotel["parking"] === false && $info_hotel["vote"] >= $votation) { ?>
                <tr>
                    <th scope="row"><?php echo $info_hotel['name']; ?></th>
                    <td><?php echo $info_hotel["description"]; ?></td>
                    <td> <?php echo $info_hotel["vote"]; ?></td>
                    <td><?php echo $info_hotel["distance_to_center"]; ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
        </tr>
            </tbody>
    </div>

</body>

</html>