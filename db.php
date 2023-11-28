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
    $conn = new mysqli($host, $username, $password, $database);

    // 检查连接是否成功
    if ($conn->connect_error) {
        echo "<h1>MySQL 连接失败: " . $conn->connect_error . "</h1>";
    } else {
        echo "<h1>MySQL 连接成功！</h1>";

        // 执行查询语句
        $query = "SELECT * FROM wp_users LIMIT 1";
        $result = $conn->query($query);

        // 检查查询结果
        if ($result) {
            // 提取查询结果中的数据
            $row = $result->fetch_assoc();

            // 在 HTML 中展示数据
            echo "<h2>查询结果：</h2>";
            echo "<p>user_nicename: " . $row['user_nicename'] . "</p>";
            echo "<p>user_login: " . $row['user_login'] . "</p>";
            // 继续根据您的表结构添加更多字段

            // 释放查询结果资源
            $result->free();
        } else {
            echo "<h2>查询失败！</h2>";
        }
    }
    ?>
    <?php
    // 关闭数据库连接
    mysqli_close($conn);
    ?>
</body>
</html>