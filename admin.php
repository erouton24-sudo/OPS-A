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
<title>Swift OPS-A Administration</title>
<style>
body{background:#0b1220;color:white;font-family:Arial,sans-serif;margin:0;}
.container{max-width:1000px;margin:60px auto;padding:20px;}
.panel{background:#1e293b;border-radius:12px;padding:30px;border:1px solid #334155;}
.grid{display:grid;grid-template-columns:repeat(2,1fr);gap:18px;margin-top:20px;}
.card{background:#0f172a;border:1px solid #334155;border-radius:10px;padding:20px;}
.good{color:#22c55e;font-weight:bold;}
.warn{color:#facc15;font-weight:bold;}
a{color:#60a5fa;}
@media(max-width:800px){.grid{grid-template-columns:1fr;}}
</style>
</head>
<body>


<div class="container">
<div class="panel">


<h1>Administration</h1>
<p>Administrative control layer for Swift OPS-A.</p>


<div class="grid">
    <div class="card">
        <h2>Platform Status</h2>
        <p class="good">Operational</p>
    </div>


    <div class="card">
        <h2>Deployment Mode</h2>
        <p class="warn">Development</p>
    </div>


    <div class="card">
        <h2>User Management</h2>
        <p>Future user and organization controls.</p>
    </div>


    <div class="card">
        <h2>System Settings</h2>
        <p>Future configuration and platform management.</p>
    </div>
</div>


<p><a href="/dashboard.php">Return to Dashboard</a></p>


</div>
</div>


</body>
</html>