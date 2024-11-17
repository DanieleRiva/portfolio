<?php

require __DIR__ . "/vendor/autoload.php";

// import components.php class
require_once('src/components/App/App.php');

$appsAndWidgets = '[
    {
        "type": widget,
        "cols": "2",
        "rows": "1",
        "img": "",
        "page": "",
    },
    {
        "type": app,
        "name": "instagram",
        "icon": "public/imgs/icons/instagram.webp",
        "iconAlt": "",
        "page": "",
    },
]';

$main_cells = json_decode(file_get_contents("public/json/main.json"), true);
$bottom_cells = json_decode(file_get_contents("public/json/bottom.json"), true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>

    <link rel="stylesheet" href="src/css/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>

    <main class="flex justify-center w-screen h-screen overflow-hidden font-poppins touch-none">
        <?php include('src/components/Phone/Phone.php'); ?>
    </main>

</body>

</html>