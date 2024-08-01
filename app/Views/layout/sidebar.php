<?php
// MENU
$dashboard = '';
if ($title == 'Dashboard') {
    $dashboard = 'active';
}

$u_staff = '';
if ($title == 'Data Staff') {
    $u_staff = 'active';
}

$u_dosen = '';
if ($title == 'Data Dosen') {
    $u_dosen = 'active';
}

$u_mhs = '';
if ($title == 'Data Mahasiswa') {
    $u_mhs = 'active';
}

$activity = '';
if ($title == 'Activity') {
    $activity = 'active';
}

$account = '';
if ($title == 'My Account') {
    $account = 'active';
}

// DROPDOWN
$master = 'display: none';
if ($u_staff != '' || $u_dosen != '' || $u_mhs != '') {
    $master = 'display: block;';
}
?>

<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="dashboard.html">SI PALING TAP-TAP</a>
            <!-- <a href="dashboard.html">RFID - TAP</a> -->
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="dashboard.html">RFID</a>
        </div>
        <ul class="sidebar-menu">
            <li class="<?= $dashboard ?>"><a class="nav-link" href="dashboard.html"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-server"></i><span>Data Master</span></a>
                <ul class="dropdown-menu" style="<?= $master ?>">
                    <li class="<?= $u_staff ?>"><a class="nav-link" href="data-staff.html">Staff</a></li>
                    <li class="<?= $u_dosen ?>"><a class="nav-link" href="data-dosen.html">Dosen</a></li>
                    <li class="<?= $u_mhs ?>"><a class="nav-link" href="data-mahasiswa.html">Mahasiswa</a></li>
                </ul>
            </li>
            <li class="<?= $activity ?>"><a class="nav-link" href="activity.html"><i class="far fa-square"></i> <span>Activity</span></a></li>
            <li class="menu-header">Pages</li>
            <li class="<?= $account ?>"><a class="nav-link" href="account.html"><i class="fas fa-user"></i> <span>Account</span></a></li>
            <li class=""><a class="nav-link" href="logout.html"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
        </ul>
    </aside>
</div>