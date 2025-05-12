<ul class="nav nav-tabs mb-4">
    <li class="nav-item">
        <a class="nav-link {{ request('tab') == 'all' || !request('tab') ? 'active' : '' }}"
            href="{{ route('purchase.all', ['tab' => 'all']) }}">Semua</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request('tab') == 'unpaid' ? 'active' : '' }}"
            href="{{ route('purchase.all', ['tab' => 'unpaid']) }}">Belum Dibayar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request('tab') == 'processing' ? 'active' : '' }}"
            href="{{ route('purchase.all', ['tab' => 'processing']) }}">Sedang Dikemas</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request('tab') == 'shipped' ? 'active' : '' }}"
            href="{{ route('purchase.all', ['tab' => 'shipped']) }}">Dikirim</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request('tab') == 'completed' ? 'active' : '' }}"
            href="{{ route('purchase.all', ['tab' => 'completed']) }}">Selesai</a>
    </li>
</ul>
