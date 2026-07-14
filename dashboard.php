<?php
session_start();


if (!isset($_SESSION['authenticated'])) {
    header('Location: /');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Swift OPS-A Dashboard</title>
<style>
body{
    background:#0f172a;
    color:white;
    font-family:Arial,sans-serif;
    margin:40px;
}
.card{
    background:#1e293b;
    padding:25px;
    border-radius:10px;
}
</style>
</head>
<body>


<div class="card">


<h1>Swift OPS-A Dashboard</h1>


<p>Status: Authenticated</p>


<p>Engine: Online</p>


<p>Welcome to the Swift OPS-A Platform.</p>


</div>


</body>
</html>