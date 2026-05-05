<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

    <div class="login-card">
        <div class="header">
            <h1>Login</h1>
            <p>Silakan masuk untuk akses Portofolio</p>
        </div>

        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo '<div class="error-msg">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']);
        }
        ?>

        <form action="../../backend/process_login.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="email@anda.com" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
            </div>

            <button type="submit">Masuk</button>
        </form>

        <div class="footer">
            Belum punya akun? <a href="index.php">Daftar di sini</a>
        </div>
    </div>

</body>
</html>
