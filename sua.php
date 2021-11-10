<?php
    require_once 'config/db.php';

    $id = $_GET['id'];

    $sql = 'select * from brands';
    $listBrands = executeResult($sql);

    $query = "select * from products where prd_id = $id";

    $product = executeResult($query);

    if (isset($_POST['sbm']))
    {
      $prd_name = $_POST['prd_name'];

      if ($_FILES['image']['name'] == '')
      {
        $image = $product[0]['image'];
      }
      else
      {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file( $image_tmp, "img/".$image);
      }
      
      $price = $_POST['price'];
      $quanity = $_POST['quanity'];
      $description = $_POST['description'];
      $brand_id = $_POST['brand_id'];

      $query = "update products set prd_name = '$prd_name', image = '$image', price = $price ,quanity = $quanity,description = '$description', brand_id = $brand_id where prd_id = $id";
      execute($query);
     
      header('location: index.php?page_layout=danhsach');
    }



?>

<div class="container">
    <div class="card">
        <div class="card-header">
           <h5>Sửa sản phẩm</h5>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Tên sản phẩm</label>
                  <input type="text" name="prd_name"  class="form-control" required value="<?=$product[0]['prd_name']?>">
                </div>
                <div class="form-group">
                  <label for="">Ảnh sản phẩm</label> <br>
                  <input type="file" name="image">
                </div>
                <div class="form-group">
                  <label for="">Giá</label>
                  <input type="number" name="price"  class="form-control" required value="<?=$product[0]['price']?>">
                </div>
                <div class="form-group">
                  <label for="">Số lượng sản phẩm</label>
                  <input type="number" name="quanity"  class="form-control" required value="<?=$product[0]['quanity']?>">
                </div>
                <div class="form-group">
                  <label for="">Mô tả sản phẩm</label>
                  <input type="text" name="description"  class="form-control" required value="<?=$product[0]['description']?>">
                </div>
                <div class="form-group">
                  <label for="">Danh mục</label>
                 <select name="brand_id"  class="form-control" required>
                     <?php
                     foreach ($listBrands as $LB)
                     {?>
                     <option value="<?=$LB['brand_id']?>">
                     <?=$LB['brand_name']?>
                    </option>

                    <?php }?>
                 </select>
                </div>
                <button class="btn btn-success" type='submit' name='sbm'>Cập nhật sản phẩm</button>
               <a href="index.php?page_layout=danhsach" class="btn btn-primary">Danh sách điện thoại</a>
            </form>
        </div>
      
    </div>
</div>