<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $mysql = mysqli_connect('localhost', 'root', '', 'login');

    $query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $res = mysqli_query($mysql, $query);
    $row = mysqli_fetch_array($res);
    if ($row['username'] == $username && $row['password'] == $password) {
        echo "SUCCESS! Welcome!";
        session_start();
        echo "<br><a href='login.php'>logout</a>";
    } else {
        echo "Invalid login or password or both or not I don't know. Something is wrong!";
        echo "<br><a href='login.php'>back</a>";
    }
    if (isset($_SESSION['username'])) {
        echo "<script>location.href='login.php'</script>";
    }
?>