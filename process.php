<?php

require_once 'circle.php';
require_once 'rectangle.php';
require_once 'traingle.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $shape = $_POST['shape'];
    $mesurment1 = $_POST['mesurment1'];
    $mesurment2 = $_POST['mesurment2'];

    if ($shape == 'circle') {

        $circle = new Circle($shape, $mesurment1);
        $area = $circle->getArea();
    } elseif ($shape == 'rectangle') {

        $rectangle = new Rectangle($shape, $mesurment1, $mesurment2);
        $area = $rectangle->getArea();
    } elseif ($shape == 'tringle') {

        $tringle = new Traingle($shape, $mesurment1, $mesurment2);
        $area = $tringle->getArea();
    } else {
        $area = 0;
    }
} else {
    echo "Not Found";
    echo ' go <a href="index.php">back</a>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Shape Measurement</title>
</head>

<body>

    <div class="d-flex justify-content-center">
        <div class="col-md-4 mt-5 p-4 shadow rounded">
            <h2 class="text-center mb-3 text-uppercase" style="font-weight: 600;">
                Shape Result
            </h2>
            <div class="m-5 fs-5">
            <label for="">
                Shape: <span class="text-capitalize" style="font-weight: 600;">
                <?php

                echo $area > 0 ? $shape : '';

                ?>
                </span>
            </label>
            <br>
            <label for="">
                Area: <span style="font-weight: 600;">
                <?php

                echo $area > 0 ? $area : '';

                ?>
                </span>
            </label>
            </div>

        </div>
    </div>

</body>

</html>