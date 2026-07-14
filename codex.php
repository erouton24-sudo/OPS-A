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
<title>Codex Library</title>


<style>


body{
    background:#0b1220;
    color:white;
    font-family:Arial,sans-serif;
    margin:0;
}


.container{
    max-width:1200px;
    margin:50px auto;
    padding:20px;
}


.panel{
    background:#1e293b;
    border-radius:12px;
    padding:30px;
}


a{
    color:#60a5fa;
}


</style>


</head>
<body>


<div class="container">


<div class="panel">


<h1>Codex Library</h1>


<p>Knowledge repository for doctrine, templates, operational procedures, and strategic frameworks.</p>


<p>Status: Active</p>


<p><a href="/dashboard.php">Return to Dashboard</a></p>


</div>


</div>


</body>
</html>