<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Đăng Ký</title>
    <div class="container mt-5">
        <form action="process.php" method="post" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="firstname" class="form-label">Tên</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
                <div class="invalid-feedback">Firstname không được để trống</div>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Họ</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
                <div class="invalid-feedback">Lastname không được để trống</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">Email không hợp lệ</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Giới tính</label><br>
                <input type="radio" name="gender" value="male" required> Nam
                <input type="radio" name="gender" value="female" required> Nữ
            </div>
            <div class="mb-3">
                <label for="state" class="form-label">Tiểu bang</label>
                <select class="form-select" id="state" name="state">
                    <option value="1">Johor</option>
                    <option value="2">Massachusetts</option>
                    <option value="3">Washington</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Sở thích</label><br>
                <input type="checkbox" name="hobbies[]" value="Badminton"> Cầu lông
                <input type="checkbox" name="hobbies[]" value="Football"> Bóng đá
                <input type="checkbox" name="hobbies[]" value="Bicycle"> Xe đạp
            </div>
            <button type="submit" class="btn btn-primary">Lưu lại</button>
            <button type="reset" class="btn btn-secondary">Làm mới</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
// Khởi tạo mảng lỗi
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

    // Nếu không có lỗi, hiển thị thông tin thành công
    if (empty($errors)) {
        echo "<h2>Đăng ký thành công!</h2>";
        echo "<p>Thông tin của bạn:</p>";
        echo "<ul>";
        echo "<li>Tên: {$data['firstname']}</li>";
        echo "<li>Họ: {$data['lastname']}</li>";
        echo "<li>Email: {$data['email']}</li>";
        echo "<li>Giới tính: {$data['gender']}</li>";
        echo "<li>Tiểu bang: {$data['state']}</li>";
        echo "<li>Sở thích: " . implode(", ", $data['hobbies']) . "</li>";
        echo "</ul>";
    }
}
?>

    <!-- Hiển thị lỗi nếu có -->
    <?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
        <p><?php echo $error; ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

</body>

</html>