
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      
    </style>

</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Group13</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0" style="margin-left: 200px" action="index.php?page_layout=danhsach" method="post">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 500px;" name="searchKey">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="smSearch">Search</button>
            </form>
            <ul class="navbar-nav mr-auto" style="margin-left: 100px;">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page_layout=danhsach">Danh sách sản phẩm <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page_layout=them">Thêm sản phẩm</a>
            </li>
           
            <li class="nav-item" style="display: flex; margin-left:30px; ">
                <img src="./img/user.png" alt="" width="30" height="30px" style="postion: relative; top:30px;">
                <a class="nav-link" style="color: white;"href="index.php">Log out</a>
            </li>
           
            </ul>
          
        </div>
        </nav>
    
</body>
</html>