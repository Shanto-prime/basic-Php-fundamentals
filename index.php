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
        .o2red{
            color: red;
        }
        .o2green{
            color: green;
        }
        .o2blue{
            color: blue;
        }
        .o2skyblue{
            color: skyblue;
        }
    </style>
</head>

<body>
    <h4>Test Foreach function</h4>
    <?php $colors =["red", "green", "blue", "skyblue"]; ?>
    <div class="box">
        <ul class="list">
            <?php foreach($colors as $color): ?>
                <li class="o2<?= $color; ?>"><?php echo "the color is" ." " . $color; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>