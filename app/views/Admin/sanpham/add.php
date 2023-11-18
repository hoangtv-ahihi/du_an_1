<div class="content-wrapper">
<div class="card card-primary">
  <form action="AdminController.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Thêm Sản Phẩm</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="masp">Mã Sản Phẩm</label>
                <input type="text" id="masp" name="idsp" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="tensp">Tên Sản Phẩm</label>
                <input type="text" id="tensp" name="tensp" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="anhsp">Ảnh sản phẩm</label>
                <input type="file" id="anhsp" name="img">
              </div>
              <div class="form-group">
                <label for="motasp">Mô Tả Sản Phẩm</label>
                <input type="text" id="motasp" name="mota" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="ngaynhapsp">Ngày Nhập</label>
                <input type="text" id="ngaynhapsp" name="ngaynhap" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="soluongsp">Số Lượng Sản Phẩm</label>
                <input type="text" id="soluongsp" name="soluong" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="madm">Mã danh mục</label>
                <input type="text" id="madm" name="id_dm" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="trangthai">Trạng thái</label>
                <select id="trangthai" name="trangthai" class="form-control custom-select">
                  <option disabled>Chọn 1</option>
                  <option>Còn hàng</option>
                  <option>Hết hàng</option>              
                </select>
              </div>

              <input  class="btn btn-outline-danger" type="submit" name ="themsp" value="Thêm Sản Phẩm">
            </div>
            <!-- /.card-body -->
            </form>
          </div>
          <?php
if (isset($thongbao) && $thongbao != "") {
  echo '<div class="container mt-3"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
}
?>