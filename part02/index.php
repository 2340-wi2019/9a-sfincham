<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 2</title>
</head>
<body>
    
    <?php
        //Task 3.1: Change these items to reflect
        //four of your favorite things
        $my_favorite_things = array (
            "My first favorite thing is God",
            "My second favorite thing is Family",
            "My third favorite thing is the Kansas City Chiefs",
            "My fourth favorite thing is K-State Wildcats"
        );
    ?>

    <h1>My Favorite Things</h1>
        <!-- Task 3.2: Code to output things below -->
    <ol>
        <?php
           for ($i =0; $i < count($my_favorite_things); $i++){
            echo "<li>".$my_favorite_things[$i]. "</li>";
             }
        ?>
    </ol>

    </body>

