<?php

    $a = $_POST["a"];
    $b = $_POST["b"];
    
    $tab=array();
    echo    '<html>
            <head>
                <title>MULTIPLICATION</title>
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
                    </tr>';
    

    if($b<0){
        for($i = 0 ; $i>=$b ; $i++){
            $tab[fabs($i)]=array($i,$a,$a*$i);
            // echo "<tr>";
            // for($j=0 ; $j>3 ; $j++){
            //     echo "<td>".$tab[$i][$j]."</td>";
            // }
            // echo "</tr>";
        }
    }

    else{
        for($i = 0 ; $i<=$b ; $i++){
            $tab[$i]=array($i,$a,$a*$i);
            // echo "<tr>";
            // for($j=0 ; $j<3 ; $j++){
            //     echo "<td>".$tab[$i][$j]."</td>";
            // }
            // echo "</tr>";
        }
    }
    
    session_start();
    $_SESSION['var'] = array($tab);

        for($i = 0 ; $i<=$b ; $i++){
            $color = ($i%2==0) ?"#87c7f5":"#87f5c1";
            echo    "<tr style='background-color:$color'>
                        <td>".$tab[$i][0]."</td>";
            echo        "<td>".$tab[$i][1]."</td>
                        <td>".$tab[$i][2]."</td>
                        <td>
                            <a href='http://www.free.com/alter.php?change=$i'>Modify</a> 
                            <a href='http://www.free.com/clear.php?clear=$i'>Delete</a>
                        </td>
                    </tr>";
        }
    

    // for($i = 0 ; $i<abs($b) ; $i++){
    //     $color = ($i%2==0) ?"#87c7f5":"#87f5c1";
    //     echo "<tr style='background-color:$color>";
    //     for($j=0 ; $j<3 ; $j++){
    //         echo "<td>".$tab[$i][$j]."</td>";
    //     }
    //     echo "
    //         <td>
    //             <a href='http://www.free.com/modify.php'>Modify</a> 
    //             <a href='http://www.free.com/modify.php'>Delete</a>
    //         </td>
    //     </tr>
    //     ";
    // }

    echo '</table></body></html>';
?>