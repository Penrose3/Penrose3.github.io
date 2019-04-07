<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Circle</title>
</head>
<body>
    <form action="calculate.php" method="post">
        <label for="radius">Choose a radius for the area and circumference of a circle</label>
        <select id="radius" name="radius">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <input type="submit" value="Calculate">
    </form>
    
    <form action="getcircles.php" method="post">
        <label for="radius">Choose a radius for the area and circumference of a circle</label>
        <input type="submit" value="getcircles">
    </form>
    
</body>
</html>