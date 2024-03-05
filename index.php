<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h1 class="login" >Log in</h1>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button class="button" type="submit">Login</button>
             
            <a href="register_account.php" class="custom-link">sign up</a>
        </form>
    </div>
    <style>
        .custom-link {
    background-color: #99BC85;
color: #ffffff;
padding: 10px;
border: none;
border-radius: 4px;
cursor: pointer;
margin-top: 30px;
text-decoration: none;

}

.login {
    margin-left: 35px;
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #BFD8AF;
}

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
}

label {
    display: block;
    margin-bottom: 8px;
    margin-top: 10px;
    margin-left: 40px;
}

input, select {
    width: 80%;
    padding: 8px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-left: 40px;

}

.button {
    background-color: #99BC85;
    color: #ffffff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 175px;
    margin-top: 30px;
    height: 38px;
    margin-bottom: 5px;
}

button:hover {
    background-color: #45a049;
}

.tmbl {
    background-color: #4caf50;
    color: #ffffff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 220px;
    margin-top: 30px;
    text-decoration: none;
}

.login {
    margin-left: 30px;
}
     </style>
</body>
</html>