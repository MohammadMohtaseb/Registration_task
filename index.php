<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #04294E;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background-color: #E2F1FF;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            height: 50vh;
            width: 50%;
        }

        h1 {
            color: #0F2B48;
            margin-top: 3rem;
            font-size: 3rem;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            gap: 6rem;
            margin-top: 6rem;
        }

        a.button {
            background-color: #494C4E;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1rem;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        a.button:hover {
            background-color: #003E7C;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome 😉</h1>
        <div class="btn-container">
            <a class="button" href="register.php">Register</a>
            <a class="button" href="login.php">Login</a>
        </div>
    </div>
</body>
</html>
