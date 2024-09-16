<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Login</title>
    <style>
    .container {
        width: 20%;
        /* Cho khung chiếm toàn bộ chiều rộng */
        height: auto;
        /* Chiều cao toàn màn hình */
        background-color: #d3d3d3;
        /* Màu nền xám cho khung ngoài */
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .form-container {
        max-width: 600px;
        margin: 0 auto;
    }

    .btn-red {
        color: aliceblue;
        margin-top: 20px;
        background-color: red;
        width: 100%;
    }

    textarea {
        resize: none;
        width: 100%;
        height: 100px;
    }
    </style>
</head>

<body>
    <div class="container ">
        <?php
            $errors = [];
            $data = ['your_name' => '', 'your_email_address' => '', 'your_phone_number' => '', 'Your_web_site' => '', 'Type_your_message_here' => '' ];
        
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $data["your_name"] = trim($_POST['your_name']);
                $data["your_email_address"] = trim($_POST['your_email_address']);
                $data["your_phone_number"] = trim($_POST['your_phone_number']);
                $data["Your_web_site"] = trim($_POST['Your_web_site']);
                $data["Type_your_message_here"] = trim($_POST['Type_your_message_here']);
                //
                if(empty($data['your_name'])) {
                    $errors[] = "Ten ko dc de trong.";
                }
                if(empty($data['your_email_address'])) {
                    $errors[] = "email ko dc de trong.";
                }
                if(empty($data['your_phone_number'])) {
                    $errors[] = "phone number ko dc de trong.";
                }
                if(empty($data['Your_web_site'])) {
                    $errors[] = "web site ko dc de trong.";
                }
                //
                if(empty($errors)) {
                    echo "<div class='alert alert-success'><strong>Đăng nhập thành công!</strong></div>";
                    echo "<ul class='list-group'";
                    echo "<li class='list-group-item'>Tên: {$data['your_name']}</li>";
                    echo "<li class='list-group-item'>Email: {$data['your_email_address']}</li>";
                    echo "<li class='list-group-item'>Phone: {$data['your_phone_number']}</li>";
                    echo "<li class='list-group-item'>Website: {$data['Your_web_site']}</li>";
                    echo "</ul>";
                }

            }
        ?>

        <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>



        <form action="" method="post" class="form-container">
            <div class="content-1">
                <label for="your_name" class="form-label">Ten</label>
                <input type="text" class="form-control" id="your_name" name="your_name" placeholder="your_name">
            </div>
            <div class="content-1">
                <label for="your_email_address" class="form-label">Email</label>
                <input type="email" class="form-control" id="your_email_address" name="your_email_address"
                    placeholder="your_email_address">

            </div>
            <div class="content-1">
                <label for="your_phone_number" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="your_phone_number" name="your_phone_number"
                    placeholder="your_phone_number">

            </div>
            <div class="content-1">
                <label for="Your_web_site" class="form-label">Web</label>
                <input type="url" class="form-control" id="Your_web_site" name="Your_web_site"
                    placeholder="Your_web_site starts with http://">

            </div>
            <div class="content-1">
                <label for="Type_your_message_here" class="form-label">Loi nhan</label>
                <textarea type="text" class="form-control" id="Type_your_message_here" name="Type_your_message_here"
                    placeholder="Type_your_message_here...."></textarea>

            </div>

            <button type="submit" class="btn-red ">SUBMIT</button>

        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>