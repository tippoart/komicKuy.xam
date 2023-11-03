<?php
session_start();
?>
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
            left: 33%;
            z-index: 0;
            top: 3%;
            color: white;
            padding: 15px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .con .tabel h2 {
            text-align: center;
            margin-top: 50px;
            position: relative;
            right: 25%;
            top: 12%;
            z-index: 2;
            background-color: rgb(125, 145, 145);
            width: 28%;
            height: fit-content;
            padding: 7px;
            border-top-right-radius: 150px;
            border-bottom-left-radius: 150px;
            rotate: -45deg;
            box-shadow: 1px 5px 10px rgba(0, 0, 0, 0.534); ;
        }

        .con .tabel .profiladmin {
           
            display: flex;
            flex-direction: column;
            justify-content: end;
            padding: 50px;
            margin-top: 30px;
            align-items: center;
            width: 50%;
            border-top-right-radius: 150px;
            border-bottom-left-radius: 150px;
            box-shadow: -4px 5px 15px rgba(76, 75, 76, 0.37);
            gap: 15px;
            position: relative;
            bottom: 6%;
            height: 50%;
        }

        .con .tabel .profiladmin img {
            object-fit: cover;
            width: 110px;
            height: 110px;
            border-radius: 50%;
            position: relative;
            top: 45%;
            right: 30%;
            z-index: 3;
            background-color: rgb(125, 145, 145);
            padding: 5px;
           
        }
        

        .con .tabel .profiladmin .info {
            background-color: rgb(125, 145, 145);
            width: 60%;
            display: flex;
            flex-direction: column;
            gap: 5px;
            padding: 20px;
           position: relative;
           top: 20px;
            border-top-left-radius: 20px;
            border-bottom-right-radius: 120px;
            
        }
        .con .tabel .profiladmin .info  input{
            background-color: #554159;
            padding: 8px;
            border-radius: 4px;
            border-radius: 5px;
            color: white;
            border: none;
            width: 50%;
        }
        .con .tabel .profiladmin .info .p1{
            position: relative;
            left: 40%;
            
        }
        

        .gradient-background {
            background: linear-gradient(300deg, #322532, #463448, #2c232d, #554159);
            background-size: 240% 240%;
            animation: gradient-animation 24s ease infinite;
        }

        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
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
            <a href="index.php">KomickKuy</a>
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
            <img src="img/IMG-20210520-WA0013.jpg" alt="">
            <h4>latif Ardiansyah</h4>
            <h4>22.12.2599</h4>

            <div class="button">
                <a href="profiladmin.php"><button id="profil">lihat profil</button></a>
            </div>
            <div class="button">
                <a href="../data/datauser.php"><button>Data User</button></a>
                <a href="..//data/datakomik.php"><button>Data Komik</button></a>
            </div>

            <a href="index.php" class="button" id="dash"><button>Dashboard Admin</button></a>
            <a href="../data/dashUtama.php" class="button"><button>Dashboard Utama</button></a>
            <a href="logout.php" class="logout"><button>Logout</button></a>

        </div>
        <div class="tabel">
            <h2>Profil Menu</h2>
            <?php
            include("../data/dataBaseKomicKuy.php");
            if (isset($_SESSION['usernama'])) {
                $logged_in_username = $_SESSION['usernama'];
                $sql = "SELECT `kodeuser`, `nama`, `username`, `email`, `password` 
                            FROM user_admin 
                            WHERE username = '$logged_in_username'";
                $hasil = mysqli_query($connect, $sql);

                if ($data = mysqli_fetch_array($hasil)) {

            ?>
                    <div class="profiladmin gradient-background">
                        <img src="img/IMG-20210520-WA0013.jpg" alt="">
                        <div class="info">
                           
                            <h3 class="p1">nama</h3><input class="p1" type="text" value="<?php echo $data['nama']; ?>" disabled>

                            <h3 class="p1" >username</h3>
                            <input class="p1" type="text" value="<?php echo $data['username']; ?>" disabled>
                            <h3>email</h3>
                            <input type="text" value="<?php echo $data['email']; ?>" disabled>
                            <h3 >password</h3>
                            <input type="text" value="<?php echo $data['password']; ?>" disabled>
                           
                        </div>
                    </div>
            <?php
                } else {
                    echo "Data pengguna tidak ditemukan.";
                }
            } else {
                echo "Session username not set.";
            }
            ?>


        </div>

</body>

</html>