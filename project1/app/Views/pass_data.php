<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing data from Controller</title>
</head>
<body>
    <?= "THIS IS TEMPLATING ENGINE "?>
    <h1>Name:<?= $title  ?></h1>
    <h2>Address: <?= $address ?></h2>
    <ul style="list-style-type: georgian;">
        <?php 
            if(count($skill) > 0 ):
                foreach($skill as $s ): ?>    
                    <li><?= $s ?></li>    
            <?php 
                endforeach;
            else:
                echo "No Record found!";
            endif;
            ?>
    </ul>
</body>
</html>