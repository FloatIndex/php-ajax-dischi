<?php

require __DIR__ . '/database.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>PHP Dischi</title>
</head>
<body>

    <!-- header -->
    <header>
            <img class="logo" src="./img/mtv-logo.png" alt="mtv logo">
    </header>
    <!-- fine header -->

    <!-- main -->
    <main>
        <div class="container">
            
            <div class="row gy-3 row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-4">
                
                        <?php
                            foreach($database as $disc) {
                                echo    "<div class='col'>
                                            <div class='card p-3'>
                                                <img class='poster' src=" . $disc['poster'] . ">
                                                <div class='card-body p-0 pt-3'>
                                                    <h5 class='title mb-3'>" . $disc['title'] . "</h5>
                                                    <p class='m-0'>" . $disc['author'] . "</p>
                                                    <p class='m-0'>" . $disc['year'] . "</p>
                                                </div>
                                            </div>
                                        </div>";
                            }
                        ?>
                
            </div>

        </div>
    </main>
    <!-- fine main -->
    
</body>
</html>