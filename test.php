<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="test.php" method="GET">
        <input type="number" name="num1">
        <br><br>
        <select name="num2" id="test">
            <option value="" disabled selected>choose</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>    
        </select>
        <br>
        <button type="submit">hitung (kali)</button>
    </form>

    <?php
    if (isset($_GET["num1"]) && isset($_GET["num2"])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        echo $num1 * $num2;
    } else {
        echo "Please enter values for num1 and num2.";
    }
    ?>

</body>
</html>

