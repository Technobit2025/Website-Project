@extends('layouts.simple.master')

@section('title', 'Private Chat')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Private Chat</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Chat</li>
                        <li class="breadcrumb-item active"> Private Chat</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-xxl-3 col-xl-4 col-md-5 box-col-5 xl-40">
                <div class="left-sidebar-wrapper card">
                    <div class="left-sidebar-chat">
                        <div class="input-group"><span class="input-group-text"><i class="search-icon text-gray"
                                    data-feather="search"></i></span><input class="form-control" type="text"
                                placeholder="Search here.."></div>
                    </div>
                    <div class="advance-options">
                        <ul class="nav border-tab" id="chat-options-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="chats-tab" data-bs-toggle="tab"
                                    href="#chats" role="tab" aria-controls="chats" aria-selected="true">Chats</a></li>
                            <li class="nav-item"><a class="nav-link" id="contacts-tab" data-bs-toggle="tab" href="#contacts"
                                    role="tab" aria-controls="contacts" aria-selected="false">Contacts</a></li>
                        </ul>
                        <div class="tab-content" id="chat-options-tabContent">
                            <div class="tab-pane fade show active" id="chats" role="tabpanel"
                                aria-labelledby="chats-tab">
                                <div class="common-space">
                                    <p>Recent chats</p>
                                    <div class="header-top"><a class="btn badge-light-primary f-w-500" href="#!"><i
                                                class="fa fa-plus"></i></a></div>
                                </div>
                                <ul class="chats-user">
                                    <li class="common-space">
                                        <div class="chat-time">
                                            <div class="active-profile"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/avtar/3.jpg') }}" alt="user">
                                                <div class="status bg-success"></div>
                                            </div>
                                            <div> <span>Cameron</span>
                                                <p>Hey, How are you?</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p>2 min </p>
                                            <div class="badge badge-light-success">15</div>
                                        </div>
                                    </li>
                                    <li class="common-space active">
                                        <div class="chat-time">
                                            <div class="active-profile"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}"
                                                    alt="user">
                                                <div class="status bg-success"></div>
                                            </div>
                                            <div> <span>Esther</span>
                                                <p>Thanks for reply</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p>7:30 PM</p>
                                        </div>
                                    </li>
                                    <li class="common-space">
                                        <div class="chat-time">
                                            <div class="active-profile"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/avtar/7.jpg') }}" alt="user">
                                                <div class="status bg-success"></div>
                                            </div>
                                            <div> <span>Jane</span>
                                                <p>Hey, What's up?</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p>1:10 PM</p>
                                        </div>
                                    </li>
                                    <li class="common-space">
                                        <div class="chat-time">
                                            <div class="active-profile"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/avtar/16.jpg') }}" alt="user">
                                                <div class="status bg-success"></div>
                                            </div>
                                            <div> <span>Ronald</span>
                                                <p>I'm ready</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p>3:10 PM</p>
                                        </div>
                                    </li>
                                    <li class="common-space">
                                        <div class="chat-time">
                                            <div class="active-profile"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/avtar/4.jpg') }}" alt="user">
                                                <div class="status bg-warning"></div>
                                            </div>
                                            <div> <span>Darlene</span>
                                                <p>Hey, How are you?</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p>1:30 PM</p>
                                        </div>
                                    </li>
                                    <li class="common-space">
                                        <div class="chat-time">
                                            <div class="active-profile"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/blog/comment.jpg') }}" alt="user">
                                                <div class="status bg-warning"></div>
                                            </div>
                                            <div> <span>Darrell</span>
                                                <p>What's going on?</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p>2:10 PM</p>
                                        </div>
                                    </li>
                                    <li class="common-space">
                                        <div class="chat-time">
                                            <div class="active-profile"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/blog/4.jpg') }}" alt="user">
                                                <div class="status bg-success"></div>
                                            </div>
                                            <div> <span>Theresa</span>
                                                <p>What's up?</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p>1:50 AM</p>
                                        </div>
                                    </li>
                                    <li class="common-space">
                                        <div class="chat-time">
                                            <div class="active-profile"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/blog/12.png') }}" alt="user">
                                                <div class="status bg-warning"></div>
                                            </div>
                                            <div> <span>Floyd</span>
                                                <p>Are you sure?</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p>5:14 PM</p>
                                        </div>
                                    </li>
                                    <li class="common-space">
                                        <div class="chat-time">
                                            <div class="active-profile"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/blog/9.jpg') }}" alt="user">
                                                <div class="status bg-warning"></div>
                                            </div>
                                            <div> <span>Annette</span>
                                                <p>Thanks</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p>1:50 PM</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                                <div class="common-space">
                                    <p>Contacts</p>
                                    <div class="header-top"><a class="btn badge-light-primary f-w-500" href="#!"><i
                                                class="fa fa-plus"></i></a></div>
                                </div>
                                <div class="search-contacts"><input class="form-control" type="text"
                                        placeholder="Name and phone number"><svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-search') }}"></use>
                                    </svg><i class="mic-search" data-feather="mic"></i></div>
                                <div class="contact-wrapper">
                                    <p>A </p>
                                    <ul class="border-0">
                                        <li class="common-space">
                                            <div class="chat-time"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/avtar/3.jpg') }}" alt="user">
                                                <div> <span>Andres Williamson</span>
                                                    <p>191-900-5689</p>
                                                </div>
                                            </div>
                                            <div class="contact-edit"><svg class="dropdown-toggle" role="menu"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}"></use>
                                                </svg>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#!">View Details</a><a class="dropdown-item"
                                                        href="#!"> Send Messages</a><a class="dropdown-item"
                                                        href="#!"> Add To
                                                        Favorites</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <p>B</p>
                                    <ul class="border-0">
                                        <li class="common-space">
                                            <div class="chat-time"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/blog/comment.jpg') }}" alt="user">
                                                <div> <span>Britlin Weed</span>
                                                    <p>698-781-5581</p>
                                                </div>
                                            </div>
                                            <div class="contact-edit"><svg class="dropdown-toggle" role="menu"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}"></use>
                                                </svg>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#!">View Details</a><a class="dropdown-item"
                                                        href="#!"> Send Messages</a><a class="dropdown-item"
                                                        href="#!"> Add To
                                                        Favorites</a></div>
                                            </div>
                                        </li>
                                        <li class="common-space">
                                            <div class="chat-time">
                                                <div class="custom-name bg-light-secondary">
                                                    <p class="txt-secondary f-w-500">BD</p>
                                                </div>
                                                <div> <span>Brendra Dixit</span>
                                                    <p>589-789-2563</p>
                                                </div>
                                            </div>
                                            <div class="contact-edit"><svg class="dropdown-toggle" role="menu"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}"></use>
                                                </svg>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#!">View Details</a><a class="dropdown-item"
                                                        href="#!"> Send Messages</a><a class="dropdown-item"
                                                        href="#!"> Add To
                                                        Favorites</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <p>C </p>
                                    <ul class="border-0">
                                        <li class="common-space">
                                            <div class="chat-time"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/blog/14.png') }}" alt="user">
                                                <div> <span>Cody Fisher</span>
                                                    <p>983-333-4545</p>
                                                </div>
                                            </div>
                                            <div class="contact-edit"><svg class="dropdown-toggle" role="menu"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}"></use>
                                                </svg>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#!">View Details</a><a class="dropdown-item"
                                                        href="#!"> Send Messages</a><a class="dropdown-item"
                                                        href="#!"> Add To
                                                        Favorites</a></div>
                                            </div>
                                        </li>
                                        <li class="common-space">
                                            <div class="chat-time">
                                                <div class="position-relative custom-name bg-light-success">
                                                    <p class="txt-success f-w-500">CE</p>
                                                </div>
                                                <div> <span>Clifford Evans</span>
                                                    <p>321-456-7878</p>
                                                </div>
                                            </div>
                                            <div class="contact-edit"><svg class="dropdown-toggle" role="menu"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}"></use>
                                                </svg>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#!">View Details</a><a class="dropdown-item"
                                                        href="#!"> Send Messages</a><a class="dropdown-item"
                                                        href="#!"> Add To Favorites
                                                    </a></div>
                                            </div>
                                        </li>
                                        <li class="common-space">
                                            <div class="chat-time">
                                                <div class="custom-name bg-light-warning">
                                                    <p class="txt-warning f-w-500">CW </p>
                                                </div>
                                                <div> <span>Cameron Williamson</span>
                                                    <p>369-852-7417</p>
                                                </div>
                                            </div>
                                            <div class="contact-edit"><svg class="dropdown-toggle" role="menu"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}"></use>
                                                </svg>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#!">View Details</a><a class="dropdown-item"
                                                        href="#!"> Send Messages</a><a class="dropdown-item"
                                                        href="#!"> Add To
                                                        Favorites</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <p>D</p>
                                    <ul class="border-0">
                                        <li class="common-space">
                                            <div class="chat-time"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/blog/12.png') }}" alt="user">
                                                <div> <span>Darlene Robertson</span>
                                                    <p>231-279-1001</p>
                                                </div>
                                            </div>
                                            <div class="contact-edit"><svg class="dropdown-toggle" role="menu"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}"></use>
                                                </svg>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#!">View Details</a><a class="dropdown-item"
                                                        href="#!"> Send Messages</a><a class="dropdown-item"
                                                        href="#!"> Add To
                                                        Favorites</a></div>
                                            </div>
                                        </li>
                                        <li class="common-space">
                                            <div class="chat-time"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/user/3.png') }}" alt="user">
                                                <div> <span>Dianne Russell</span>
                                                    <p>569-789-1002</p>
                                                </div>
                                            </div>
                                            <div class="contact-edit"><svg class="dropdown-toggle" role="menu"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}"></use>
                                                </svg>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#!">View Details</a><a class="dropdown-item"
                                                        href="#!"> Send Messages</a><a class="dropdown-item"
                                                        href="#!"> Add To
                                                        Favorites</a></div>
                                            </div>
                                        </li>
                                        <li class="common-space">
                                            <div class="chat-time"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/user/6.jpg') }}" alt="user">
                                                <div> <span>Darrell Steward</span>
                                                    <p>200-300-1030</p>
                                                </div>
                                            </div>
                                            <div class="contact-edit"><svg class="dropdown-toggle" role="menu"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}"></use>
                                                </svg>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#!">View Details</a><a class="dropdown-item"
                                                        href="#!"> Send Messages</a><a class="dropdown-item"
                                                        href="#!"> Add To
                                                        Favorites</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <p>E </p>
                                    <ul class="border-0">
                                        <li class="common-space">
                                            <div class="chat-time"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/user/1.jpg') }}" alt="user">
                                                <div> <span>Emily Collins</span>
                                                    <p>100-555-7032</p>
                                                </div>
                                            </div>
                                            <div class="contact-edit"><svg class="dropdown-toggle" role="menu"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}"></use>
                                                </svg>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#!">View Details</a><a class="dropdown-item"
                                                        href="#!"> Send Messages</a><a class="dropdown-item"
                                                        href="#!"> Add To
                                                        Favorites</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <p>F </p>
                                    <ul class="border-0">
                                        <li class="common-space">
                                            <div class="chat-time"><img class="img-fluid rounded-circle"
                                                    src="{{ asset('assets/images/user/2.jpg') }}" alt="user">
                                                <div> <span>Fiona Cooper</span>
                                                    <p>362-778-1919</p>
                                                </div>
                                            </div>
                                            <div class="contact-edit"><svg class="dropdown-toggle" role="menu"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}"></use>
                                                </svg>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#!">View Details</a><a class="dropdown-item"
                                                        href="#!"> Send Messages</a><a class="dropdown-item"
                                                        href="#!"> Add To
                                                        Favorites</a></div>
                                            </div>
                                        </li>
                                        <li class="common-space">
                                            <div class="chat-time">
                                                <div class="custom-name bg-light-danger">
                                                    <p class="txt-danger f-w-500">FG</p>
                                                </div>
                                                <div> <span>Freya Grayson</span>
                                                    <p>589-789-2563</p>
                                                </div>
                                            </div>
                                            <div class="contact-edit"><svg class="dropdown-toggle" role="menu"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}"></use>
                                                </svg>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#!">View Details</a><a class="dropdown-item"
                                                        href="#!"> Send Messages</a><a class="dropdown-item"
                                                        href="#!"> Add To
                                                        Favorites</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <p>G</p>
                                    <ul class="border-0">
                                        <li class="common-space">
                                            <div class="chat-time">
                                                <div class="custom-name bg-light-warning">
                                                    <p class="txt-warning f-w-500">GE</p>
                                                </div>
                                                <div> <span>Gabriel Evans</span>
                                                    <p>963-147-5024</p>
                                                </div>
                                            </div>
                                            <div class="contact-edit"><svg class="dropdown-toggle" role="menu"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}"></use>
                                                </svg>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="#!">View Details</a><a class="dropdown-item"
                                                        href="#!"> Send Messages</a><a class="dropdown-item"
                                                        href="#!"> Add To Favorites
                                                    </a></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-9 col-xl-8 col-md-7 box-col-7 xl-60">
                <div class="card right-sidebar-chat">
                    <div class="right-sidebar-title">
                        <div class="common-space">
                            <div class="chat-time-chat">
                                <div class="active-profile-chat"><img class="img-fluid rounded-circle"
                                        src="{{ asset('assets/images/dashboard-11/user/10.jpg') }}" alt="user">
                                    <div class="status bg-success"></div>
                                </div>
                                <div> <span>Esther Howard</span>
                                    <p>Online</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 offcanvas-wrapper">
                                <div class="contact-edit chat-alert"><svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#spam') }}"></use>
                                    </svg></div>
                                <div class="contact-edit chat-alert"><svg class="dropdown-toggle" role="menu"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#menubar') }}"></use>
                                    </svg>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="#!">View Details</a><a class="dropdown-item" href="#!">
                                            Send Messages</a><a class="dropdown-item" href="#!"> Add To
                                            Favorites</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-sidebar-Chats">
                        <div class="msger">
                            <div class="msger-chat">
                                <div class="msg left-msg">
                                    <div class="msg-img"></div>
                                    <div class="msg-bubble">
                                        <div class="msg-info">
                                            <div class="msg-info-name">Shepherd Doyle</div>
                                            <div class="msg-info-time">01:14 PM</div>
                                        </div>
                                        <div class="msg-text">Good morning. How may I help you with this?
                                            &#x1F604;</div>
                                    </div>
                                </div>
                                <div class="msg right-msg">
                                    <div class="msg-img"></div>
                                    <div class="msg-bubble">
                                        <div class="msg-info">
                                            <div class="msg-info-name">Esther Howard</div>
                                            <div class="msg-info-time">12:14 PM</div>
                                        </div>
                                        <div class="msg-text">Could you perhaps clarify the most recent
                                            project deadline?</div>
                                    </div>
                                </div>
                                <div class="msg right-msg">
                                    <div class="msg-img"></div>
                                    <div class="msg-bubble">
                                        <div class="msg-info">
                                            <div class="msg-info-name">Esther Howard</div>
                                            <div class="msg-info-time">12:14 PM</div>
                                        </div>
                                        <div class="msg-text">Yes, the deadline is scheduled for Friday of
                                            next week.</div>
                                    </div>
                                </div>
                                <div class="msg left-msg">
                                    <div class="msg-img"></div>
                                    <div class="msg-bubble">
                                        <div class="msg-info">
                                            <div class="msg-info-name">Shepherd Doyle</div>
                                            <div class="msg-info-time">01:14 PM</div>
                                        </div>
                                        <div class="msg-text">Is that timeline negotiable?</div>
                                    </div>
                                </div>
                                <div class="msg right-msg">
                                    <div class="msg-img"></div>
                                    <div class="msg-bubble">
                                        <div class="msg-info">
                                            <div class="msg-info-name">Esther Howard</div>
                                            <div class="msg-info-time">12:14 PM</div>
                                        </div>
                                        <div class="msg-text">I'll talk to the team about it.</div>
                                    </div>
                                </div>
                                <div class="msg left-msg">
                                    <div class="msg-img"></div>
                                    <div class="msg-bubble">
                                        <div class="msg-info">
                                            <div class="msg-info-name">Shepherd Doyle</div>
                                            <div class="msg-info-time">01:14 PM</div>
                                        </div>
                                        <div class="msg-text">I appreciate your quick attention to this.
                                        </div>
                                    </div>
                                </div>
                                <div class="msg right-msg">
                                    <div class="msg-img"></div>
                                    <div class="msg-bubble">
                                        <div class="msg-info">
                                            <div class="msg-info-name">Esther Howard</div>
                                            <div class="msg-info-time">12:14 PM</div>
                                        </div>
                                        <div class="msg-text">Regards. Do you have any further questions?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="msger-inputarea">
                                <div class="dropdown-form dropdown-toggle" role="main" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="icon-plus"></i>
                                    <div class="chat-icon dropdown-menu dropdown-menu-start">
                                        <div class="dropdown-item mb-2"><svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#camera') }}"></use>
                                            </svg></div>
                                        <div class="dropdown-item"><svg>
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#attchment') }}"></use>
                                            </svg></div>
                                    </div>
                                </div><input class="msger-input two uk-textarea" type="text"
                                    placeholder="Type Message here..">
                                <div class="open-emoji">
                                    <div class="second-btn uk-button"></div>
                                </div><button class="msger-send-btn" type="submit"><i
                                        class="fa fa-location-arrow"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/common-chat.js') }}"></script>
    <script src="{{ asset('assets/js/common-active-chat.js') }}"></script>
    <script src="{{ asset('assets/js/emoji-js/custom-emoji.js') }}"></script>
    <script src="{{ asset('assets/js/emoji-js/custom-emojis.js') }}"></script>
@endsection
