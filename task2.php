<?php

    $mysqli = new mysqli("localhost", "root", "", "test");

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    $mysqli->query("CREATE TABLE `users` (
            `id` int(11),
            `name` varchar(255),
            `gender` tinyint(4),
            `dep_id` int(11)
            );
        ");

    $mysqli -> query("
            INSERT INTO `users` 
                (`name`, `gender`, `dep_id`) 
            VALUES 
                (`jogn`, 1, 2), 
                (`aria`, 2, 3), 
                (`mini`, 2, 4), 
                (`jade`, 2, 3), 
                (`nikita`, 1, 3), 
                (`alex`, 1, 6), 
                (`nika`, 2, 7), 
                (`adolf gitler`, 1, 1), 
                (`stalin`, 1, 7); 
    ");

