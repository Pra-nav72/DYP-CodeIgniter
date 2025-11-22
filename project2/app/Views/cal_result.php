<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
    <style>
        body{
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 20px;
        }
        a{
            display: block;
            text-decoration: none;
            border: solid 2px black;
            border-radius: 5px;
            background-color: violet;
            padding: 14px;
            margin: 20px;
        }
    </style>
</head>
<body style="background-color: greenyellow;">
    <H1 style="color: red;">The result is: <?= $result ?> </H1>
    <a href="<?= site_url('cal') ?>">go back</a>
</body>
</html>