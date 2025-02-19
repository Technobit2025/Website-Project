@extends('layouts.simple.master')

@section('title', 'User Cards')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>User Cards</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">User Cards</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid social-user-cards">
        <div class="row">
            <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img src="{{ asset('assets/images/dashboard-5/profile.png') }}"
                                    alt="profile">
                            </div>
                            <div class="edit-icon"><svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#profile-check') }}"></use>
                                </svg></div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="{{ route('admin.user_profile') }}">Brooklyn Simmons</a></h5><span
                                class="c-o-light">@brookly.simmons</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://in.linkedin.com/" target="_blank"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                            </ul>
                            <ul class="social-follow">
                                <li>
                                    <h5 class="mb-0">1,908</h5><span class="c-o-light">Posts</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">34.0k</h5><span class="c-o-light">Followers</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">897</h5><span class="c-o-light">Following</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img class="img-fluid" src="{{ asset('assets/images/avtar/3.jpg') }}"
                                    alt="profile"></div>
                            <div class="edit-icon"><svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#profile-check') }}"></use>
                                </svg></div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="{{ route('admin.user_profile') }}">Mark Jecno</a></h5><span
                                class="c-o-light">@mark.jeco</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                            </ul>
                            <ul class="social-follow">
                                <li>
                                    <h5 class="mb-0">875</h5><span class="c-o-light">Posts</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">12.0k</h5><span class="c-o-light">Followers</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">1400</h5><span class="c-o-light">Following</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img class="img-fluid" src="{{ asset('assets/images/avtar/11.jpg') }}"
                                    alt="profile"></div>
                            <div class="edit-icon"><svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#profile-check') }}"></use>
                                </svg></div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="{{ route('admin.user_profile') }}">Dev John</a></h5><span
                                class="c-o-light">@john.dev</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                            </ul>
                            <ul class="social-follow">
                                <li>
                                    <h5 class="mb-0">1,274</h5><span class="c-o-light">Posts</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">15.0k</h5><span class="c-o-light">Followers</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">1874</h5><span class="c-o-light">Following</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img class="img-fluid"
                                    src="{{ asset('assets/images/avtar/16.jpg') }}" alt="profile"></div>
                            <div class="edit-icon"><svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#profile-check') }}"></use>
                                </svg></div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="{{ route('admin.user_profile') }}">Johan Deo</a></h5><span
                                class="c-o-light">@deo.johan</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                            </ul>
                            <ul class="social-follow">
                                <li>
                                    <h5 class="mb-0">500</h5><span class="c-o-light">Posts</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">8.0k</h5><span class="c-o-light">Followers</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">570</h5><span class="c-o-light">Following</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img class="img-fluid" src="{{ asset('assets/images/user/7.jpg') }}"
                                    alt="profile"></div>
                            <div class="edit-icon"><svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#profile-check') }}"></use>
                                </svg></div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="{{ route('admin.user_profile') }}">Douglas Reichel</a></h5><span
                                class="c-o-light">@reichel.douglas</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                            </ul>
                            <ul class="social-follow">
                                <li>
                                    <h5 class="mb-0">460</h5><span class="c-o-light">Posts</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">2k</h5><span class="c-o-light">Followers</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">350</h5><span class="c-o-light">Following</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img class="img-fluid"
                                    src="{{ asset('assets/images/avtar/4.jpg') }}" alt="profile"></div>
                            <div class="edit-icon"><svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#profile-check') }}"></use>
                                </svg></div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="{{ route('admin.user_profile') }}">Lisa lillian</a></h5><span
                                class="c-o-light">@lisa.lillian</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                            </ul>
                            <ul class="social-follow">
                                <li>
                                    <h5 class="mb-0">547</h5><span class="c-o-light">Posts</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">3.5k</h5><span class="c-o-light">Followers</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">822</h5><span class="c-o-light">Following</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img class="img-fluid" src="{{ asset('assets/images/user/1.jpg') }}"
                                    alt="profile"></div>
                            <div class="edit-icon"><svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#profile-check') }}"></use>
                                </svg></div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="{{ route('admin.user_profile') }}">Olivia rose</a></h5><span
                                class="c-o-light">@rose.olivia</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                            </ul>
                            <ul class="social-follow">
                                <li>
                                    <h5 class="mb-0">868</h5><span class="c-o-light">Posts</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">1k</h5><span class="c-o-light">Followers</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">742</h5><span class="c-o-light">Following</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img class="img-fluid" src="{{ asset('assets/images/user/2.png') }}"
                                    alt="profile"></div>
                            <div class="edit-icon"><svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#profile-check') }}"></use>
                                </svg></div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="{{ route('admin.user_profile') }}">Sarah Karen</a></h5><span
                                class="c-o-light">@karen.sarah</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://accounts.google.com/" target="_blank"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                            </ul>
                            <ul class="social-follow">
                                <li>
                                    <h5 class="mb-0">972</h5><span class="c-o-light">Posts</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">2.5k</h5><span class="c-o-light">Followers</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">864</h5><span class="c-o-light">Following</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
@endsection
