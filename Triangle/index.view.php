<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>
</head>

<body><?php require "shape_class.php" ?>
    <?php require "triangle_class.php" ?>
    <?php require "index.php" ?>
    
    <form method="POST">
        <input type="text" name="side1" placeholder="nhập cạnh 1 của tam giác">
        <input type="text" name="side2" placeholder="nhập cạnh 2 của tam giác">
        <input type="text" name="side3" placeholder="nhập cạnh 3 của tam giác">
        <input type="text" name="color" placeholder="nhập màu sắc của tam giác">
        <input type="submit" value="SUBMIT" name="submit">
    </form>
</body>

</html>