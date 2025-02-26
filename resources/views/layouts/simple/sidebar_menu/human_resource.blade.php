<li class="sidebar-list">
    {{-- <i class="fa-solid fa-thumbtack"></i> --}}
    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
        </svg>
        <svg class="fill-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-user') }}"></use>
        </svg>
        <span class="">Karyawan</span>
    </a>
    <ul class="sidebar-submenu">
        <li>
            <a class="" href="{{ route('humanresource.employee.index') }}">List Karyawan</a>
        </li>
        <li>
            <a class="" href="{{ route('humanresource.employee.create') }}">Tambah Karyawan</a>
        </li>
    </ul>
</li>
