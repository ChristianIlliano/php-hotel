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
    var_dump($_GET)
    ?>

    <form method="GET">
        <fieldset class="mb-3 container">
            <h2>Dati Hotels</h2>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Disponibilità parcheggio Obbligatoria</label>
                <select id="disabledSelect" name="parcking" class="form-select">
                    <option value="false">SI</option>
                    <option value="true">NO</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Voto</label>
                <select id="disabledSelect" name="votation" class="form-select">
                    <option value="A">1</option>
                    <option value="B">2</option>
                    <option value="C">3</option>
                    <option value="D">4</option>
                    <option value="E">5</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cerca</button>
        </fieldset>
    </form>

    <?php foreach ($hotels as $hotel_index => $info_hotel) { ?>
        <div class="mb-3 container">
            <?php
            if ($_GET["parcking"] === 'true' || $info_hotel["parking"] === true) { ?>
                <div>
                    <h4><?php echo $info_hotel['name']; ?></h4>
                    <p>Descrizione: <?php echo $info_hotel["description"]; ?></p>
                    <p>Voto: <?php echo $info_hotel["vote"]; ?></p>
                    <p>Distanza dal centro: <?php echo $info_hotel["distance_to_center"]; ?></p>
                </div>
            <?php } ?>
        </div>

    <?php } ?>

</body>

</html>