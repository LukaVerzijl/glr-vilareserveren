<?php include 'db.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function alert_error() {
Swal.fire({
title: 'Error!',
text: 'Uw bod kon niet worden geplaatst omdat er dit bod al is geplaatst',
icon: 'error',
confirmButtonText: 'Melding sluiten'
})
}
</script>
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

        echo "<script> alert_error(); </script>";

    }
}
?>

