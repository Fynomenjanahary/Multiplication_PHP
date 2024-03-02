<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 2vh;
            font-weight: 4px;
        }
        #bla{
            width: 60px;
            border: 1px solid black;

        }

    </style>
</head>
<body>
    <?php
        $index=$_GET['change'];
        session_start();
        $_SESSION['modify'] = array($index);
        // echo "ito $index";
        echo "<form  action='http://www.free.com/modify.php' method='post'>
            le premier nombre à modifier: <input type='number' name='a' id='bla' required><br>
            le deuxième nombre à modifier: <input type='number' name='b' id='bla' required><br>
            <input type='submit' value='MODIFy' style='border:3px solid red;height: 40px;margin: 20px; border-radius: 3px;width: 100px;'>
            </form>
    
        ";

    ?>
    
</body>
</html>