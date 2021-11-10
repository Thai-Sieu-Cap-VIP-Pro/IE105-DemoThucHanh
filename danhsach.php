<?php
$noproduct = "";
    require_once 'config/db.php';
    if (isset($_POST['smSearch']))
    {
        $key = "";
        if (isset($_POST['searchKey']))
        {
            $key = $_POST['searchKey'];
        }
       
        $sql = "select * from products inner join brands on products.brand_id = brands.brand_id where products.prd_name like '%".$key."%'";

        $productList = executeResult($sql);
        if (!$productList)
        {
            $noproduct = "không có sản phẩm nào";
        }
    }

    else
    {
        $sql = 'select * from products inner join brands on products.brand_id = brands.brand_id';

        $productList = executeResult($sql);
    }
   
    
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h5 style="display: inline-block;">Danh sách sản phẩm</h5>
            <a href="index.php?page_layout=them" style="margin-left:1000px;"><button class="btn btn-primary">Thêm sản phẩm</button></a>
        </div>
        <div class="card-body">
            <table class="table">
              
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th style="width: 300px;">Mô tả</th>
                        <th>Danh mục</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                <p><?php echo $noproduct; ?></p>
                    <?php
                        $i =1;
                        foreach($productList as $prdList)
                        { ?>
                        <tr>
                            <td><?=$i++?></td>
                            <td><?=$prdList['prd_name']?></td>
                            <td>
                                <img src="img/<?=$prdList['image']?>" alt="" style="width: 80px;">
                            </td>
                            <td><?=number_format($prdList['price'])?></td>
                            <td><?=$prdList['quanity']?></td>
                            <td><?=$prdList['description']?></td>
                            <td><?=$prdList['brand_name']?></td>
                            <td><a  href="index.php?page_layout=sua&id=<?=$prdList['prd_id']?>" class="btn btn-primary">Sửa</a></td>
                            <td><a href="index.php?page_layout=xoa&id=<?=$prdList['prd_id']?>" class="btn btn-danger">Xóa</a></td>
                        </tr>
                        <?php } ?>
                   
                    
                </tbody>
            </table>
           
        </div>
      
    </div>
</div>

<script>
    function Del(name)
    {
        retun confirm("Bạn có muốn xóa điện thoại" + name + "ra khỏi danh sách sản phẩm không");
    }
</script>