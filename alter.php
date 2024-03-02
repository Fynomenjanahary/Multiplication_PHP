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
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .deco{
            width: 25vw;
            height: 26vw;
            border: 2px solid rgb(27, 1, 1);
            border-radius: 5px;
            background-color: rgb(0, 0, 0);
            color: white;
            box-shadow: 7px 4px 20px 0px #000000c4;
            margin: 10vw;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            font-size: 1.4vw;
        }
        .logo{
            background-image: url('Capture\ d’écran\ du\ 2024-03-02\ 12-58-21.png');
            background-size: cover;
            background-position: center;
            width: 100px;
            height: 100px;
        }
        #bla{
            width: 60px;
            border: 1px solid black;
            height: 20px;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <?php
        $index=$_GET['change'];
        session_start();
        $_SESSION['modify'] = array($index);
        // echo "ito $index";
        echo "<div class='deco'>
        <div class='logo'></div>
        Modify<br><br><br>
        <form action='http://www.free.com/modify.php' method='post'>
            Entrer le premier nombre : <input type='number' name='a' id='bla' required><br>
            Entrer le deuxième nombre : <input type='number' name='b' id='bla' required><br>
            <input type='submit' value='Submit' style='border:3px solid rgb(31, 79, 143);background-color:rgb(31, 79, 143) ;height: 40px;color: rgb(255, 255, 255);margin: 60px 0px 20px 140px; border-radius: 3px;width: 100px;font-size: 1vw;'>
    
    
        </form>
    </div>
    
        ";

    ?>
    
</body>
</html>