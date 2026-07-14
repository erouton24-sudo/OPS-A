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
<title>Case Intelligence Center</title>


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


<h1>Case Intelligence Center</h1>


<p>Manage litigation files, evidence repositories, timelines, and procedural tracking.</p>


<p>Status: Active</p>


<p><a href="/dashboard.php">Return to Dashboard</a></p>


</div>


</div>


</body>
</html>