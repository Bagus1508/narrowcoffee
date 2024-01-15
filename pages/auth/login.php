<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Narrow Cafe</title>
    <link rel="stylesheet" href="src/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <section class="login">
        <div class="containerLogin">
            <div id="formLogin">
                <div>
                    <img src="src/img/logocafe.png" alt="Logo Cafe">
                </div>
                <div>
                    <div>
                        Selamat Datang
                    </div>
                    <div>
                        Silahkan Masuk
                    </div>
                </div>
                <form action="loginController.php" method="post">
                    <label for="username">Username</label><br>
                    <input type="text" id="username" name="username" placeholder="Masukan Username"><br>
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" placeholder="Masukan Password"><br>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </section>
</body>
<script src="../src/script/script.js"></script>
</html>