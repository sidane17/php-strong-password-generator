<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
<link rel="stylesheet" href="style.css">
    <title>php-strong-password-generator</title>
</head>
<body class="w-100" >
    <div class="container d-flex align-items-center justify-content-center" style="height:100vh">
        <form action="creaPassword.php" methods="POST">
            <input type="number" required placeholder="Lunghezza password" name="num">
            <button type="submit">GENERA</button>
        </form>
    </div>
    
</body>
</html>