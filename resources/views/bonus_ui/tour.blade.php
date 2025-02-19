@extends('layouts.simple.master')

@section('title', 'Tour')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/tour.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Tour</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Tour</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="user-profile">
            <div class="row"><!-- user profile first-style start-->
                <div class="col-sm-12">
                    <div class="card hovercard text-center common-user-image">
                        <div class="cardheader">
                            <div class="user-image">
                                <div class="avatar">
                                    <div class="common-align">
                                        <div><img id="output" src="{{ asset('assets/images/dashboard-11/user/12.jpg') }}"
                                                alt="user" data-intro="This is cuba profile image"><input type="file"
                                                accept="image/*" onchange="loadFile(event)"
                                                data-intro="Change cuba profile image here">
                                            <div class="icon-wrapper" id="cancelButton"><i
                                                    class="icofont icofont-error"></i></div>
                                            <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
                                        </div>
                                        <div class="user-designation"><a target="_blank" href="">William C.
                                                Jennings</a>
                                            <div class="desc">Designer</div>
                                        </div>
                                    </div>
                                    <div class="follow">
                                        <div>
                                            <div class="follow-num counter" data-target="258690">0</div>
                                            <span>Follower</span>
                                        </div>
                                        <div>
                                            <div class="follow-num counter" data-target="659887">0</div>
                                            <span>Following</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- user profile first-style end-->
                <div class="col-12">
                    <div class="card user-bio">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="ttl-info text-start" data-intro="This is your profile bio">
                                        <h6> <i class="fa-solid fa-user-tie pe-2"></i> Bio</h6><span class="mb-sm-3">Over
                                            five years of experience creating visually
                                            attractive and user-friendly websites has given me a passion for
                                            creating unique and creative websites. skilled in fusing
                                            cutting-edge online technologies with beautiful design concepts
                                            to create amazing user experiences. robust history in front-end
                                            development, UI/UX, and graphic design. highly skilled at
                                            solving problems, has a keen eye for detail, and can collaborate
                                            with others in a hectic setting.</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="ttl-info text-start">
                                        <h6><i class="fa-solid fa-envelope pe-2"></i> Email</h6>
                                        <span>william@jourrapide.com</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="ttl-info text-start">
                                        <h6><i class="fa-solid fa-calendar-days pe-2"></i>Birthday Date</h6>
                                        <span>02 January 2000</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="ttl-info text-start">
                                        <h6><i class="fa-solid fa-phone pe-2"></i>Contact Us</h6><span>India
                                            +91 123-456-7890</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="ttl-info text-start pb-0">
                                        <h6><i class="fa-solid fa-location-arrow pe-2"></i>Location</h6>
                                        <span>B69 Libby Street Beverly Hills</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="common-flex justify-content-center">
                                        <div class="social-media" data-intro="This is your social details">
                                            <ul class="list-inline">
                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Facebook"><a
                                                        href="https://www.facebook.com/" target="_blank"><i
                                                            class="fa-brands fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Google+"><a
                                                        href="https://accounts.google.com/" target="_blank"><i
                                                            class="fa-brands fa-google-plus-g"></i></a></li>
                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="X (Twitter)"><a
                                                        href="https://twitter.com/" target="_blank"><i
                                                            class="fa-brands fa-x-twitter"></i></a></li>
                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Instagram"><a
                                                        href="https://www.instagram.com/" target="_blank"><i
                                                            class="fa-brands fa-instagram"></i></a></li>
                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="RSS"><a
                                                        href="https://rss.app/" target="_blank"><i
                                                            class="fa-solid fa-share-nodes"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- user profile second-style start-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row g-2">
                                <div class="col-sm-8">
                                    <div class="d-flex"><img class="img-thumbnail rounded-circle me-3"
                                            src="{{ asset('assets/images/user/7.jpg') }}" alt="Generic placeholder image">
                                        <div class="flex-grow-1 align-self-center">
                                            <h6 class="mt-0 user-name">William C. Jennings</h6>
                                            <div class="tour-wrapper"><span>25 Jan</span><i
                                                    class="tour-dot fa fa-circle"></i><span class="txt-danger">1 min
                                                    read</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center mt-0 text-end">
                                    <div class="social-media social-tour">
                                        <ul class="list-inline">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Facebook"><a href="https://www.facebook.com/"
                                                    target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Google+"><a href="https://accounts.google.com/"
                                                    target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="X (Twitter)"><a href="https://twitter.com/"
                                                    target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Instagram"><a href="https://www.instagram.com/"
                                                    target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="RSS"><a href="https://rss.app/" target="_blank"><i
                                                        class="fa-solid fa-share-nodes"></i></a></li>
                                        </ul>
                                        <div class="float-sm-end"><small>10 Hours ago</small></div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p class="block-ellipsis">A person who interacts with a given system, platform,
                                or gadget in order to carry out a particular activity or obtain specific
                                data is referred to as a user. A user is someone who interacts with
                                software, websites, or electronic gadgets in the context of technology.</p>
                            <div class="row g-3 mt-4 pictures" id="aniimated-thumbnials-2"><a class="col-sm-6"
                                    href="#!">
                                    <div class="tour-blog"><img class="img-fluid rounded"
                                            src="{{ asset('assets/images/other-images/mountain.jpg') }}" alt="mountain">
                                    </div>
                                </a><a class="col-sm-6" href="#!">
                                    <div class="tour-blog"><img class="img-fluid rounded"
                                            src="{{ asset('assets/images/other-images/sea.jpg') }}" alt="sea"></div>
                                </a></div>
                            <div class="like-comment mt-4" data-intro="This is your like-comment-share icons">
                                <ul class="list-inline">
                                    <li class="list-inline-item b-r-gray pe-3"><label class="m-0"><a href="#!"><i
                                                    class="fa-solid fa-heart"></i></a>  Like</label></li>
                                    <li class="list-inline-item b-r-gray pe-3"><label class="m-0"><a href="#!"><i
                                                    class="fa-solid fa-comments"></i></a>  Comment</label>
                                    </li>
                                    <li class="list-inline-item"><label class="m-0"><a href="#!"><i
                                                    class="fa-solid fa-paper-plane"></i></a>  Share</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- user profile second-style end-->
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/counter/custom-counter1.js') }}"></script>
    <script src="{{ asset('assets/js/tour/intro.js') }}"></script>
    <script src="{{ asset('assets/js/tour/intro-init.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('assets/js/common-avatar-change.js') }}"></script>
@endsection
