<html>
<head>
        <title>Hello World</title>
</head>
<body>
        <h1>Look at this great webpage</h1>

        <h2>Users in the db listed below</h2>
        <?php
        $con=mysqli_connect(db,"webuser","password1","test");
        // Check connection
        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con,"SELECT * FROM users");

        while($row = mysqli_fetch_array($result)) {
          echo $row['first_name'] . " " . $row['last_name'];
          echo "<br>";
        }

        mysqli_close($con);
        ?>

        <?php
                $connection = memcache_connect('memcached');
                var_dump($connection);
        ?>
        <?php phpinfo() ?>
</body>
</html>
