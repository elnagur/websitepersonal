<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    // Lakukan pengolahan data, misalnya simpan ke database atau kirim email
    // Untuk sementara, kita akan menampilkan komentar yang diterima
    echo "<h3>Terima kasih, $name, atas komentar Anda!</h3>";
    echo "<p>Komentar Anda: $comment</p>";

    // Jangan lupa untuk mengamankan input untuk mencegah injeksi SQL dan XSS
}
?>