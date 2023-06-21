
<?php
// auteur: yasin coban
// opdracht: CRUD toets
// functie: algemene functies tbv hergebruik
include 'navbar.php';
 echo "<h1>Delete films</h1>";
 require_once('functions.php');
 if(isset($_POST) && isset($_POST['btn_wzg'])){

 DeleteBier($_POST);
 header('Location: crud_film.php');
 }
 if(isset($_GET['filmid']))

 {

echo "Data uit het vorige formulier:<br>";

 $filmid = $_GET['filmid'];

 $row = GetBier($filmid);

}
?>

<html>
<body>
<form method="post">
filmid:<input type="" name="filmid" value="<?php echo $row['filmid'];?>" readonly><br>
filmnaam:<input type="" name="filmnaam" value="<?php echo $row['filmnaam'];?>" readonly><br>
releasejaar: <input type="text" name="releasejaar" value="<?= $row['releasejaar']?>" readonly><br>
regisseur: <input type="text" name="regisseur" value="<?= $row['regisseur']?>" readonly><br>
landherkomst: <input type="text" name="landherkomst" value="<?= $row['landherkomst']?>" readonly><br>
duur: <input type="text" name="duur" value="<?= $row['duur']?>" readonly><br><br>
genreid: <input type="text" name="genreid" value="<?= $row['genreid']?>" readonly><br><br>



<input type="submit" name="btn_wzg" value="Delete"><br>

</form>
</body>
</html>