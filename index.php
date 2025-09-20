<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    $correctPassword = 'Tere1234.'; // Replace with your desired password

    if ($password === $correctPassword) {
        $_SESSION['authenticated'] = true;
        header('Location: dev.php');
        exit;
    } else {
        header('Location: index.php?error=1');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marvalo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="custom-bg text-dark">
        <div class="d-flex align-items-center justify-content-center min-vh-100 px-2">
            <div class="text-center">
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-2 fw-medium mt-4">Koduleht on valmimisel</p>
                <p class="mt-4 mb-5">See leht on peagi saadaval. Palun tule varsti tagasi!</p>
                <form action="index.php" method="POST" class="text-center">
                    <input type="password" name="password" placeholder="Enter password" class="form-control mb-3" required>
                    <button type="submit" class="btn btn-primary">Go to Dev Page</button>
                    <?php if (isset($_GET['error'])): ?>
                        <p class="text-danger mt-2">Incorrect password. Try again.</p>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>