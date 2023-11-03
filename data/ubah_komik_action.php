<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data komik</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        body{
            background-color: black;
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
        $oleh = $_POST['oleh'];
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $judul = $_POST['judul'];
        $chapter = $_POST['chapter'];
        $genre = $_POST['genre'];
        $tipe = $_POST['type'];
        $rilis = $_POST['rilis'];
        $file = isset($_FILES['files_upload']['name']) ? $_FILES['files_upload']['name'] : '';

        $sql_before = "SELECT * FROM komik WHERE publish_oleh = '$oleh'";
        $result_before = mysqli_query($connect, $sql_before);
        $data_before = mysqli_fetch_assoc($result_before);

        $adaPerubahan = (
            $data_before['jenis_kelamin'] != $gender ||
            $data_before['judulkomik'] != $judul ||
            $data_before['Chapter'] != $chapter ||
            $data_before['genre'] != $genre ||
            $data_before['type'] != $tipe ||
            $data_before['dirilis'] != $rilis ||
            !empty($file)
        );

        if (empty($judul) || empty($chapter) || empty($genre) || empty($tipe)) {
            echo "<script> 
                Swal.fire({
                    title: 'Field tidak boleh kosong!',
                    text: 'Silahkan pilih data yang ingin diubah!',
                    icon: 'warning',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href='datakomik.php'; 
                    }
                });
             </script>";
        } else {
            $target_directory = "komikUploads/";
            $target_file = $target_directory . basename($_FILES['files_upload']['name']);
            $uploadOk = 1;
            $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            if (!empty($file)) {
                $sql = "UPDATE komik
                        SET `jenis_kelamin`='$gender', `judulkomik`='$judul', `Chapter`='$chapter', `genre`='$genre', `type`='$tipe',`dirilis`='$rilis',`filekomik`='$file'
                        WHERE `publish_oleh` = '$oleh'";
                
                $hasil = mysqli_query($connect, $sql);

                if ($hasil) {
                    if (move_uploaded_file($_FILES['files_upload']['tmp_name'], $target_file)) {
                        if ($adaPerubahan) {
                            echo "<script> 
                                Swal.fire({
                                    title: 'Yeah Berhasil, data komik berhasil diubah!',
                                    text: 'Silahkan periksa kembali data user!',
                                    icon: 'success',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href='datakomik.php'; 
                                    }
                                });
                            </script>";
                        } else {
                            echo "<script> 
                                Swal.fire({
                                    title: 'Upsss!',
                                    text: 'Sepertinya tidak ada perubahan data komik',
                                    icon: 'warning',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href='datakomik.php'; 
                                    }
                                });
                            </script>";
                        }
                    } else {
                        echo "<script> 
                            Swal.fire({
                                title: 'Upsss!',
                                text: 'Gagal mengunggah file!',
                                icon: 'warning',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href='datakomik.php'; 
                                }
                            });
                        </script>";
                    }
                } else {
                    echo "<script> 
                            Swal.fire({
                                title: 'Oops!',
                                text: 'Data gagal diubah: " . mysqli_error($connect) . "',
                                icon: 'error',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href='datakomik.php'; 
                                }
                            });
                        </script>";
                }
            } else {
                $sql = "UPDATE komik
                        SET `jenis_kelamin`='$gender', `judulkomik`='$judul', `Chapter`='$chapter', `genre`='$genre', `type`='$tipe',`dirilis`='$rilis'
                        WHERE `publish_oleh` = '$oleh'";
                
                $hasil = mysqli_query($connect, $sql);

                if ($hasil) {
                    if ($adaPerubahan) {
                        echo "<script> 
                            Swal.fire({
                                title: 'Yeah Berhasil, data komik berhasil diubah!',
                                text: 'Silahkan periksa kembali data komik!',
                                icon: 'success',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href='datakomik.php'; 
                                }
                            });
                        </script>";
                    } else {
                        echo "<script> 
                            Swal.fire({
                                title: 'Upsss!',
                                text: 'Sepertinya tidak ada perubahan data komik',
                                icon: 'warning',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href='datakomik.php'; 
                                }
                            });
                        </script>";
                    }
                } else {
                    echo "<script> 
                            Swal.fire({
                                title: 'Oops!',
                                text: 'Data gagal diubah: " . mysqli_error($connect) . "',
                                icon: 'error',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href='datakomik.php'; 
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
                    text: 'ukuran tidak valid, ukuran file yang upload melebihi maksimum',
                    icon: 'warning',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href='datakomik.php'; 
                    }
                });
            </script>";
    }
} else {
    echo "";
}
?>
