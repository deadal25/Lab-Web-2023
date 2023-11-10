<!DOCTYPE html>
<html>
<head>
    <title>Form Perkenalan</title>
    <style>
        body{
            background-color: #1a1c22;
            color: #f7f7f7;
            display: flex;
            justify-content: center;
        }
        .container{
            display: flex; 
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #8E8FFA;
            width: 650px;
            padding: 1.4rem;
            border-radius: 10px;
            border: 1px solid #f7f7f7;
            margin-top: 2rem;
        }

        .content {
        display: inline-block;
        width: 150px;
        margin-right: 10px;
        }
        input {
            padding: .2rem;
            margin-top: 1rem;
        }
        input:focus {
            background-color: lightblue;
            opacity: 0.9;
        }
        form {
            margin-bottom: 1.4rem;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Form Perkenalan</h1>
        <form method="post">
            <label class='content' for="nama">Nama Lengkap </label><span>:</span>
            <input type="text" name="nama" required><br>

            <label class='content' for="usia">Usia </label><span>:</span>
            <input type="number" name="usia" required><br>

            <label class='content' for="email">Email </label><span>:</span>
            <input type="email" name="email" required><br>

            <label class='content' for="tanggal_lahir">Tanggal Lahir </label><span>:</span>
            <input type="date" name="tanggal_lahir" required><br>

            <label class='content' for="jenis_kelamin">Jenis Kelamin </label><span>:</span>
            <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-Laki" required>
            <label for="laki_laki">Laki-Laki</label>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
            <label for="perempuan">Perempuan</label><br>

            <label class='content' for="bahasa">Bahasa yang dikuasai </label><span>:</span>
            <input type="checkbox" id="java" name="bahasa[]" value="Java">
            <label for="java"> Java</label>
            <input type="checkbox" id="python" name="bahasa[]" value="Python">
            <label for="python"> Python</label>
            <input type="checkbox" id="html" name="bahasa[]" value="HTML">
            <label for="html"> HTML</label>
            <input type="checkbox" id="css" name="bahasa[]" value="CSS">
            <label for="css"> CSS</label>
            <input type="checkbox" id="javascript" name="bahasa[]" value="JavaScript">
            <label for="javascript"> JavaScript</label>
            <input type="checkbox" id="php" name="bahasa[]" value="PHP">
            <label for="php"> PHP</label>
            <br>
            <input type="submit" value="Submit">
            <input type="reset" value="Clear">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Memeriksa apakah semua kolom telah diisi
                if (!empty($_POST["nama"]) && !empty($_POST["usia"]) && !empty($_POST["email"]) && !empty($_POST["tanggal_lahir"]) && isset($_POST["jenis_kelamin"])) {
                    $nama = $_POST["nama"];
                    $usia = $_POST["usia"];
                    $email = $_POST["email"];
                    $tanggal_lahir = $_POST["tanggal_lahir"];
                    $jenis_kelamin = $_POST["jenis_kelamin"];
                    $bahasa = isset($_POST["bahasa"]) ? $_POST["bahasa"] : [];

                    $tanggal_lahir = date("d F Y", strtotime($tanggal_lahir));

                    echo "Halo, nama saya $nama. Saya berusia $usia tahun, lahir pada tanggal $tanggal_lahir. Saya seorang $jenis_kelamin.<br>";
                    if (!empty($bahasa)) {
                        echo "Saya menguasai bahasa: " . implode(", ", $bahasa) . ".<br>";
                    }else {
                        echo "Saya tidak menguasai bahasa apapun" . ".<br>";
                    
                    }
                    echo "Email saya adalah $email.";
                } else {
                    echo "Silakan lengkapi semua informasi yang diperlukan.";  //tidak bergunaji ini karena pakeki diatas memrika semua kolom terisi
                }
            }
        ?>
    </div>
</body>
</html>
