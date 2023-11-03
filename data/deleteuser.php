
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hapususer</title>
    <style>
        body{
            background-color: black;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
<?php
include("dataBaseKomicKuy.php");

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $sql = "DELETE FROM user_admin WHERE username = '$username'";
    $hasil = mysqli_query($connect, $sql);


if($hasil){
            echo "<script> 
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Data user berhasil dihapus.',
                    icon: 'success',
                }).then(function() {
                    window.location.href = 'datauser.php'; 
                });
            </script>";
            exit;
        } else {
        
            echo "<script> 
                Swal.fire({
                    title: 'Gagal!',
                    text: 'Data user tidak ditemukan atau gagal dihapus.',
                    icon: 'error',
                }).then(function() {
                    window.location.href = 'datauser.php'; 
                });
            </script>";
        }
 }
?>
