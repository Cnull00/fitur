<?php
// add_folder.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['folder_name'])) {
        $folder_name = $_POST['folder_name'];

        if (!file_exists($folder_name)) {
            $result = mkdir($folder_name, 0777, true);

            if ($result) {
                echo "Folder berhasil ditambahkan.";
            } else {
                echo "Gagal menambahkan folder.";
            }
        } else {
            echo "Folder sudah ada.";
        }
    } else {
        echo "Nama folder harus disertakan.";
    }
}
?>
