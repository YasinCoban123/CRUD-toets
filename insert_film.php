<?php
// auteur: yasin coban
// opdracht: CRUD toets
// functie: algemene functies tbv hergebruik
include 'navbar.php';
include'functions.php';
echo "<h1>Insert Films</h1>";

if(isset($_POST) && isset($_POST['btn_toevoegen'])){
    $filmnaam = $_POST['filmnaam'];
    $genreid = $_POST['genreid'];
    $releasejaar = $_POST['releasejaar'];
    $regisseur = $_POST['regisseur'];
    $landherkomst = $_POST['landherkomst'];
    $duur = $_POST['duur'];
    $filmid = $_POST['filmid'];

    insert_bier($filmid, $filmnaam, $releasejaar, $regisseur, $landherkomst, $duur, $genreid);
    header('Location: crud_film.php');
}
?>

<html>
<body>
<form method="post">
filmid:<input type="text" name="filmid" required><br>
filmnaam:<input type="text" name="filmnaam" required><br>
releasejaar:<input type="text" name="releasejaar" required><br>
regisseur:<input type="text" name="regisseur" required><br>
landherkomst:<input type="text" name="landherkomst" required><br>
duur:<input type="text" name="duur" required><br><br>
genreid:
<select name="genreid" required>
    <option value="">Select a number</option>
    <?php
    $start = 1;
    $end = 8;
    for ($i = $start; $i <= $end; $i++) {
        echo "<option value='$i'>$i</option>";
    }
    ?>
</select>
<br>

<input type="submit" name="btn_toevoegen" value="Voeg toe"><br>

</form>
</body>
</html>
