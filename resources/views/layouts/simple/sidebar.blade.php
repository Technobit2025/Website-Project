@php
    $role = Auth::user()->role->code;
@endphp
<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="#">
                <img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt=""
                    style="width: 126px; height:39px">
                <img class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}" alt=""
                    style="width: 126px; height:39px">
            </a>
            <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                </i></div>
        </div>
        <div class="logo-icon-wrapper">
            <a href="#">
                <img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""
                    style="width: 39px; height:39px">
            </a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="#"><img class="img-fluid"
                                src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    {{-- Pinned --}}
                    {{-- <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Di Pin</h6>
                        </div>
                    </li> --}}
                    {{-- Dashboard --}}
                    <li class="sidebar-list">
                        {{-- <i class="fa-solid fa-thumbtack"></i> --}}
                        <a class="sidebar-link sidebar-title link-nav"
                            href="{{ route(str_replace('_', '', $role) . '.home') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <span>Beranda </span>
                        </a>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="">Menu</h6>
                        </div>
                    </li>
                    {{-- 
                    /**
                    * Dokumentasi Penyertaan Sidebar Otomatis
                    *
                    * Bagian kode ini secara dinamis menyertakan sidebar
                    * berdasarkan peran pengguna. Sidebar dibangun menggunakan
                    * komponen Blade, yang memungkinkan pendekatan modular dan
                    * mudah dipelihara untuk merender menu navigasi.
                    *
                    * Sidebar disertakan menggunakan baris berikut:
                    * @include('layouts.simple.sidebar_menu.' . $role)
                    *
                    * 'Role' pengguna yang terautentikasi menentukan komponen
                    * sidebar mana yang dimuat. Komponen sidebar yang tersedia adalah:
                    *
                    * - layouts.simple.sidebar_menu.human_resource
                    *
                    * Pastikan membuat role dan nama sidebar yang sama (GUNAKAN PENULISAN SNAKE CASE)
                    * Pendekatan ini memastikan bahwa pengguna hanya melihat item menu
                    * yang relevan dengan izin dan peran mereka dalam aplikasi.
                    */
                    --}}
                    @include("layouts.simple.sidebar_menu.$role")

                    {{--Presensi--}}
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('presence.index') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/presence_chart.svg#setting') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/presence_chart.svg#setting') }}"></use>
                            </svg><span>Presensi </span></a>
                    </li>
                    {{-- Profile --}}
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="">Pengaturan</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('profile.index') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#setting') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#setting') }}"></use>
                            </svg><span>Profile </span></a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->
