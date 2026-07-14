<?php
session_start();


if (!isset($_SESSION['authenticated'])) {
    header('Location: /');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Swift OPS-A Dashboard</title>
<style>
body{
    background:#0f172a;
    color:white;
    font-family:Arial,sans-serif;
    margin:0;
}
.card{
    max-width:700px;
    margin:100px auto;
    background:#1e293b;
    padding:40px;
    border-radius:10px;
    border:1px solid #334155;
}
.success{
    color:#22c55e;
}
button{
    padding:12px 20px;
    border:none;
    border-radius:6px;
    background:#ef4444;
    color:white;
    font-size:15px;
    font-weight:bold;
    cursor:pointer;
}
a{
    color:#60a5fa;
}
</style>
</head>
<body>


<div class="card">
    <h1>Swift OPS-A Dashboard</h1>


    <p class="success">Status: Authenticated</p>
    <p>Engine: Online</p>
    <p>Welcome to the Swift OPS-A Platform.</p>


    <p><a href="/">Return Home</a></p>


    <form action="/logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
</div>


</body>
</html>