<li class="sidebar-list">
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
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title link-nav" href="{{ route('humanresource.employeesalary.index') }}">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-price') }}"></use>
        </svg>
        <svg class="fill-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-price') }}"></use>
        </svg>
        <span class="">Gaji Karyawan</span>
    </a>
</li>