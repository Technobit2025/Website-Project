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
            <a class="" href="{{ route('company.employee.index') }}">List Karyawan</a>
        </li>
    </ul>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-coming-soon') }}"></use>
        </svg>
        <svg class="fill-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-coming-soon') }}"></use>
        </svg>
        <span class="">Shift</span>
    </a>
    <ul class="sidebar-submenu">
        <li>
            <a class="" href="{{ route('company.shift.index') }}">List Shift</a>
        </li>
        <li>
            <a class="" href="{{ route('company.shift.create') }}">Tambah Shift</a>
        </li>
    </ul>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}"></use>
        </svg>
        <svg class="fill-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-calendar') }}"></use>
        </svg>
        <span class="">Jadwal</span>
    </a>
    <ul class="sidebar-submenu">
        <li>
            <a class="" href="{{ route('company.schedule.index') }}">List Jadwal</a>
        </li>
    </ul>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-maps') }}"></use>
        </svg>
        <svg class="fill-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-maps') }}"></use>
        </svg>
        <span class="">Tempat</span>
    </a>
    <ul class="sidebar-submenu">
        <li>
            <a class="" href="{{ route('company.place.index') }}">List Tempat</a>
        </li>
        <li>
            <a class="" href="{{ route('company.place.create') }}">Tambah Tempat</a>
        </li>
    </ul>
</li>