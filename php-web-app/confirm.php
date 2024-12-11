<?php
$name = $_POST['worker_name'];
$age = $_POST['worker_age'];
$section = $_POST['worker_section'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <table>
        <tr>
            <td>
                <label>名前</label>
            </td>
            <td>
                <?php echo $name; ?>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <label>年齢</label>
            </td>
            <td>
                <?php echo $age; ?>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <label>部署</label>
            </td>
            <td>
                <?php echo $section; ?>
            </td>
        </tr>
        <br>
        <tr>
            <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
            <button id="cancel-btn" onclick="history.back();">キャンセル</button>
        </tr>
     </table>

</body>
</html>