<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xuất số thành chữ</title>
</head>

<body>
    <?php
    $ketqua="";
    if(isset($_POST["so"])){
        if(is_numeric($_POST["so"])){
            switch ($_POST["so"]) {
        case '0':
            $ketqua="không ";
            break;
        case '1':
            $ketqua="một ";
            break;
        case '2':
            $ketqua="hai ";
            break;
        case '3':
            $ketqua="ba ";
            break;
        case '4':
            $ketqua="bốn ";
            break;
        case '5':
            $ketqua="năm ";
            break;
        case '6':
            $ketqua="sáu ";
            break;
        case '7':
            $ketqua="bảy ";
            break;
        case '8':
            $ketqua="tám ";
            break;
        case '9':
            $ketqua="chín ";
            break;
        default:
            $ketqua= "không hợp lệ";
            break;
    }
        }
    }
    
    ?>
    <form action="bai-3.php" method="POST">
        <table width="519" border="1">
            <tr>
                <td colspan="3">Đọc số</td>
            </tr>
            <tr>
                <td>Nhập số (0-9)</td>
                <td width="69" rowspan="2"><input type="submit" name="button" id="button" value="Submit" /></td>
                <td> Bằng chữ</td>
            </tr>
            <tr>
                <td width="177">
                    <p>
                        <label for="textfield"></label>
                        <input type="text" name="so" id="textfield" />
                    </p>
                </td>
                <td width="232"><label for="textfield2"></label>
                    <input type="text" name="chu" id="textfield2" value="<?php echo $ketqua; ?>" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>