<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Validasi sederhana
    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        // Anda dapat mengirim email atau menyimpan data ke database di sini
        // Contoh mengirim email:
        $to = "emailanda@example.com"; // Ganti dengan email Anda
        $subject = "Pesan dari $nama";
        $body = "Nama: $nama\nEmail: $email\nPesan:\n$pesan";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Pesan berhasil dikirim. Terima kasih!";
        } else {
            echo "Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.";
        }
    } else {
        echo "Semua field wajib diisi!";
    }
} else {
    echo "Metode permintaan tidak valid.";
}
?>