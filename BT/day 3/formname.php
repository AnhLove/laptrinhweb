<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Đăng Ký</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Form Đăng Ký</h2>
        <?php
        // Hiển thị lỗi nếu có
        $errors = [];
        $data = ['firstname' => '', 'lastname' => '', 'email' => '', 'gender' => '', 'state' => '', 'hobbies' => []];

        // Kiểm tra nếu form được gửi
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Lấy dữ liệu từ form và kiểm tra
            $data['firstname'] = trim($_POST['firstname']);
            $data['lastname'] = trim($_POST['lastname']);
            $data['email'] = trim($_POST['email']);
            $data['gender'] = isset($_POST['gender']) ? $_POST['gender'] : '';
            $data['state'] = isset($_POST['state']) ? $_POST['state'] : '';
            $data['hobbies'] = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];

            // Kiểm tra firstname
            if (empty($data['firstname'])) {
                $errors['firstname'] = "Firstname không được để trống";
            }

            // Kiểm tra lastname
            if (empty($data['lastname'])) {
                $errors['lastname'] = "Lastname không được để trống";
            }

            // Kiểm tra email
            if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Email không hợp lệ";
            }

            // Kiểm tra giới tính
            if (empty($data['gender'])) {
                $errors['gender'] = "Giới tính không được để trống";
            }

            // Nếu không có lỗi, hiển thị thông tin thành công
            if (empty($errors)) {
                echo "<div class='alert alert-success'><strong>Đăng ký thành công!</strong></div>";
                echo "<ul class='list-group'>";
                echo "<li class='list-group-item'>Tên: {$data['firstname']}</li>";
                echo "<li class='list-group-item'>Họ: {$data['lastname']}</li>";
                echo "<li class='list-group-item'>Email: {$data['email']}</li>";
                echo "<li class='list-group-item'>Giới tính: {$data['gender']}</li>";
                echo "<li class='list-group-item'>Tiểu bang: {$data['state']}</li>";
                echo "<li class='list-group-item'>Sở thích: " . implode(", ", $data['hobbies']) . "</li>";
                echo "</ul>";
            }
        }
        ?>

        <!-- Hiển thị lỗi nếu có -->
        <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="firstname" class="form-label">Tên</label>
                <input type="text" class="form-control" id="firstname" name="firstname"
                    value="<?php echo htmlspecialchars($data['firstname']); ?>" required>
                <div class="invalid-feedback">Firstname không được để trống</div>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Họ</label>
                <input type="text" class="form-control" id="lastname" name="lastname"
                    value="<?php echo htmlspecialchars($data['lastname']); ?>" required>
                <div class="invalid-feedback">Lastname không được để trống</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="<?php echo htmlspecialchars($data['email']); ?>" required>
                <div class="invalid-feedback">Email không hợp lệ</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Giới tính</label><br>
                <input type="radio" name="gender" value="male" <?php if ($data['gender'] == 'male') echo 'checked'; ?>
                    required> Nam
                <input type="radio" name="gender" value="female"
                    <?php if ($data['gender'] == 'female') echo 'checked'; ?> required> Nữ
                <div class="invalid-feedback">Giới tính không được để trống</div>
            </div>
            <div class="mb-3">
                <label for="state" class="form-label">Tiểu bang</label>
                <select class="form-select" id="state" name="state" required>
                    <option value="">Chọn tiểu bang</option>
                    <option value="Johor" <?php if ($data['state'] == 'Johor') echo 'selected'; ?>>Johor</option>
                    <option value="Massachusetts" <?php if ($data['state'] == 'Massachusetts') echo 'selected'; ?>>
                        Massachusetts</option>
                    <option value="Washington" <?php if ($data['state'] == 'Washington') echo 'selected'; ?>>Washington
                    </option>
                </select>
                <div class="invalid-feedback">Tiểu bang không được để trống</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Sở thích</label><br>
                <input type="checkbox" name="hobbies[]" value="Badminton"
                    <?php if (in_array('Badminton', $data['hobbies'])) echo 'checked'; ?>> Cầu lông
                <input type="checkbox" name="hobbies[]" value="Football"
                    <?php if (in_array('Football', $data['hobbies'])) echo 'checked'; ?>> Bóng đá
                <input type="checkbox" name="hobbies[]" value="Bicycle"
                    <?php if (in_array('Bicycle', $data['hobbies'])) echo 'checked'; ?>> Xe đạp
            </div>
            <button type="submit" class="btn btn-primary">Lưu lại</button>
            <button type="reset" class="btn btn-secondary">Làm mới</button>
        </form>
    </div>

    <!-- Script validation Bootstrap -->
    <script>
    // Bật kiểm tra validation của Bootstrap
    (function() {
        'use strict';

        var forms = document.querySelectorAll('.needs-validation');

        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>