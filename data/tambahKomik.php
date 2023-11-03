</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">

    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Josefin Sans', sans-serif;
        }

        body {
            background-color: rgba(65, 53, 66, 0.676);
            overflow-x: hidden;

        }

        header {
            position: fixed;
            width: 100%;
            height: 15.6vh;
            background-color: rgb(123, 102, 124);
            line-height: 30px;
            box-shadow: 5px 6px 15px rgba(0, 0, 0, 0.37);
            z-index: 1;
        }

        nav {
            display: flex;
            padding: 1.5em;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            display: flex;
            align-items: center;
            gap: 1em;
            list-style: none;
            font-size: 1.3em;
            position: relative;
            right: 2em;

        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 1.3em;
        }

        nav ul li h5 {
            text-decoration: none;
            color: rgb(255, 255, 255);
        }

        nav ul i {
            color: white;
        }


        .con {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            gap: 30px;
        }

        .con .admin {
            display: flex;
            flex-direction: column;
            background-color: rgb(44, 42, 42);
            width: 30%;
            height: 86%;
            top: 15.5%;
            position: fixed;
            right: 70%;
            align-items: center;
            gap: 1em;
            box-shadow: 5px 1px 10px rgba(0, 0, 0, 0.37);
        }

        .con .admin img {
            width: 26%;
            height: 20%;
            object-fit: cover;
            border-radius: 100%;
            margin-top: 2.5em;
        }

        .con .admin h4 {
            color: white;
        }

        .con .admin .button button {
            background-color: rgb(131, 111, 134);
            color: white;
            padding: 9px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 1s, 1s;
        }

        .con .admin .button button:hover {
            background-color: rgb(179, 152, 184);
            transform: scale(1.1);
        }

        .con .admin .button #profil {
            background-color: rgb(125, 145, 145);
        }

        .con .admin .button #profil:hover {
            background-color: rgb(164, 185, 185);
        }

        .con .admin .logout button {
            background-color: rgb(173, 97, 97);
            border: none;
            padding: 9px;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: transform 1s, 1s;
        }

        .con .admin .logout button:hover {
            background-color: rgb(209, 125, 125);
            transform: scale(1.1);
        }

        .con .tabel {
            background-color: rgb(44, 42, 42);
            width: 65%;
            position: absolute;
            z-index: 0;
            right: -0.4%;
            top: -34.5%;
            color: white;
            padding: 15px;
            margin-top: 50vh;

            box-shadow: -3px 1px 10px rgba(0, 0, 0, 0.37);
        }

        .con .tabel h1 {
            text-align: center;
            margin-top: 50px;
        }

        .con .tabel table {
            width: 80%;
            text-align: center;
            line-height: 40px;
            margin-left: 5em;
            margin-top: 2.5em;
            position: relative;
            bottom: 30px;


        }


        .con .tabel form table tr td {
            padding: 4px;
            background-color: rgb(85, 79, 87);
            border: 1px solid white;
            color: white;
        }

        .con .tabel form table tr td input {
            padding: 8px;
            border-radius: 5px;
            outline: none;
            border: none;
            background-color: rgb(200, 209, 213);
            color: black;
            width: 80%;
            font-size: 15px;
            border: 1px solid rgb(93, 101, 104);

        }

        .con .tabel form table .jeniskelamin .kelamin {
            display: flex;
            align-items: center;
            position: relative;
            left: 10%;
            gap: 50px;


        }

        .con .tabel form table .jeniskelamin .kelamin label {
            display: flex;

        }

        .tabel form table .jeniskelamin .kelamin label p {
            position: relative;
            left: 5px;
        }

        .con .tabel form table tr td .usernone {
            background-color: rgb(151, 160, 160);
        }

        .con .tabel form .sum input {
            background-color: black;
            position: relative;
            left: 76%;
            border: none;
            background-color: rgb(131, 111, 134);
            padding: 9px;
            border-radius: 5px;
            color: white;
            cursor: pointer;

        }

        .con .tabel form .sum .sum2 {
            background-color: rgb(173, 97, 97);
        }

        .con .tabel .tambahuser {
            position: relative;
            bottom: -30px;
            left: 9.5%;
            background-color: rgb(125, 145, 145);
            color: white;
            padding: 9px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .con .tabel form p {
            position: relative;
            left: 80px;
        }

        @media only screen and (max-width: 767px) {
            nav ul {
                flex-direction: column;
                margin-top: 3em;
                width: 100%;
            }

            #menu {
                display: block;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="index.html">KomickKuy</a>
            <ul id="menu-list" class="hidden">
                <li>
                    <h5>Hi Admin</h5>
                </li>
                <i class='bx bxs-user'></i>
            </ul>
        </nav>
    </header>

    <div class="con">
        <div class="admin">
            <img src="../dashboardAdmin/img/IMG-20210520-WA0013.jpg" alt="">
            <h4>latif Ardiansyah</h4>
            <h4>22.12.2599</h4>

            <div class="button">
                <a href="../dashboardAdmin/profiladmin.php"><button id="profil">lihat profil</button></a>
            </div>
            <div class="button">
                <a href="datauser.php"><button>Data User</button></a>
                <a href="datakomik.php"><button>Data Komik</button></a>
            </div>

            <a href="../dashboardAdmin/index.php" class="button" id="dash"><button>Dashboard Admin</button></a>
            <a href="dashUtama.php" class="button"><button>Dashboard Utama</button></a>
            <a href="../dashboardAdmin/logout.php" class="logout"><button>Logout</button></a>

        </div>
        <div class="tabel">

            <h1>Tambah Data Komik</h1>

            <form method="post" action="tambahKomik.php" enctype="multipart/form-data">
                <div class="sum">
                    <input type="submit" name="ubah" value="Simpan">
                    <input class="sum2" type="reset" value="Batal">
                </div>
                <table cellpadding="5" cellspacing="0">
                    <tr>
                        <td>Publish Oleh</td>
                        <td>
                            <input type="text" name="oleh">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td class="jeniskelamin">
                            <input type="text" name="gender" id="kelaminInput">

                            <div class="kelamin">
                                <label>
                                <input onclick="updateKelamin()" type="radio" name="gender" value="Pria">
                                    <p>pria</p>
                                </label>
                                <label>
                                <input onclick="updateKelamin()" type="radio" name="gender" value="Wanita">
                                    <p>wanita</p>
                                </label>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td>
                            <input type="text" name="judul">
                        </td>
                    </tr>
                    <tr>
                        <td>Chapter</td>
                        <td>
                            <input type="text" name="chapter">
                        </td>
                    </tr>
                    <tr>
                        <td>Kode User</td>
                        <td>
                            <input type="num" name="kduser">
                        </td>
                    </tr>

                    <tr>
                        <td>Genre</td>
                        <td>
                            <input type="text" name="genre" >
                        </td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>
                            <input type="text" name="type">
                        </td>
                    </tr>
                    <tr>
                        <td>Dirilis</td>
                        <td>
                            <input type="date" name="rilis" style="cursor:text;">
                        </td>
                    </tr>
                    <tr>
                        <td>File komik</td>
                        <td style="display: flex; padding:20px; gap:10px;">
                            <input style="width:40%; position:relative; left:7.5%;" type="text" name="files" disabled>
                            <input style="width: 40%; position:relative; left:10%;" type="file" name="files_upload">
                        </td>
                    </tr>

                </table>

                <p>Note: ektensi file yang diUpload harus pdf! </p><br>
                <p>kode user lihat didata user</p>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    function updateKelamin() {
        var selectedGender = document.querySelector('input[name="gender"]:checked');
        if (selectedGender) {
            document.getElementById('kelaminInput').value = selectedGender.value;
        }
    }

    updateKelamin();
</script>

</body>

</html>

<?php
include("dataBaseKomicKuy.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $oleh = $_POST['oleh'];
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $judul = $_POST['judul'];
        $chapter = $_POST['chapter'];
        $kduser = $_POST['kduser'];
        $genre = $_POST['genre'];
        $tipe = $_POST['type'];
        $rilis = $_POST['rilis'];
        $file = isset($_FILES['files_upload']['name']) ? $_FILES['files_upload']['name'] : '';


    if (empty($gender) || empty($judul) || empty($chapter) || empty($kduser) || empty($genre)|| empty($tipe)|| empty($rilis)|| empty($file)) {
        echo "<script> 
                Swal.fire({
                    title: 'Mohon Untuk Mengisi semua Field!',
                    text: 'Silahkan Periksa Kembali',
                    icon: 'warning'
                });
            </script>";
    } else {
        $query = "INSERT INTO komik (`publish_oleh`, `jenis_kelamin`, `judulkomik`, `Chapter`,`kodeuser`,`genre`,`type`,`dirilis`,`filekomik`)
                  VALUES ('$oleh','$gender','$judul','$chapter','$kduser','$genre','$tipe','$rilis','$file')";
        $hasil = mysqli_query($connect, $query);

        if ($hasil) {
            echo "<script> 
                    Swal.fire({
                        title: 'Yeah Berhasil Ditambahkan!',
                        text: 'Silahkan Cek Data Komik Anda',
                        icon: 'success',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href='tambahKomik.php'; 
                        }
                    });
                  </script>";
            exit;
        } else {
            echo "<script> 
                    Swal.fire({
                        title: 'Data User Gagal Ditambahkan',
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
