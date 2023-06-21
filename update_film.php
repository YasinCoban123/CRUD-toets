
<?php
// Gemaakt door yasin coban
    include 'navbar.php';
    echo "<h1>Update Films</h1>";
    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_wzg'])){
        UpdateBier($_POST);

        //header("location: update.php?$_POST[NR]");
    }

    if(isset($_GET['filmid'])){  
        echo "Data uit het vorige formulier:<br>";
        // Haal alle info van de betreffende filmid $_GET['filmid']
        $filmid = $_GET['filmid'];
        $row = GetBier($filmid);
    }
   ?>

<html>
    <body>
        <form method="post">
        <br>
        filmid:<input type="" name="filmid" value="<?php echo $row['filmid'];?>"><br>
        filmnaam:<input type="" name="filmnaam" value="<?php echo $row['filmnaam'];?>"><br> 
        releasejaar: <input type="text" name="releasejaar" value="<?= $row['releasejaar']?>"><br>
        regisseur: <input type="text" name="regisseur" value="<?= $row['regisseur']?>"><br>
        landherkomst: <input type="text" name="landherkomst" value="<?= $row['landherkomst']?>"><br>
        duur: <input type="text" name="duur" value="<?= $row['duur']?>"><br><br>
        genreid: <input type="text" name="genreid" value="<?= $row['genreid']?>"><br><br>
        <input type="submit" name="btn_wzg" value="Wijzigen" onclick="window.location.href='crud_bieren.php'"><br>
        </form>
    </body>
</html>