<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./index.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="test">
        <?php
            
            $str = "laPLateforme";
            $str2 = "Vive";
            $str3 = "!";

            

            echo " $str2 $str $str3 ";

            $val = 6;

            echo "<p>" . $val + 4 . "</p>";

            echo "<p>Le <span class='toto'>résultat</span> est : " . $val + 4 . "</p>";

            echo $val . "4";
            echo $val . 4;

            $myBool = false;

            echo $myBool ; 
        ?>
        <p><?php echo $val + 4 ?></p>

    </div>

    <hr/> 

   <div>

        <?php

            $bool = true;
            $int = 11;
            $float = 1.2;
            $str = " laPLateforme";

            echo "
                <table class='tab'> 
                    <thead>
                        <tr>
                            <th> type </th>
                            <th> nom </th>
                            <th> valeur </th>
                        </tr>
                    </thead>  
                    
                    <tbody>
                        <tr>
                            <td>" . $int . "</td>
                            <td> " . $str . "</td>
                            <td> " . $float . "</td>
                        </tr>
                    </tbody>    
                            
                </table>
            ";

        ?>
</div>
    
</body>
</html>
        

        


   

