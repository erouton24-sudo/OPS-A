<?php
session_start();


if (!isset($_SESSION['authenticated'])) {
    header('Location: /');
    exit;
}


$licenseKey = 'DEMO-ENTERPRISE-2026';
$licenseStatus = 'Active';
$licenseType = 'Demo Enterprise';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Swift OPS-A Licensing</title>
<style>
body{background:#0b1220;color:white;font-family:Arial,sans-serif;margin:0;}
.container{max-width:900px;margin:60px auto;padding:20px;}
.panel{background:#1e293b;border-radius:12px;padding:30px;border:1px solid #334155;}
.row{padding:14px;border-bottom:1px solid #334155;}
.label{color:#94a3b8;}
.good{color:#22c55e;font-weight:bold;}
a{color:#60a5fa;}
</style>
</head>
<body>


<div class="container">
<div class="panel">


<h1>Licensing Center</h1>


<div class="row"><span class="label">License Key:</span> <?php echo htmlspecialchars($licenseKey); ?></div>
<div class="row"><span class="label">License Type:</span> <?php echo htmlspecialchars($licenseType); ?></div>
<div class="row"><span class="label">License Status:</span> <span class="good"><?php echo htmlspecialchars($licenseStatus); ?></span></div>
<div class="row"><span class="label">Engine Access:</span> <span class="good">Enabled</span></div>


<p><a href="/dashboard.php">Return to Dashboard</a></p>


</div>
</div>


</body>
</html>