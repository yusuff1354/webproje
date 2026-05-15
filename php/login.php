<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sonucu - Web Teknolojileri</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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
            <h1 class="display-5">Giriş Doğrulama</h1>
        </div>
    </header>

    <div class="container my-5 flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="bg-white p-5 rounded shadow-sm text-center">

                    <?php
     
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $email = trim($_POST['email']);
                        

                        $ogrencino = explode('@', $email)[0];
                        echo "<h2 class='text-success mb-4'>Giriş Başarılı!</h2>";
                        echo "<div class='alert alert-success'>Hoşgeldiniz: <strong>$ogrencino</strong></div>";
                        echo "<a href='../index.html' class='btn text-white mt-3' style='background-color: #008080;'>Siteye Giriş Yap</a>";
                    } else {
          
                        header("Location: login.html");
                        exit();
                    }
                    ?>

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