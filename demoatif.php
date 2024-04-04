<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
                <input type="text" name="atiflocation"><br>
                <button type="submit" name="btn">next</button>

    </form>
    <?php
    if(isset($_GET['btn'])){
        $location = $_GET['atiflocation'];
        header("demogetlocation.php");
        exit();
    }
    ?>
</body>
</html>