<?php
  
    require_once 'config/db.php';
    if (isset($_GET['page_layout']) && ($_GET['page_layout'] != ''))
    {
        switch($_GET['page_layout']){
            case 'danhsach':
                include 'header.php';
                require_once 'danhsach.php';
                break;
            case 'them':
                include 'header.php';
                require_once 'them.php';
                break;
            case 'xoa':
                include 'header.php';
                require_once 'xoa.php';
                break;
            case 'sua':
                include 'header.php';
                require_once 'sua.php';
                break;
            default:
            include 'header.php';
                require_once 'danhsach.php';
                break;
        }
    }
    else
    {
        require_once 'login.php';
    }
?>

