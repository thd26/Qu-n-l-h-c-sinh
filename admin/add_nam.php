<?php
if (!defined('TEMPLATE')) {
    die('Bạn không có quyền truy cập trang này');
}
if (isset($_POST['sbm'])) {
    $maNH = $_POST['maNH'];
    $tenNH = $_POST['tenNH'];
    $kyI = $_POST['kyI'];
    $kyII = $_POST['kyII'];

    $sql_NH = "INSERT INTO namhoc(MaNamHoc,NamHoc) VALUES ('$maNH','$tenNH')";
    $sql_HK_I = "INSERT INTO hocky(MaHocKy,TenHocKy,HeSoHK,NamHoc) VALUES ('$kyI','Học Kỳ I','1','$tenNH')";
    $sql_HK_II = "INSERT INTO hocky(MaHocKy,TenHocKy,HeSoHK,NamHoc) VALUES ('$kyII','Học Kỳ Ix  I','2','$tenNH')";

    include_once('config/connect.php');
    $query_NH = mysqli_query($conn, $sql_NH);
    $query_HK_I = mysqli_query($conn, $sql_HK_I);
    $query_HK_II = mysqli_query($conn, $sql_HK_II);

    header('location: index.php?page=assigned');
}
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li><a href="index.php?page=class">Quản lý học sinh</a></li>
            <li class="active">Thêm Học Sinh</li>
        </ol>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm Năm Học: </h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">

                        <!-- <div class="alert alert-danger">Tên lớp học đã bị trùng !</div> -->
                        <form role="form" method="post">
                        <div class="form-group">
                                <label>Mã năm Học</label>
                                <input name="maNH" required type="text" class="form-control"
                                    placeholder="Ví dụ: 1-2-3-4">
                            </div>
                            <div class="form-group">
                                <label>Tên Năm Học</label>
                                <input name="tenNH" required type="text" class="form-control"
                                    placeholder="Ví dụ: 20-21">
                            </div>
                            <div class="form-group">
                                <label>Mã Học Kỳ I</label>
                                <input name="kyI" required type="number" maxlength="6" class="form-control"
                                    placeholder="Ví dụ: 20201">
                            </div>
                            <div class="form-group">
                                <label>Mã Học Kỳ II</label>
                                <input name="kyII" required type="number" maxlength="6" class="form-control"
                                    placeholder="Ví dụ: 20102">
                            </div>
                            <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

    </div>
    <!--/.main-->