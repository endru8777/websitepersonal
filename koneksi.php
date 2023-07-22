<?php
$koneksi = new mysqli("localhost", "id20214811_hendra", "Endru16$", "id20214811_penggajian");
if ($koneksi->connect_error) {
        die("Koneksi Gagal:" . $Koneksi->connect_error);
}