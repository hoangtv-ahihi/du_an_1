<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đơn hàng cập đơn hàng</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Cập nhật Đơn hàng</h1>

        <form action="" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="">

            <label for="address" class="mt-3">Số lượng</label>
            <input type="email" name="email" class="form-control" value="">

            <label for="password" class="mt-3">Ảnh</label>
            <input type="password" name="password" class="form-control" value="">

            <label for="address" class="mt-3">Tổng tiền</label>
            <input type="text" name="address" class="form-control" value="">

            <label for="address" class="mt-3">Trạng thái</label>
            <input type="text" name="address" class="form-control" value="">

            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
            <a href="/admin/users" class="btn btn-primary mt-3">Quay lại d/s</a>
        </form>
    </div>
</body>

</html>