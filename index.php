<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KomicKuy.io</title>
    <link rel="stylesheet" href="global.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <a style="color: white; text-decoration:none; position:relative; top:7px;" href="index.php"><h2>KomicKuy</h2></a>
        <ul id="menu-list" class="hidden">
            <li><a href="#baca">Baca sekarang</a></li>
            <li><a href="login/login.php">login</a></li>
        </ul>
        <a id="menu" href="#"><i class='bx bx-menu'></i></a>
    </nav>
    <section id="particles-js">
        <p class="p1">welcome to KomicKuy</p>
        <p>Imajinasi Tanpa Batas</p>
    </section>

    <h1 id="baca" style="color: white; text-align:center; margin-top:40px;">Daftar Komik</h1>
    <div class="card">

        <div class="konten">
            <h2>Seoul Station Druid </h2>
            <img src="img/Screenshot 2023-10-27 214645.png" alt="">
            <p> Druid of Seoul Station menceritakan seorang anak remaja SMA bernama Suho, suatu hari ketika berangkat sekolah, iya sedang berjalan dan bermain Handphone tiba tiba sirine pemerintah berbunyi dan terbukalah portal ke dimensi lain.

                Seketika itu suho terbangun di hutan belantara dan tidak mengingat apa yang terjadi sebelumnya. iya mencoba untuk mengelilingi hutan tersebut dan tidak ada satupun manusia di sana. yang ada hanya hewan buas.

                Seribu tahun lamanya Suho telah berada di planet yang dipenuhi hewan tersebut dan telah menjadi seorang Raja Hutan. Namun hatinya masih terasa kosong. Dan pada suatu hari, pintu dimensi terbuka lagi.

                Suho pun kembali ke bumi, dan anehnya di bumi hanya melewati 10 tahun saja, suho pun berusaha untuk kembali ke keluarganya, namun bumi tidak lagi seperti dulu yang di mana banyak monster berkembang dan menyerang manusia.</p>


            <?php
            include "data/dataBaseKomicKuy.php";

            $sql = "SELECT  `publish_oleh`, `jenis_kelamin`,`judulkomik`, `Chapter`,
                `genre`,`type`,`dirilis`,`filekomik` FROM komik ORDER BY publish_oleh LIMIT 1";
            $hasil = mysqli_query($connect, $sql);

            if ($data = mysqli_fetch_assoc($hasil)) {
            ?>
                <table style="width: 90%;">
                    <tr>
                        <th>Judul</th>
                        <td><?php echo $data['judulkomik']; ?></td>
                    </tr>

                    <tr>
                        <th>Publish By</th>
                        <td><?php echo $data['publish_oleh']; ?></td>
                    </tr>

                    <tr>
                        <th>Chapter</th>
                        <td><?php echo $data['Chapter']; ?></td>
                    </tr>

                    <tr>
                        <th>Genre</th>
                        <td><?php echo $data['genre']; ?></td>
                    </tr>

                    <tr>
                        <th>Type</th>
                        <td><?php echo $data['type']; ?></td>
                    </tr>

                    <tr>
                        <th>Rilis</th>
                        <td><?php echo $data['dirilis']; ?></td>
                    </tr>
                    <tr>
                        <th>Sumber</th>
                        <td>batchkun.com</td>
                    </tr>
                </table>
            <?php
            } else {
                echo "Tidak ada data.";
            }
            ?>
            <a href="login/login.php"><button>Baca Sekarang</button></a>
        </div>


        <!-- //data2 -->

        <div class="konten">
            <h2> Murim Login </h2>
            <img src="img/Screenshot 2023-10-27 214906.png" alt="">
            <p>Murim Login ini komik sangat rekomended cuy, apa lagi sifat MC yang radak konyol jadi Komedi di manhwa ini bener-bener bikin ngakak. cocok banget lah buat kamu yang lagi pengen santuy baca komik ini yang actionya manteb, komedinya lumayan dan alur ceritanya gak bosenin sama sekali.

                Ceritanya gini, 1 januari 2015, tahun baru yang biasanya di sambut dengan hangat tapi yang mereka alami sebaliknya, yang menyambut mereka adalah gerbang Portal yang terhubung dengan dunia lain. gerbang yang kemudian di kenal sebagai dungeon, mulai muncul di seluruh dunia. Monster-monster yang tidak terlihat sebelumnya, mulai mengalir dari gerbang itu.

                itu adalah petarungan antara mahluk yang di bangkitkan dengan para monster. melalui banyak kemangan dan kekalahan, mereka akhirnya bisa mengakhiri perang besar. dengan membantai raja iblis agung, ASMODEUS. hari itu adalah 1 januari 2020 dan di sebut hari kemenangan.

                Karakter Tae Kyung yang memiliki background dari keluarga bela diri terpandang dan anak ketiga yang sangat payah membuat dirinya harus mengikuti quest demi bisa logout dari game itu. sistem di dalam game tidak terlalu berbeda dengan sistem di dunia hunter sebelumnya.</p>


            <?php
            include "data/dataBaseKomicKuy.php";

            $sql = "SELECT  `publish_oleh`, `jenis_kelamin`,`judulkomik`, `Chapter`,
                `genre`,`type`,`dirilis`,`filekomik` FROM komik ORDER BY publish_oleh LIMIT 1  OFFSET 1";
            $hasil = mysqli_query($connect, $sql);

            if ($data = mysqli_fetch_assoc($hasil)) {
            ?>
                <table style="width: 90%;">
                    <tr>
                        <th>Judul</th>
                        <td><?php echo $data['judulkomik']; ?></td>
                    </tr>

                    <tr>
                        <th>Publish By</th>
                        <td><?php echo $data['publish_oleh']; ?></td>
                    </tr>

                    <tr>
                        <th>Chapter</th>
                        <td><?php echo $data['Chapter']; ?></td>
                    </tr>

                    <tr>
                        <th>Genre</th>
                        <td><?php echo $data['genre']; ?></td>
                    </tr>

                    <tr>
                        <th>Type</th>
                        <td><?php echo $data['type']; ?></td>
                    </tr>

                    <tr>
                        <th>Rilis</th>
                        <td><?php echo $data['dirilis']; ?></td>
                    </tr>
                    <tr>
                        <th>Sumber</th>
                        <td>batchkun.com</td>
                    </tr>
                </table>
            <?php
            } else {
                echo "Tidak ada data.";
            }
            ?>
            <a href="login/login.php"><button>Baca Sekarang</button></a>
        </div>

        <!-- data3 -->

        <div class="konten">
            <h2>MookHyang The Origin </h2>
            <img src="img/Screenshot 2023-10-27 215510.png" alt="">
            <p>
                Manhwa ini menceritakan tentang selama masa pergolakan di dunia murim, Nomor 2044 diculik sebagai seorang anak dan dibawa ke Fraksi Iblis untuk di latih kemampuan pembunuh bayaran. setelah menjalani semua pelatihan kerasnya dan bertahan sampai akhir, dia bisa mendapatkan gelar Mook-Hyang.

                Yang nantinya akan bertemu dengan master baru Blade of Illusions Yoo-Baek yang menjadi titik balik dalam hidupnya!. dan nantinya dia akan di pertemukan dengan banyaknya para ahli bela diri, mampukan dia bertahan dan mencapai level tertinggi ?.</p>


            <?php
            include "data/dataBaseKomicKuy.php";

            $sql = "SELECT  `publish_oleh`, `jenis_kelamin`,`judulkomik`, `Chapter`,
                `genre`,`type`,`dirilis`,`filekomik` FROM komik ORDER BY publish_oleh LIMIT 1  OFFSET 2";
            $hasil = mysqli_query($connect, $sql);

            if ($data = mysqli_fetch_assoc($hasil)) {
            ?>
                <table style="width: 95%;">
                    <tr>
                        <th>Judul</th>
                        <td><?php echo $data['judulkomik']; ?></td>
                    </tr>

                    <tr>
                        <th>Publish By</th>
                        <td><?php echo $data['publish_oleh']; ?></td>
                    </tr>

                    <tr>
                        <th>Chapter</th>
                        <td><?php echo $data['Chapter']; ?></td>
                    </tr>

                    <tr>
                        <th>Genre</th>
                        <td><?php echo $data['genre']; ?></td>
                    </tr>

                    <tr>
                        <th>Type</th>
                        <td><?php echo $data['type']; ?></td>
                    </tr>

                    <tr>
                        <th>Rilis</th>
                        <td><?php echo $data['dirilis']; ?></td>
                    </tr>
                    <tr>
                        <th>Sumber</th>
                        <td>batchkun.com</td>
                    </tr>
                </table>
            <?php
            } else {
                echo "Tidak ada data.";
            }
            ?>
            <a href="login/login.php"><button>Baca Sekarang</button></a>
        </div>
        <!-- data4 -->
        <div class="konten">
            <h2>Tensei Shitara Slime Datta Ken </h2>
            <img src="img/Screenshot 2023-10-27 220032.png" alt="">
            <p>Suatu hari ketika berjalan-jalan, dia berniat ingin menolong seseorang yang justru malah membuat nya ditikam oleh seseorang misterius hingga membuat nya mati. Satu-satu penyesalan nya yaitu dia mati tapi masih dalam keadaan bujang. wkwk ada-ada aja nih.

                Setelah membuka mata nya dia terbangun pada sebuah goa dan tersadar kalau ternyata dia masih hidup, namun bukan menjadi manusia lagi melainkan hanya sebuah slime.

                Setelah menyusuri goa tersebut, kemudian dia pun bertemu dengan seekor naga yang sudah tersegel di situ selama ratusan tahun. Lewat berbagai macam pembicaraan satoru pun melepas segel tersebut dan satoru pun di beri nama baru yakni Rimuru Tempest oleh naga itu.

                Disini lah kehidupan rimuru di dunia tersebut di mulai, dimana dia berkelana sana sini ke daerah satu dan daerah lainnya. Dan karena dia merupakan slime, jadi dia bisa melahap apapun yang di inginkan nya dan dari itu juga dia bisa merubah bentuk atau mendapat kekuatan dari apa yang di makan nya. yuk saksikan keseruan lainnya!</p>
                <?php
                include "data/dataBaseKomicKuy.php";

                $sql = "SELECT  `publish_oleh`, `jenis_kelamin`,`judulkomik`, `Chapter`,
                `genre`,`type`,`dirilis`,`filekomik` FROM komik ORDER BY publish_oleh LIMIT 1  OFFSET 3";
                $hasil = mysqli_query($connect, $sql);

                if ($data = mysqli_fetch_assoc($hasil)) {
                ?>
                    <table style="width: 90%;" >
                        <tr>
                            <th>Judul</th>
                            <td><?php echo $data['judulkomik']; ?></td>
                        </tr>

                        <tr>
                            <th>Publish By</th>
                            <td><?php echo $data['publish_oleh']; ?></td>
                        </tr>

                        <tr>
                            <th>Chapter</th>
                            <td><?php echo $data['Chapter']; ?></td>
                        </tr>

                        <tr>
                            <th>Genre</th>
                            <td><?php echo $data['genre']; ?></td>
                        </tr>

                        <tr>
                            <th>Type</th>
                            <td><?php echo $data['type']; ?></td>
                        </tr>

                        <tr>
                            <th>Rilis</th>
                            <td><?php echo $data['dirilis']; ?></td>
                        </tr>
                        <tr>
                            <th>Sumber</th>
                            <td>batchkun.com</td>
                        </tr>
                    </table>
                <?php
                } else {
                    echo "Tidak ada data.";
                }
                ?>
                <a href="login/login.php"><button>Baca Sekarang</button></a>
        </div>
    </div>

    <footer>
        <p>Created By @Latif || 2023</p>
    </footer>

    <script src="script.js"></script>
    <script src="partikel_js/particles.js"></script>
    <script src="partikel_js/app.js"></script>
</body>

</html>