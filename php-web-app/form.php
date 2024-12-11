<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="confirm.php" method="POST">
     <table>
        <tr>
            <td>
                <label>名前</label>
            </td>
            <td>
                <input type="text" placeholder="名前" name="worker_name">
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <label>年齢</label>
            </td>
            <td>
                <input type="text" placeholder="年齢" name="worker_age">
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <label for="section">部署</label>
            </td>
            <td>
                <select name="worker_section" id="slectsection">
                    <option value="kaihatu">開発部</option>
                    <option value="jinnji">人事部</option>
                    <option value="soumu">総務部</option>
                    <option value="seizou">製造部</option>
                </select>
            </td>
        </tr>
        <br>
        <tr>
            <td colspan="2">
                <input type="submit" id="submit" value="送る">
            </td>
        </tr>
     </table>
    </form>


</body>
</html>