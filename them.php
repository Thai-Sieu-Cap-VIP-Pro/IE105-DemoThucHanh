<?php
    require_once 'config/db.php';

    $sql = 'select * from brands';
    $listBrands = executeResult($sql);
    if (isset($_POST['sbm']))
    {
      $prd_name = $_POST['prd_name'];
  
      $image = $_FILES['image']['name'];
    
      $image_tmp = $_FILES['image']['tmp_name'];

      $price = $_POST['price'];
      $quanity = $_POST['quanity'];
      $description = $_POST['description'];
      $brand_id = $_POST['brand_id'];

      $query = "insert into products (prd_name, image,price,quanity,description,brand_id) values ('$prd_name','$image',$price,$quanity,'$description','$brand_id')";
      execute($query);
      move_uploaded_file( $image_tmp, "img/".$image);
      header('location: index.php?page_layout=danhsach');
    }



?>

<div class="container">
    <div class="card">
        <div class="card-header">
           <h5>Thêm sản phẩm</h5>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Tên sản phẩm</label>
                  <input type="text" name="prd_name"  class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="">Ảnh sản phẩm</label> <br>
                  <input type="file" name="image" required>
                </div>
                <div class="form-group">
                  <label for="">Giá</label>
                  <input type="number" name="price"  class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="">Số lượng sản phẩm</label>
                  <input type="number" name="quanity"  class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="">Mô tả sản phẩm</label>
                  <input type="text" name="description"  class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="">Danh mục</label>
                 <select name="brand_id"  class="form-control" required>
                     <?php
                     foreach ($listBrands as $LB)
                     {?>
                     <option value="<?=$LB['brand_id']?>"><?=$LB['brand_name']?></option>

                    <?php }?>
                 </select>
                </div>
                <button class="btn btn-success" type='submit' name='sbm'>Thêm sản phẩm</button>
               <a href="index.php?page_layout=danhsach" class="btn btn-primary">Danh sách điện thoại</a>
            </form>
        </div>
      
    </div>
</div>