<?php include 'db.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function alert_succes() {
        Swal.fire({
            title: 'Succes!',
            text: 'Uw bod is geplaatst',
            icon: 'success',
            confirmButtonText: 'Melding sluiten'
        })
    }
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
$status = '';
if(isset($_POST['submit'])) {
    $huis = ($_POST['huis']);
    $bodPrijs = ($_POST['bodPrijs']);
    $gebruiker = ($_POST['gebruiker']);



    $query = "INSERT INTO `biedingen` (`Huis`, `BodPrijs`, `UserName`) VALUES ('" . $huis . "', '" . $bodPrijs . "', '" . $gebruiker . "')";
    try {
        mysqli_query($connetion, $query);
        echo "<script> alert_succes(); </script>";
    } catch (Exception $e) {
        echo "<script> alert_error(); </script>";
    }
}
?>

