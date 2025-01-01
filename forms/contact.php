<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nomor WhatsApp tujuan (dengan kode negara, tanpa tanda +)
    $phone_number = "6282245208328"; // Contoh: 62 untuk Indonesia

    // Ambil data dari formulir
    $name = urlencode($_POST['name']);
    $email = urlencode($_POST['email']);
    $subject = urlencode($_POST['subject']);
    $message = urlencode($_POST['message']);

    // Format pesan untuk WhatsApp
    $whatsapp_message = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    // Buat URL WhatsApp
    $whatsapp_url = "https://api.whatsapp.com/6282245208328/send?phone=$phone_number&text=$whatsapp_message";

    // Redirect ke URL WhatsApp
    header("Location: $whatsapp_url");
    exit;
}
?>
