<?php
// gw abaikan ini yaa
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/dashboard-admin-style.css">
</head>

<body>
    <div class="sidebar">
        <ul class="sidebar-menu">
            <div class="sidebar-brand">Admin Panel</div>
            <li class="active"> <a href="#">Dashboard</a></li>
            <li><a href="#">Data Santri</a></li>
            <li><a href="#">Verifikasi Berkas</a></li>
            <li><a href="#">Setting</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="content-header">
            <h1>Overview Dashboard</h1>
            <div class="user-info">
                Hallo, <strong> Admin</strong>
            </div>
        </div>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <h3>Total Pendaftar</h3>
            <div class="value">124</div>
        </div>

        <div class="stat-card">
            <h3>Belum Diverifikasi</h3>
            <div class="value">42</div>
        </div>

        <div class="stat-card">
            <h3>Diterima</h3>
            <div class="value">82</div>
        </div>
    </div>
    </div>
</body>

</html>