<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apa Zodiak Kamu?</title>
    <style>
        body {
            background-color: lightblue;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0 20px;
        }
        .center img {
            margin-bottom: 10px; /* Mengurangi jarak antara gambar dan form */
        }
        form {
            text-align: center;
        }
    </style>
</head>
<body>  
    <h1><b>Apakah tanda zodiak anda? Mari ketahui</b> (你的星座是什么？让我们来看看吧)</h1>
    <div class="center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_vBWH6lnqgIVtYHx8zvI-Rh-eHLBCHnLZZQ&s" alt="img">
        <form method="get" action="outputzodiak.php">
            <p>Nama kamu: <input type="text" name="nama" required/></p>
            <p>Bulan lahir: <input type="number" name="bulan" min="1" max="12" required/></p>
            <input type="submit" name="Lihat" value="Lihat"/>
        </form>
    </div>
</body>
</html>
