<li class="sidebar-list">
    {{-- <i class="fa-solid fa-thumbtack"></i> --}}
    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-social') }}"></use>
        </svg>
        <span class="">Master Perusahaan</span>
    </a>
    <ul class="sidebar-submenu">
        <li>
            <a class="" href="{{ route('superadmin.company.index') }}">List Perusahaan</a>
        </li>
        <li>
            <a class="" href="{{ route('superadmin.company.create') }}">Tambah Perusahaan</a>
        </li>
    </ul>
</li>
<li class="sidebar-list">
    {{-- <i class="fa-solid fa-thumbtack"></i> --}}
    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
        </svg>
        <span class="">Karyawan</span>
    </a>
    <ul class="sidebar-submenu">
        <li>
            <a class="" href="{{ route('superadmin.employee.index') }}">List Karyawan</a>
        </li>
        <li>
            <a class="" href="{{ route('superadmin.employee.create') }}">Tambah Karyawan</a>
        </li>
    </ul>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title link-nav" href="{{ route('superadmin.employeesalary.index') }}">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-price') }}"></use>
        </svg>
        <span class="">Gaji Pokok</span>
    </a>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title link-nav" href="{{ route('superadmin.payroll.period.index') }}">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-sample-page') }}"></use>
        </svg>
        <span class="">Payroll</span>
    </a>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title link-nav" href="{{ route('superadmin.permit.index') }}">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-chat') }}"></use>
        </svg>
        <span class="">Perizinan</span>
    </a>
</li>
<li class="sidebar-main-title">
    <div>
        <h6 class="">Tools</h6>
    </div>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title link-nav" href="{{ route('superadmin.logs.index') }}">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-reports') }}"></use>
        </svg>
        <span class="">Log Viewer</span>
    </a>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title link-nav" href="{{ route('superadmin.routelist.index') }}">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-sitemap') }}"></use>
        </svg>
        <span class="">Route List</span>
    </a>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title link-nav" href="{{ route('superadmin.performance.index') }}">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-charts') }}"></use>
        </svg>
        <span class="">Performance</span>
    </a>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title link-nav" href="{{ route('superadmin.database.index') }}">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-layout') }}"></use>
        </svg>
        <span class="">Database</span>
    </a>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title link-nav" href="{{ route('superadmin.apitest.index') }}">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-learning') }}"></use>
        </svg>
        <span class="">API Test</span>
    </a>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title link-nav" href="{{ route('superadmin.folder.index') }}">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-folder') }}"></use>
        </svg>
        <span class="">Folders</span>
    </a>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title link-nav" href="{{ route('superadmin.env.index') }}">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-api') }}"></use>
        </svg>
        <span class="">App Settings</span>
    </a>
</li>