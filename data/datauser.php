<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard_UserData</title>
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
            height: fit-content;
            box-shadow: -3px 1px 10px rgba(0, 0, 0, 0.37);
        }


        #datauser h1 {
            text-align: center;
            margin-top: 10px;
        }
        #datauser p{
            position: relative;
            top: 40px;
            left: 55%;
        }
        #datauser #tabeluser {
            margin-top: 50px;
            width: 98%;
            text-align: center;
            margin-left: 0.5em;
            border: 1px solid white;
            line-height: 35px;
        }

        .con .tabel table tr {
            background-color: rgb(120, 131, 136);

        }

        .con .tabel table tr td {
            padding-top: 6px;
            padding-bottom: 6px;
            background-color: rgb(85, 79, 87);

        }

        .con .tabel table tr .button button {
            border: none;
            border-radius: 6px;
            padding: 8px;
            cursor: pointer;
            background-color: rgb(125, 145, 145);
            color: white;
        }

        .con .tabel table tr .button .hapus {
            background-color: rgb(173, 97, 97);
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
            <a href="../dashboardAdmin/index.html">KomickKuy</a>
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
        <div id="datauser" class="tabel">
            <h1>Data User</h1>
            <p>Note: Hati-Hati Ketika Mau Menghapus Data User!</p>
            <table id="tabeluser" width="720" border="1" cellpadding="5" cellspacing="0">
                <tr>
                    <th width="30"> No. </th>
                    <th width="30"> Kode user</th>
                    <th width="30"> Nama User </th>
                    <th width="30"> User Name</th>
                    <th width="30"> Email </th>
                    <th width="30"> Password</th>
                    <th width="30"> Action</th>
                </tr>
                <?php
                include "dataBaseKomicKuy.php";
                $sql = "SELECT `kodeuser`, `nama`, `username`, `email`,
                `password` FROM user_admin ORDER BY username";
                $hasil = mysqli_query($connect, $sql);
                $no = 1;
                while ($data = mysqli_fetch_array($hasil)) {
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['kodeuser']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['password']; ?></td>
                        <td class="button">

                            <a href="ubahdatauser.php?username=<?php echo $data['username']; ?>"><button class="ubah">Ubah</button></a>

                            <a href="deleteuser.php?username=<?php echo $data['username']; ?>">
                                <button class="hapus">Hapus</button>
                            </a>

                        </td>

                    </tr>
                <?php
                    $no++;
                }
                echo "</table>";
                ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>