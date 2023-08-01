<?php
// add_file.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['file_name'])) {
        $file_name = $_POST['file_name'];
        $file_content = "Ini adalah isi file baru.\n";
        $result = file_put_contents($file_name, $file_content);

        if ($result !== false) {
            echo "File berhasil ditambahkan.";
        } else {
            echo "Gagal menambahkan file.";
        }
    } else {
        echo "Nama file harus disertakan.";
    }
}
?>
