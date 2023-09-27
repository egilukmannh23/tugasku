<?php
function cekLogin($username, $password) {
    $usernameLogin = "admin";
    $passwordLogin = "mimin";

    if ($username === $usernameLogin && $password === $passwordLogin) {
        header("Location: admin.php");
        exit;
    } else {
        echo "<script>alert('Login gagal. Username atau Password salah')</script>";
    }
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    cekLogin($username, $password);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        * {
            font-family : arial;
            font-size : 1rem;
        }

        form {
            width : 200px;
            margin : 0 auto;
            padding : 20px;
            border : 1px solid #ccc;
            background-color : #fff;
            border-radius : 20px;
            box-shadow : 0px 0px 10px rgba(0,0,0, 0.2);
        }

        h2 {
            text-align : center;
        }

        label {
            display : block;
            font-weight : bold;
            margin-bottom : 5px;
        }

        input[type = text], 
        input[type = password] {
            width: 100%;
            padding: 5px;
            margin-bottom: 1px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        button {
            width: 70%;
            align-items: center;
            padding : 10px;
            background-color : #0976db;
            color : #fff;
            border-color : #0976db;
            border-radius : 10px;
            cursor : pointer;
            margin-bottom : 10px;
            margin-left : 35px;
        }



        button:hover {
            background-color : #fff;
            color : #0976db;
            border-color : #0976db;
        }

    </style>
</head>
<body>
    <form method="post" action="tugas4.php">
    <h2>Form Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
<button type = "submit">Login</button>
<button type = "reset">Reset</button>
    </form>
</body>
</html>
