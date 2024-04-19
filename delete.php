<?php
// Memeriksa apakah ada data yang akan dihapus
if(isset($_GET['hapus_id'])) {
    $hapus_id = $_GET['hapus_id'];
    
    // Query untuk menghapus data dari database
    $sql_delete = "DELETE FROM akun WHERE id_akun = $hapus_id";
    
    // Jalankan query
    if ($conn->query($sql_delete) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $sql_delete . "<br>" . $conn->error;
    }
}
?>
