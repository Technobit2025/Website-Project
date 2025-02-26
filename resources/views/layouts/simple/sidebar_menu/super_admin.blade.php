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
        <svg class="fill-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-reports') }}"></use>
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
