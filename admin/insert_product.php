<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<!DOCTYPE html>

<html>

<head>

    <title> Thêm sản phẩm </title>


    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
    tinymce.init({
        selector: '#product_desc,#product_features'
    });
    </script>

</head>

<body>

    <div class="row">
        <!-- row Starts -->

        <div class="col-lg-12">
            <!-- col-lg-12 Starts -->

            <ol class="breadcrumb">
                <!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"> </i> Bảng điều khiển / Thêm sản phẩm

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- row Ends -->


    <div class="row">
        <!-- 2 row Starts -->

        <div class="col-lg-12">
            <!-- col-lg-12 Starts -->

            <div class="panel panel-default">
                <!-- panel panel-default Starts -->

                <div class="panel-heading">
                    <!-- panel-heading Starts -->

                    <h3 class="panel-title">

                        <i class="fa fa-money fa-fw"></i> Thêm sản phẩm

                    </h3>

                </div><!-- panel-heading Ends -->

                <div class="panel-body">
                    <!-- panel-body Starts -->

                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <!-- form-horizontal Starts -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Tên sản phẩm </label>

                            <div class="col-md-6">

                                <input type="text" name="product_title" class="form-control" required>

                            </div>

                        </div><!-- form-group Ends -->


                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Đường dẫn sản phẩm </label>

                            <div class="col-md-6">

                                <input type="text" name="product_url" class="form-control" required>

                                <br>

                                <p style="font-size:15px; font-weight:bold;">

                                    Ví dụ URL sản phẩm : navy-blue-t-shirt

                                </p>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Danh mục </label>

                            <div class="col-md-6">


                                <select name="cat" class="form-control">

                                    <option> Chọn danh mục </option>

                                    <?php

$get_cat = "select * from categories ";

$run_cat = mysqli_query($con,$get_cat);

while ($row_cat=mysqli_fetch_array($run_cat)) {

$cat_id = $row_cat['cat_id'];

$cat_title = $row_cat['cat_title'];

echo "<option value='$cat_id'>$cat_title</option>";

}

?>


                                </select>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Ảnh sản phẩm 1 </label>

                            <div class="col-md-6">

                                <input type="file" name="product_img1" class="form-control" required>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Ảnh sản phẩm 2 </label>

                            <div class="col-md-6">

                                <input type="file" name="product_img2" class="form-control" >

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Ảnh sản phẩm 3 </label>

                            <div class="col-md-6">

                                <input type="file" name="product_img3" class="form-control" >

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Giá sản phẩm </label>

                            <div class="col-md-6">

                                <input type="text" name="product_price" class="form-control" required>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Giá sản phẩm khuyến mãi </label>

                            <div class="col-md-6">

                                <input type="text" name="psp_price" class="form-control" >

                            </div>

                        </div><!-- form-group Ends -->

                       

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Ghi chú sản phẩm </label>

                            <div class="col-md-6">

                                <ul class="nav nav-tabs">
                                    <!-- nav nav-tabs Starts -->

                                    <li class="active">

                                        <a data-toggle="tab" href="#description"> Mô tả sản phẩm </a>

                                    </li>

                                    <li>

                                        <a data-toggle="tab" href="#features"> Đặc trưng </a>

                                    </li>

                                   

                                </ul><!-- nav nav-tabs Ends -->

                                <div class="tab-content">
                                    <!-- tab-content Starts -->

                                    <div id="description" class="tab-pane fade in active">
                                        <!-- description tab-pane fade in active Starts -->

                                        <br>

                                        <textarea name="product_desc" class="form-control" rows="15" id="product_desc">


</textarea>

                                    </div><!-- description tab-pane fade in active Ends -->


                                    <div id="features" class="tab-pane fade in">
                                        <!-- features tab-pane fade in Starts -->

                                        <br>

                                        <textarea name="product_features" class="form-control" rows="15"
                                            id="product_features">


</textarea>

                                    </div><!-- features tab-pane fade in Ends -->


                                    <div id="video" class="tab-pane fade in">
                                        <!-- video tab-pane fade in Starts -->

                                        <br>

                                        <textarea name="product_video" class="form-control" rows="15">


</textarea>

                                    </div><!-- video tab-pane fade in Ends -->


                                </div><!-- tab-content Ends -->

                            </div>

                        </div><!-- form-group Ends -->

                        
                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" name="submit" value="Thêm sản phẩm"
                                    class="btn btn-primary form-control">

                            </div>

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizontal Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->




</body>

</html>

<?php

if(isset($_POST['submit'])){

$product_title = $_POST['product_title'];
$product_cat = $_POST['product_cat'];
$cat = $_POST['cat'];
$manufacturer_id = $_POST['manufacturer'];
$product_price = $_POST['product_price'];
$product_desc = $_POST['product_desc'];
$product_keywords = $_POST['product_keywords'];

$psp_price = $_POST['psp_price'];

$product_label = $_POST['product_label'];

$product_url = $_POST['product_url'];

$product_features = $_POST['product_features'];

$product_video = $_POST['product_video'];

$status = "product";

$product_img1 = $_FILES['product_img1']['name'];
$product_img2 = $_FILES['product_img2']['name'];
$product_img3 = $_FILES['product_img3']['name'];

$temp_name1 = $_FILES['product_img1']['tmp_name'];
$temp_name2 = $_FILES['product_img2']['tmp_name'];
$temp_name3 = $_FILES['product_img3']['tmp_name'];

move_uploaded_file($temp_name1,"product_images/$product_img1");
move_uploaded_file($temp_name2,"product_images/$product_img2");
move_uploaded_file($temp_name3,"product_images/$product_img3");

$insert_product = "insert into products (p_cat_id,cat_id,manufacturer_id,date,product_title,product_url,product_img1,product_img2,product_img3,product_price,product_psp_price,product_desc,product_features,product_video,product_keywords,product_label,status) values ('$product_cat','$cat','$manufacturer_id',NOW(),'$product_title','$product_url','$product_img1','$product_img2','$product_img3','$product_price','$psp_price','$product_desc','$product_features','$product_video','$product_keywords','$product_label','$status')";

$run_product = mysqli_query($con,$insert_product);

if($run_product){

echo "<script>alert('Sản phẩm đã được thêm thành công')</script>";

echo "<script>window.open('index.php?view_products','_self')</script>";

}

}

?>

<?php } ?>