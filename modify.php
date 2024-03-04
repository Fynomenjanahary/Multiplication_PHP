<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFy</title>
    <style>
        table,td,th{
            border-collapse:collapse;
            border:2px solid black;
            aling-item:center;
        }
        td,th,tr{
            padding:15px ;
        }
        a{
            text-decoration: none;              
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>Resultat</th>
            <th>Action</th>
        </tr>

        <?php
            $a = $_POST["a"];
            $b = $_POST["b"];
            session_start();

            // Accéder au tableau
            $tab = $_SESSION['var'][0];
            
            $index = $_SESSION['modify'][0];
            $tail = count($tab);

            // echo "$a et $b et $index";

            $tab[$index][0]=$a;
            $tab[$index][1]=$b;
            $tab[$index][2]=$a*$b;
            
            for($i = 0 ; $i<$tail ; $i++){
                $color = ($i%2==0) ?"#87c7f5":"#87f5c1";
                echo    "<tr style='background-color:$color'>
                            <td>".$tab[$i][0]."</td>";
                echo        "<td>".$tab[$i][1]."</td>
                            <td>".$tab[$i][2]."</td>
                            <td>
                                <a href='http://www.free.com/index.php?change=$i'>Modify</a> 
                                <a href='http://www.free.com/clear.php?clear=$i'>Delete</a>
                            </td>
                        </tr>";
            }
            $_SESSION['var'] = array($tab);

        ?>
    </table>
</body>
</html>