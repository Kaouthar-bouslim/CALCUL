<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <h2>Calulatrice </h2>
</head>
<body>
<form action="calcul.php" method="POST">

    <input type="text" name="V1" placeholder="valeur 1">
<input type="text" name="V2" placeholder="valeur 2">
<br>
<table>
<br>

<br>
<tr>
<td><input type="submit" name="op" value="+"></td>
<td><input type="submit" name="op" value="-"></td>
</tr>

<tr>
<td><input type="submit" name="op" value="*"></td>
<td><input type="submit" name="op" value="/"></td>
</tr>
</table>
<br>

       <?php 
    if (isset($_POST['op'])) {

        switch ($_POST['op']) {
            case '+':
                $total = $_POST['V1'] + $_POST['V2'];
                echo "</br>".$_POST['V1']."+".$_POST['V2']."=" .$total."";
            break;
            
            case '-':
                $total = $_POST['V1'] - $_POST['V2'];
                echo"</br>".$_POST['V1']."-".$_POST['V2']."=" .$total."";
            break;
            case '*':
                $total = $_POST['V1'] * $_POST['V2'];
                echo"</br>". $_POST['V1']."*".$_POST['V2']."=". $total."";
            break;
            
            case '/':
                $total = $_POST['V1'] / $_POST['V2'];
                echo "</br>".$_POST['V1']. "/" .$_POST['V2']."=". $total."";
            break;
        }
        
    }

    ?>
    
</body>
</html>