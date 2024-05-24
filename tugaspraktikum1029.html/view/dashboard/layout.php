<?php $title = 'Dashboard'; ?>

<?php
ob_start();
include 'public/css/style.css';
$style = ob_get_clean();
ob_start();
include "https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css";
$link = ob_get_clean();
ob_start();
include "https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css";
$link2 = ob_get_clean();
ob_start();
include "https://cdn.tailwindcss.com";
$script = ob_get_clean();
?>

<?php
if (isset($_GET['auth'])) {
    echo "<script>alert('Silahkan login terlebih dahulu');</script>";
}
if (isset($_GET['failed'])) {
    echo "<script>alert('" . ucfirst($url) . " gagal');</script>";
}
if (isset($url)) {
    include_once $url . '.php';
}
?>

<?php include 'view/master.php'; ?>