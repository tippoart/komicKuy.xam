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
        <h1>Login To KomicKuy</h1>
        <form action="login.php" method="post" class="gradient">
            <input type="text" placeholder="User Name" name="usernama">
            <input type="email" placeholder="Email" name="emailuser">
            <div class="logo">
                <input id="pass" type="password" placeholder="Password" name="pass">
                <i id="showPass" class='bx bxs-tired'></i>
                <i id="hidePass" class='bx bxs-shocked'></i>
            </div>
            <button>Go</button>
            <a href="regist.php">Belum Punya Akun?</a>
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
session_start();
include("../data/dataBaseKomicKuy.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['usernama'];
    $email = $_POST['emailuser'];
    $pass = $_POST['pass'];


    $validasiDiperlukan = empty($user) || empty($email) || empty($pass);

    if ($validasiDiperlukan) {
        echo "<script> 
            Swal.fire({
                title: 'Harap Isi Semua Field',
                text: 'Silahkan Periksa',
                icon: 'warning'
            });
        </script>";
    } else {
        $query = "SELECT `username`,`email`,`password`,`role` FROM user_admin WHERE `username`='$user' AND `email`='$email' AND `password`='$pass'";
        $hasil = mysqli_query($connect, $query);

        if (mysqli_num_rows($hasil) > 0) {
            $data = mysqli_fetch_array($hasil);
            $_SESSION['usernama'] = $data['username'];
            $_SESSION['role'] = $data['role'];

            if ($_SESSION['role'] == 1) {
                // Admin
                echo "<script> 
                    Swal.fire({
                        title: 'Yeah Berhasil Login sebagai Admin!',
                        text: 'Silahkan Masuk Ke Dashboard Admin Anda!',
                        icon: 'success',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href='../dashboardAdmin/index.php'; 
                        }
                    });
                </script>";
            } elseif ($_SESSION['role'] == 0) {
                // User
                echo "<script> 
                    Swal.fire({
                        title: 'Yeah Berhasil Login sebagai User!',
                        text: 'Silahkan Masuk Ke Dashboard User Anda!',
                        icon: 'success',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href='../data/dashutama.php';
                        }
                    });
                </script>";
            }

            exit();
        } else {
            echo "<script> 
                Swal.fire({
                    title: 'Sepertinya Password, Email, Dan User Name Anda Salah',
                    text: 'Silahkan Periksa',
                    icon: 'error'
                });
            </script>";
        }
    }
}
?>
