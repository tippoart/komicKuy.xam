<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data User</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>

</body>

</html>
<?php
include "dataBaseKomicKuy.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['ubah'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $nama = $_POST['namalengkap'];
        $email = $_POST['email'];

        $sql_before = "SELECT * FROM user_admin WHERE username = '$user'";
        $result_before = mysqli_query($connect, $sql_before);
        $data_before = mysqli_fetch_assoc($result_before);

        $adaPerubahan = (
            $data_before['password'] != $pass ||
            $data_before['nama'] != $nama ||
            $data_before['email'] != $email
        );

        if (empty($pass) || empty($nama) || empty($email)) {
            echo "<script> 
                Swal.fire({
                    title: 'Field tidak boleh kosong!',
                    text: 'Silahkan pilih data yang ingin diubah',
                    icon: 'warning',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href='datauser.php'; 
                    }
                });
            </script>";
        } else {
            $sql = "UPDATE user_admin 
                    SET `password`='$pass', `nama`='$nama', `email`='$email' 
                    WHERE `username` = '$user'";

            $hasil = mysqli_query($connect, $sql);

            if (!$hasil) {
                echo "<script> 
                    Swal.fire({
                        title: 'Upss Gagal Ubah Data User!',
                        text: 'Silahkan periksa kembali data user',
                        icon: 'error',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href='datauser.php'; 
                        }
                    });
                </script>";
            } else {
                if ($adaPerubahan) {
                    echo "<script> 
                        Swal.fire({
                            title: 'Yeah Berhasil Data User Berhasil Diubah!',
                            text: 'Silahkan periksa kembali data user',
                            icon: 'success',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href='datauser.php'; 
                            }
                        });
                    </script>";
                } else {
                    echo "<script> 
                        Swal.fire({
                            title: 'Upsss!',
                            text: 'Sepertinya tidak ada perubahan data user',
                            icon: 'warning',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href='datauser.php'; 
                            }
                        });
                    </script>";
                }
            }
        }
    } else {
        echo "<script> 
            Swal.fire({
                title: 'Oops!',
                text: 'Form tidak valid',
                icon: 'error',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href='datauser.php'; 
                }
            });
        </script>";
    }
} else {
    echo "<script> 
        Swal.fire({
            title: 'Oops!',
            text: 'Metode request tidak valid',
            icon: 'error',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href='datauser.php'; 
            }
        });
    </script>";
}
?>
