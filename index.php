<?php
    require_once __DIR__ . '/classes/Movie.php';

    $movies = [];
    $interActors = ["Matthew McConaughey", "Anne Hathaway", "Jessica Chastain"];
    $marsActors = ["Gary Sinise","Don Cheadle","Tim Robbins", "Connie Nielsen"];
    $movies[] = new Movie("Interstellar", "Christopher Nolan", $interActors);
    $movies[] = new Movie("Mission to Mars", "Brian De Palma", $marsActors);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($movies as $movie) { ?>
        <div>
            
                <?php echo $movie->getTitle(); ?>
            
            <ul>
                <h5>Actors:</h5>
                <?php
                    $actors = $movie->getActors();
                    foreach ($actors as $actor) { 
                ?>
                    
                <li>
                    <?php echo $actor; ?>
                </li>

                <?php } ?>
            </ul>
        </div>
    <?php } ?>
</body>
</html>