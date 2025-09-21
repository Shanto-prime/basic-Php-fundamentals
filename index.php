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