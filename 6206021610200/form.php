<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form align = center method = "get" action = "cal.php">
        <select name = "fruit">
            <option value="Select">Select Photo</option>
            <option value="Banana" >Banana</option>
            <option value="Coconut" >Coconut</option>
            <option value="Rambutan" >Rambutan</option>
        </select>
        <br><br>
        Input Width Photo : <input type="number" name = "width"><br><br>
        <input type = "radio" name = "kg" value='1'> 1 Kilogram.<br><br>
        <input type = "radio" name = "kg" value='2'> 2 Kilogram.<br><br>
        <input type = "radio" name = "kg" value='3'> 3 Kilogram.<br><br>
        
        <input type="submit" value="OK" name = "submit">
    </form>
</body>
</html>