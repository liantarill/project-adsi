<?php
session_start();

// Jika ada permintaan tab aktif di URL, simpan dalam session
if (isset($_GET['tab'])) {
    session(['active_tab' => $_GET['tab']]);
}

// Jika session 'active_tab' tidak ada, set default ke 'done' (Selesai)
if (!session()->has('active_tab')) {
    session(['active_tab' => 'done']);
}

?>

<ul class="nav nav-tabs mb-4">
    <li class="nav-item">
        <a class="nav-link {{ session('active_tab') == 'all' ? 'active' : '' }}"
            href="{{ route('purchase.all', ['tab' => 'all']) }}">Semua</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ session('active_tab') == 'unpaid' ? 'active' : '' }}"
            href="{{ route('purchase.all', ['tab' => 'unpaid']) }}">Belum Bayar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ session('active_tab') == 'processing' ? 'active' : '' }}"
            href="{{ route('purchase.all', ['tab' => 'processing']) }}">Sedang Dikemas</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ session('active_tab') == 'shipped' ? 'active text-purple' : '' }}"
            href="{{ route('purchase.all', ['tab' => 'shipped']) }}">Dikirim</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ session('active_tab') == 'completed' ? 'active text-purple' : '' }}"
            href="{{ route('purchase.all', ['tab' => 'completed']) }}">Selesai</a>
    </li>
</ul>
