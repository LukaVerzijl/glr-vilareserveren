<?php include 'db.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
include 'db.php';
$huis = '';
$bodPrijs = 0;
$gebruiker = '';
$Achternaam = '';
$Voornaam = '';
$status = '';
if(isset($_POST['submit'])) {
    $huis = ($_POST['huis']);
    $bodPrijs = ($_POST['bodPrijs']);
    $Voornaam = ($_POST['Voornaam']);
    $Achternaam = ($_POST['Achternaam']);

    $gebruiker = ($_POST['gebruiker']);



    $query = "INSERT INTO `biedingen` (`Huis`, `BodPrijs`, `UserName`, `Voornaam`, `Achternaam`) VALUES ('" . $huis . "', '" . $bodPrijs . "', '" . $gebruiker . "','" . $Voornaam . "','" . $Achternaam . "')";
    try {
        mysqli_query($connetion, $query);
        echo "<meta http-equiv='refresh' content='0'>";

    } catch (Exception $e) {
    }
}
?>

