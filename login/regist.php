<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login KomicKuy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="log.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body class="gradient-background" id="particles-js">
    <div  class="login" >
        <h1>Regist To KomicKuy</h1>
        <form  id="regist" action="regist.php" method="post" class="gradient">
            <input type="text" placeholder="Nama" name="nama">
            <input type="text" placeholder="User Name" name="usernama">
            <input type="text" placeholder="Email" name="emailuser">
            <div class="logo">
                <input id="pass" type="password" placeholder="Password" name="pass">
                <i id="showPass" class='bx bxs-tired'></i>
                <i id="hidePass" class='bx bxs-shocked'></i>
            </div>
            <button>Go</button>
            <a href="login.php">Sudah Punya Akun?</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="log.js"></script>
    <script src="../partikel_js/particles.js"></script>
    <script src="../partikel_js/app.js"></script>
</body>
</html>
<?php
include("../data/dataBaseKomicKuy.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $user = $_POST['usernama'];
    $email = $_POST['emailuser'];
    $pass = $_POST['pass'];

    if (empty($nama) || empty($user) || empty($email) || empty($pass)) {
        echo "<script> 
                Swal.fire({
                    title: 'Mohon Untuk Mengisi semua Field!',
                    text: 'Silahkan Periksa Kembali',
                    icon: 'warning'
                });
            </script>";
    } else {
        $query = "INSERT INTO user_admin (`nama`, `username`, `email`, `password`)
                  VALUES ('$nama','$user','$email','$pass')";
        $hasil = mysqli_query($connect, $query);

        if ($hasil) {
            echo "<script> 
                    Swal.fire({
                        title: 'Yeah Berhasil Regist!',
                        text: 'Silahkan login Kembali',
                        icon: 'success',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href='login.php'; 
                        }
                    });
                  </script>";
            exit;
        } else {
            echo "<script> 
                    Swal.fire({
                        title: 'Gagal Regist!',
                        text: 'Silahkan Periksa Kembali',
                        icon: 'error' 
                    });
                  </script>";
        }
    }
} else {
    echo "Metode request bukan POST";
}
?>
