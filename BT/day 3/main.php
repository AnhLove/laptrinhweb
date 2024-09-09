<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form1</title>
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f3f3f3;
        margin: 0;
    }

    .login {
        background: #f5f5f5;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        width: 350px;
        text-align: center;
    }

    .login__header {
        background-color: lightgreen;
        padding: 20px;
    }

    .login__title {
        margin: 0;
        color: #333;
    }

    .login__group {
        margin: 20px;
    }

    .login__input {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
    }

    .login__button {
        background-color: lightgreen;
        border: none;
        padding: 10px;
        width: calc(100% - 20px);
        border-radius: 5px;
        cursor: pointer;
        color: #000;
        font-size: 16px;
    }

    .login__message--error {
        color: red;
        margin-top: 10px;
    }

    .login__message--success {
        color: green;
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <?php
    // Khai báo biến để lưu thông báo lỗi và tên người dùng
    $error = '';
    $user = '';

    // Xử lý khi form được submit
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Kiểm tra thông tin đăng nhập
        if ($username === 'admin' && $password === 'admin') {
            $user = $username;
        } else {
            $error = 'Thông tin đăng nhập không chính xác. Xin hãy kiểm tra lại.';
        }
    }
    ?>

    <!-- Form đăng nhập -->
    <form class="login" method="POST" action="">
        <div class="login__header">
            <h2 class="login__title">Sign in</h2>
        </div>
        <div class="login__group">
            <input type="text" class="login__input" name="username" placeholder="Username" required>
        </div>
        <div class="login__group">
            <input type="password" class="login__input" name="password" placeholder="Password" required>
        </div>
        <button class="login__button" type="submit">Login</button>

        <?php

    // Xử lý form đăng nhập
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Kiểm tra thông tin đăng nhập
        if ($username == "admin" && $password == "admin") {
            echo "<p class = 'success-message'>Xin chào, $username!</p>";
        } else {
            echo "<p class='error-message'>Thông tin đăng nhập không chính xác. Xin hãy kiểm tra lại!</p>";
        }
    }
    ?>


    </form>
</body>

</html>