<?php
// Error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Inisialisasi variabel
$base_url = "https://example.com";
$title = "Situs Contoh";
$charset = "UTF-8";

// CSS styling
echo '<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    width: 80%;
    margin: auto;
    padding: 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

h1 {
    color: #333;
}
</style>';

// HTML output
echo '<!DOCTYPE html>';
echo '<html lang="id">';
echo '<head>';
echo '<meta charset="' . $charset . '">';
echo '<title>' . $title . '</title>';
echo '</head>';
echo '<body>';
echo '<div class="container">';
echo '<h1>Selamat Datang di ' . $title . '</h1>';
echo '<p>Ini adalah halaman contoh yang dibuat dari kode yang diperbaiki.</p>';
echo '</div>';
echo '</body>';
echo '</html>';
?>
