<?php
session_start();


if (!isset($_SESSION['authenticated'])) {
    header('Location: /index.php');
    exit;
}


$healthUrl = 'http://swiftopsa.com/rgi_engine/api/index.php?route=/health';


$response = @file_get_contents($healthUrl);


$engineOk = false;
$engineName = 'Unknown';
$engineStatus = 'Offline';


if ($response !== false) {
    $data = json_decode($response, true);


    if (is_array($data) && isset($data['ok']) && $data['ok'] === true) {
        $engineOk = true;
        $engineName = $data['engine'] ?? 'Willoway RGI';
        $engineStatus = $data['status'] ?? 'online';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>System Health</title>
<style>
body{margin:0;background:#0b1220;color:white;font-family:Arial,Helvetica,sans-serif;}
.sidebar{position:fixed;left:0;top:0;width:240px;height:100vh;background:#111827;border-right:1px solid #334155;padding:22px 14px;}
.logo{font-size:28px;font-weight:bold;margin-bottom:35px;}
.menu a{display:block;color:white;text-decoration:none;padding:14px 16px;border-radius:8px;margin-bottom:10px;background:#1e293b;}
.menu a:hover{background:#2563eb;}
.main{margin-left:270px;padding:35px;}
.header,.panel{background:#1e293b;border:1px solid #334155;border-radius:12px;padding:32px;margin-bottom:24px;}
.green{color:#22c55e;font-weight:bold;}
.red{color:#f87171;font-weight:bold;}
.row{background:#0f172a;border:1px solid #334155;border-radius:8px;padding:16px;margin-bottom:12px;}
.label{color:#94a3b8;font-weight:bold;}
a{color:#60a5fa;}
</style>
</head>
<body>


<div class="sidebar">
<div class="logo">OPS-A</div>
<div class="menu">
<a href="/dashboard.php">Dashboard</a>
<a href="/governance.php">Governance</a>
<a href="/cases.php">Case Management</a>
<a href="/codex.php">Codex Library</a>
<a href="/marketplace.php">Marketplace</a>
<a href="/licensing.php">Licensing</a>
<a href="/admin.php">Administration</a>
<a href="/health.php">System Health</a>
</div>
</div>


<div class="main">


<div class="header">
<h1>System Health</h1>
<p>Live RGI engine connection and platform status check.</p>
</div>


<div class="panel">


<?php if ($engineOk): ?>
<p class="green">RGI Engine Connection Successful</p>
<?php else: ?>
<p class="red">RGI Engine Connection Failed</p>
<?php endif; ?>


<div class="row"><span class="label">Engine Name:</span> <?php echo htmlspecialchars($engineName); ?></div>
<div class="row"><span class="label">Engine Status:</span> <?php echo htmlspecialchars($engineStatus); ?></div>
<div class="row"><span class="label">Health Endpoint:</span> /rgi_engine/api/index.php?route=/health</div>
<div class="row"><span class="label">Platform:</span> Swift OPS-A</div>
<div class="row"><span class="label">Session:</span> Authenticated</div>


<p><a href="/dashboard.php">Return to Dashboard</a></p>


</div>


</div>


</body>
</html>