<?php
include 'index.php';

if(isset($_GET['idp'])){
    $delete = mysqli_query($conn, "DELETE FROM tb_kamar WHERE id_kamar = '".$_GET['idp']."' ");
    echo '<script>window.location="data_kamar.php"</script>';
}
    
?>
 