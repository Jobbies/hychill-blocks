<?php
Kirby::plugin("hychill/blocks", [
    "blueprints" => [
        "blocks/diagnosis" => __DIR__ . "/blueprints/blocks/diagnosis.yml",
        "blocks/feel" => __DIR__ . "/blueprints/blocks/feel.yml",
    ],
    "snippets" => [
        "blocks/diagnosis" => __DIR__ . "/snippets/blocks/diagnosis.php",
        "blocks/feel" => __DIR__ . "/snippets/blocks/feel.php",
    ],
]);
