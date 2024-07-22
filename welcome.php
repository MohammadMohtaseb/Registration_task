<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}
?>

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
            background-color: #E2F1FF;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            height: 50vh;
            width: 40%;
            text-align: center;
        }

        h1 {
            color: #0F2B48;
            margin-top: 4rem;
            font-size: 3rem;
        }

        button {
            background-color: #494C4E;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
            transition: background-color 0.3s ease;
            width: 25%;
            margin-top: 6rem;
        }

        button:hover {
            background-color: #003E7C;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello <?php echo htmlspecialchars($_SESSION['name']); ?>🚀</h1>
        <form action="logout.php" method="post">
            <button type="submit" name="logout">Logout</button>
        </form>
    </div>
</body>
</html>
