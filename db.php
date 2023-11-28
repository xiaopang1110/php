<!DOCTYPE html>
<html>
<head>
    <title>MySQL 连接示例</title>
</head>
<body>
    <?php
    // 数据库连接参数
    $host = '10.194.0.2:3306';
    $database = 'wordpress';
    $username = 'root';
    $password = 'mysql@ime';

    // 创建数据库连接
    $conn = mysqli_connect($host, $username, $password, $database);

     // 检查连接是否成功
    if ($conn) {
        echo "<h1>MySQL 连接成功！</h1>";
    } else {
        echo "<h1>MySQL 连接失败: " . mysqli_connect_error() . "</h1>";
    }
    ?>

    <?php
    // 关闭数据库连接
    mysqli_close($conn);
    ?>
</body>
</html>