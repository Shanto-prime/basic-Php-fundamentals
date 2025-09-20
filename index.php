<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo PHP</title>
    <style>
        body {
            margin: 20px 100px;
            height: 80vh;
            .list{
                padding-inline-start: 20px;
            }
        }
    </style>
</head>

<body>
    <h4>Test Foreach function</h4>
    <?php
    $colors =["red", "green", "blue", "skyblue"];
    ?>
    <div class="box">
        <ul class="list">
            <?php
            foreach($colors as $color){
                echo "<li style='color:$color'>$color</li>";
            }
            ?>
        </ul>
    </div>
</body>

</html>