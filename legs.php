<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Legs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="text-bg-dark">
    <div class="container">
        <h1 class="text-center my-3">Legs Workout</h1>
        <div>
            <img src="./images/legs_workout.jpg" class="w-100 my-3 px-4" alt="">
        </div>
        <div class="my-4 text-center px-3">
        <?php
            $sql = "select description from exercises where type = 'legs';";
            $result = mysqli_query($connect, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $desc = $row['description'];
                echo "<p> $desc
      </p>";
            }
            ?>

        </div>
        <ul>
            <li>
                Barbell Back Squat
            </li>
            <li>
                Barbell Front Squat
            </li>
            <li>
                Deadlift
            </li>
            <li>
                Romanian Deadlift
            </li>
            <li>
                Leg Press
            </li>
            <li>
                Lunges
            </li>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>