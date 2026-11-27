<?php

// Intentionally vulnerable Open Redirect Lab
// Khusus pengujian lokal.

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';

// Mengambil path dari request
$path = parse_url($requestUri, PHP_URL_PATH);

// Menghapus satu slash pertama
$path = substr($path, 1);

// Jika path diawali dua slash, lakukan redirect
if (str_starts_with($path, '//')) {

    $destination = 'https:' . $path;

    header('Location: ' . $destination, true, 302);
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Path Open Redirect Lab</title>
</head>
<body>
    <h1>Open Redirect Lab</h1>
    <p>Halaman utama lab berhasil dibuka.</p>
</body>
</html>