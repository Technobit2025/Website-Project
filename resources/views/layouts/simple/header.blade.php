@php
    $role = Auth::user()->role->code;
@endphp
<!-- Page Header Start-->
<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="{{ route(str_replace('_', '', $role) . '.home') }}"><img
                        class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt=""><img
                        class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                        alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
            </div>
        </div>
        <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">
                <li class="fullscreen-body"> <span><svg id="maximize-screen">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#full-screen') }}"></use>
                        </svg></span></li>

                {{-- <li class="onhover-dropdown"><svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#star') }}"></use>
                    </svg>
                    <div class="onhover-show-div bookmark-flip">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="front">
                                    <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                                    <ul class="bookmark-dropdown">
                                        <li>
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <div class="bookmark-content">
                                                        <div class="bookmark-icon"><i data-feather="file-text"></i>
                                                        </div>
                                                        <span>Forms</span>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <div class="bookmark-content">
                                                        <div class="bookmark-icon"><i data-feather="user"></i>
                                                        </div><span>Profile</span>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <div class="bookmark-content">
                                                        <div class="bookmark-icon"><i data-feather="server"></i>
                                                        </div><span>Tables</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="text-center"><a class="flip-btn f-w-700 btn btn-primary w-100"
                                                id="flip-btn" href="#!">Add Bookmark</a></li>
                                    </ul>
                                </div>
                                <div class="back">
                                    <ul>
                                        <li>
                                            <div class="bookmark-dropdown flip-back-content"><input type="text"
                                                    placeholder="Search..."></div>
                                        </li>
                                        <li><a class="f-w-700 d-block flip-back btn btn-primary w-100" id="flip-back"
                                                href="#!">Back</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> --}}
                <li>
                    <div class="mode"><svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#moon') }}"></use>
                        </svg></div>
                </li>

                {{-- <li class="onhover-dropdown">
                    <div class="notification-box"><svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#notification') }}"></use>
                        </svg><span class="badge rounded-pill badge-success">4 </span></div>
                    <div class="onhover-show-div notification-dropdown">
                        <h6 class="f-18 mb-0 dropdown-title">Notifications </h6>
                        <ul>
                            <li class="b-l-primary border-4 toast default-show-toast align-items-center text-light border-0 fade show"
                                aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                <div class="d-flex justify-content-between">
                                    <div class="toast-body">
                                        <p>Delivery processing</p>
                                    </div><button class="btn-close btn-close-white me-2 m-auto" type="button"
                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </li>
                            <li class="b-l-success border-4 toast default-show-toast align-items-center text-light border-0 fade show"
                                aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                <div class="d-flex justify-content-between">
                                    <div class="toast-body">
                                        <p>Order Complete</p>
                                    </div><button class="btn-close btn-close-white me-2 m-auto" type="button"
                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </li>
                            <li class="b-l-secondary border-4 toast default-show-toast align-items-center text-light border-0 fade show"
                                aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                <div class="d-flex justify-content-between">
                                    <div class="toast-body">
                                        <p>Tickets Generated</p>
                                    </div><button class="btn-close btn-close-white me-2 m-auto" type="button"
                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </li>
                            <li class="b-l-warning border-4 toast default-show-toast align-items-center text-light border-0 fade show"
                                aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                <div class="d-flex justify-content-between">
                                    <div class="toast-body">
                                        <p>Delivery Complete</p>
                                    </div><button class="btn-close btn-close-white me-2 m-auto" type="button"
                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li> --}}
                {{-- <li class="profile-nav onhover-dropdown pe-0 py-0">
                    <div class="d-flex profile-media"><img class="b-r-10" src="{{ Auth::user()->photo }}"
                            alt="" width="35" height="35">
                        <div class="flex-grow-1"><span>{{ Auth::user()->name }}</span>
                            <p class="mb-0">{{ Auth::user()->role->name }}<i
                                    class="middle fa-solid fa-angle-down"></i></p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li><a href="{{ route('profile.index') }}"><i
                                    data-feather="user"></i><span>Profile</span></a>
                        </li>
                        <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    data-feather="log-in"> </i><span>Log out</span></a></li>
                        <form action="{{ route('logout') }}" method="POST" class="d-none" id="logout-form">
                            @csrf
                        </form>
                    </ul>
                </li> --}}
                <li class="profile-nav nav-item p-0 m-0">
                    <a class="d-flex align-items-center gap-3 nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Auth::user()->photo }}" class="rounded" alt="" width="35"
                            height="35">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-4">
                        <li><a class="dropdown-item" href="{{ route('profile.index') }}">
                                <i data-feather="user" class="me-2"></i><span>Profile</span></a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)" onclick="logoutConfirm();">
                                <i data-feather="log-in" class="me-2"></i><span>Log out</span></a></li>
                        <form action="{{ route('logout') }}" method="POST" class="d-none" id="logout-form">
                            @csrf
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Header Ends -->
<script>
    function logoutConfirm() {
        Swal.fire({
            title: 'Apakah kamu yakin ingin keluar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: 'var(--bs-primary)',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak',
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('logout-form').submit();
            }
        });
    }
</script>