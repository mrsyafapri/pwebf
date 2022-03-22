<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins&display=swap" rel="stylesheet">
    <title>Muhammad Rizki Syafapri - Profile</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-image: url("images/bg.jpg");
            height: 500px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            position: relative;
            background-color: #96bfff;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            text-align: center;
            font-family: 'Lobster', cursive;
            font-size: 50px;
        }

        img {
            display: block;
            width: 200px;
            height: 200px;
            border-radius: 16px;
            margin: 0 auto;
        }

        figure {
            text-align: center;
            font-size: 20px;
        }

        .fullname {
            font-size: 32px;
            text-align: center;
        }

        .role {
            font-size: 24px;
            text-align: center;
        }

        .bio {
            font-size: 16px;
            text-align: center;
            padding: 8px 24px;
        }

        footer {
            text-align: center;
            background-color: greenyellow;
            color: black;
            padding: 8px;
        }
    </style>
</head>

<body id="home">
    <header>
        <h1>Welcome To My Profile Website</h1>
        <figure>
            <img src="images/profile.jpg" alt="Photo Rizki">
            <figcaption>My Photo Profile</figcaption>
        </figure>
    </header>
    <main>
        <p class="fullname">Muhammad Rizki Syafapri</p>
        <p class="role">Mahasiswa Teknik Informatika UIN Sultan Syarif Kasim Riau</p>
        <div class="bio">
            <p>
                Saya adalah seorang mahasiswa semester 4 di prodi Teknik Informatika UIN Sultan Syarif Kasim Riau angkatan 2020.
                <br>
                Saya lahir dan besar di Tembilahan, Riau. Saya lahir pada tanggal 23 April 2002. Saya memiliki hobby yaitu menonton film dan ngoding. Saya saat ini sedang belajar menjadi seorang Fullstack Developer. Saya mulai belajar pemrograman sejak kelas 12. Saya juga merupakan peserta Backend Engineering Student di
                <a href="https://www.anakbangsabisa.org/generasi-gigih/" target="_blank" rel="noopener noreferrer" style="color: white;">Generasi GIGIH 2.0</a> dari Yayasan Anak Bangsa Bisa dan GoTo Group. Saya selalu bersemangat untuk belajar hal baru khususnya teknologi.
            <p>
        </div>
    </main>
    <footer>
        <p>
            <a href="#home" style="text-decoration: none;">MRSyafapri</a> &copy; 2022 - Muhammad Rizki Syafapri
        </p>
    </footer>
</body>

</html>