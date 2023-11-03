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

.con .admin .logout button:hover{
    background-color: rgb(209, 125, 125);
    transform: scale(1.1);
}

.con .tabel {
    background-color:rgb(44, 42, 42) ;
    width: 65%;
    position: absolute;
    left: 33%;
    z-index: 0;
    top: 10.5%;
    color: white;
    padding: 15px;
    height: fit-content;
}
.con .tabel h1, .datauser {
    text-align: center;
    margin-top: 50px;
}

.con .tabel table {
    width: 96%;
    text-align: center;
    line-height: 35px;
    margin-left: 1em;
    margin-top: 2.5em;
    border: 1px solid white;
    font-size: 15px;
}
.con .tabel table tr {
    background-color: rgb(120, 131, 136);
}
.con .tabel table tr td {
    padding: 10px;
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
.con .tabel table tr .button .hapus{
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
           <a href="index.php">KomickKuy</a>
            <ul id="menu-list" class="hidden">
                <li><h5>Hi Admin</h5></li>
                <i class='bx bxs-user'></i>
            </ul>
        </nav>
    </header>

    <div class="con">
        <div class="admin">
            <img src="img/IMG-20210520-WA0013.jpg" alt="">
            <h4>latif Ardiansyah</h4>
            <h4>22.12.2599</h4>

            <div class="button" >
                <a href="profiladmin.php"><button id="profil">lihat profil</button></a>
            </div>
            <div class="button" >
                <a href="../data/datauser.php"><button>Data User</button></a>
                <a href="..//data/datakomik.php"><button>Data Komik</button></a>
            </div>

            <a href="index.php" class="button" id="dash"><button>Dashboard Admin</button></a>
            <a href="../data/dashUtama.php" class="button" ><button>Dashboard Utama</button></a>
            <a href="logout.php" class="logout" ><button>Logout</button></a>

        </div>
        <div class="tabel">
            <h1>Admin Dashboard Control Panel</h1>
            <h4 class="datauser">Berikut data user yang mengupload komik</h4>
            <table id="tabeluser" width="720" border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th width="30"> No. </th>
        <th width="30"> User Name</th>
        <th width="30"> Email </th>
        <th width="30"> Password</th>
        <th width="30"> Judul Komik</th>
        <th width="30"> Chapter</th>
        <th width="30"> Genre</th>
        <th width="30"> Type</th>
        <th width="30"> Rilis</th>
      
    </tr>
    
    <?php
    include "../data/dataBaseKomicKuy.php";
    $sql = "SELECT u.`kodeuser`, u.`nama`, u.`username`, u.`email`,
                    u.`password`, k.`judulkomik`, k.`Chapter`, k.`genre`, k.`type`, k.`dirilis`
            FROM user_admin u
            INNER JOIN komik k ON u.`username` = k.`publish_oleh`
            ORDER BY u.username";

    $hasil = mysqli_query($connect, $sql);
    $no = 1;
    while ($data = mysqli_fetch_array($hasil)) {
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['judulkomik']; ?></td>
            <td><?php echo $data['Chapter']; ?></td>
            <td><?php echo $data['genre']; ?></td>
            <td><?php echo $data['type']; ?></td>
            <td><?php echo $data['dirilis']; ?></td>
          
        </tr>
    <?php
        $no++;
    }
    echo "</table>";
    ?>
        </div>
    </div>
</body>
</html>