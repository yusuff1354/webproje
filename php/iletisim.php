<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Mesajları</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #1A2B4C;
        }
        footer {
            background-color: #1E2124;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <header class="text-white text-center py-4">
        <div class="container">
            <h1 class="display-4">Gelen Mesajlar</h1>
            <p class="lead">Yusuf Sunav</p>
        </div>
    </header>

    <div class="container my-5 flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="bg-white p-4 rounded shadow-sm">
                    <h3 class="mb-4" style="color: #008080;">İletişim Formundan Gelen Bilgiler</h3>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        

                        $adSoyad = htmlspecialchars($_POST['adSoyad']);
                        $email = htmlspecialchars($_POST['email']);
                        $telefon = htmlspecialchars($_POST['telefon']);
                        
                        $cinsiyet = isset($_POST['cinsiyet']) ? htmlspecialchars($_POST['cinsiyet']) : "Belirtilmedi";
                        
                        $mesaj = htmlspecialchars($_POST['mesaj']);

                        echo "<ul class='list-group list-group-flush'>";
                        echo "<li class='list-group-item'><strong>Ad Soyad:</strong> $adSoyad</li>";
                        echo "<li class='list-group-item'><strong>E-posta:</strong> $email</li>";
                        echo "<li class='list-group-item'><strong>Telefon:</strong> $telefon</li>";
                        echo "<li class='list-group-item'><strong>Cinsiyet:</strong> $cinsiyet</li>";
                        echo "<li class='list-group-item'><strong>Mesaj:</strong> <br> $mesaj</li>";
                        echo "</ul>";
                        
                    } else {
                        echo "<div class='alert alert-warning'>Form henüz gönderilmedi veya doğrudan bu sayfaya eriştiniz.</div>";
                    }
                    ?>

                    <a href="iletisim.html" class="btn text-white mt-4 w-100" style="background-color: #008080;">Geri Dön</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-white text-center py-4 mt-auto">
        <div class="container">
            <p class="mb-0">&copy; 2026 - Web Teknolojileri</p>
        </div>
    </footer>

</body>

</html>