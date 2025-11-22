<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body{
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            background-color: paleturquoise;
        }

    </style>
</head>
<body>
    <h1>Calculator</h1>
    <form action="<?= site_url('cal_result') ?>" method="post">
        <label for="first">Enter num-1: </label>
        <input type="number" name="num1"> <br><br>
        <label for="second" >Enter num-1: </label>
        <input type="number" name="num2"> <br><br>
        <input type="radio" name="oper" id="add" value="+">add: +</input>
        <input type="radio" name="oper" id="sub" value="-">sub: -</input>
        <input type="radio" name="oper" id="mul" value="*">mul: *</input>
        <input type="radio" name="oper" id="div" value="/">div: /</input><br>
        <input type="submit", value="submit" id="btn">
    </form>
</body>
</html>