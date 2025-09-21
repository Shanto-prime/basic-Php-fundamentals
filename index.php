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

            .list {
                padding-inline-start: 20px;
            }
        }

        .o2red {
            color: red;
        }

        .o2green {
            color: green;
        }

        .o2blue {
            color: blue;
        }

        .o2skyblue {
            color: skyblue;
        }
    </style>
</head>

<body>
    <h4>Test Foreach function</h4>
    <?php
    $peoples = [
        [
            "name" => "John",
            "age" => 30,
            "color" => "red",
            "url" => "https://localhost:5959/john"
        ],
        [
            "name" => "Jane",
            "age" => 25,
            "color" => "green",
            "url" => "https://localhost:5959/jane"
        ],
        [
            "name" => "Bob",
            "age" => 40,
            "color" => "blue",
            "url" => "https://localhost:5959/bob"
        ],
        [
            "name" => "Alice",
            "age" => 25,
            "color" => "skyblue",
            "url" => "https://localhost:5959/alice"
        ]

    ];
    function filterByAge($peoples, $age)
    {
        $filteredAge = [];

        foreach ($peoples as $people) {
            if ($people["age"] === $age) {
                $filteredAge[] = $people;
            }
        }
        return $filteredAge;
    }
    ?>
    <div class="box">
        <ul class="list">
            <?php foreach (filterByAge($peoples,25) as $people): ?>
                <?php if ($people["age"] === 25): ?>
                    <li class="o2<?= $people["color"]; ?>">
                        <?= "This color is" . " " . $people["color"]; ?>
                        <?= "and age is" . " " . $people["age"]; ?>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>