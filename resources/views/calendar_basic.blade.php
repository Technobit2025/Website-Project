@extends('layouts.simple.master')

@section('title', 'Calendar')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/intltelinput.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/tagify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flatpickr/flatpickr.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Calender</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item active">Calender</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid calendar-basic">
        <div class="card">
            <div class="card-body">
                <div class="row" id="wrap">
                    <div class="col-xxl-3 box-col-12">
                        <div class="md-sidebar mb-3"><a class="btn btn-primary md-sidebar-toggle" href="#!">calendar
                                filter</a>
                            <div class="md-sidebar-aside job-left-aside custom-scrollbar">
                                <div id="external-events"><button class="btn btn-primary w-100 mb-4" type="button"
                                        data-bs-toggle="modal" data-bs-target="#DraggableEvent"> <i
                                            class="fa-solid fa-plus me-2"></i>Create Event</button>
                                    <h6>Draggable Events</h6>
                                    <div id="external-events-list">
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                            <div class="fc-event-main"> <i
                                                    class="fa-solid fa-cake-candles me-2"></i>Birthday Party
                                            </div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                            <div class="fc-event-main"> <i class="fa-solid fa-plane me-2"></i>Tour & Picnic
                                            </div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                            <div class="fc-event-main"> <i class="fa-solid fa-file me-2"></i>Reporting
                                                Schedule
                                            </div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                            <div class="fc-event-main"> <i class="fa-solid fa-utensils me-2"></i>Lunch &
                                                Break
                                            </div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                            <div class="fc-event-main"> <i
                                                    class="fa-solid fa-flag-checkered me-2"></i>Innovation
                                                Hackathon</div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                            <div class="fc-event-main"> <i class="fa-solid fa-dumbbell me-2"></i>Fitness
                                                Bootcamp
                                            </div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                            <div class="fc-event-main"> <i class="fa-solid fa-ribbon me-2"></i>Company
                                                Anniversary
                                                Celebration</div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                            <div class="fc-event-main"> <i
                                                    class="fa-solid fa-person-chalkboard me-2"></i>Client
                                                Presentation</div>
                                        </div>
                                        <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
                                            <div class="fc-event-main"> <i class="fa-solid fa-users me-2"></i>Group Projects
                                            </div>
                                        </div>
                                    </div>
                                    <p><input class="checkbox_animated" id="drop-remove" type="checkbox"><label
                                            class="mb-0" for="drop-remove">Remove
                                            after drop</label></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 box-col-12">
                        <div class="calendar-default" id="calendar-container">
                            <div id="calendar"></div>
                            <div class="modal fade" id="DraggableEvent" tabindex="-1" role="dialog"
                                aria-labelledby="DraggableEvent" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content create-event">
                                        <div class="modal-header">
                                            <h5 class="mb-0">Create Events</h5><button class="btn-close" type="button"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body custom-input">
                                            <form class="row g-3">
                                                <div class="col-md-12"><label class="form-label" for="eventName">Event
                                                        Name</label><input class="form-control" id="eventName"
                                                        type="text" placeholder="Enter event name" required=""></div>
                                                <div class="col-md-12"><label class="form-label" for="eventDetails">Event
                                                        Details</label>
                                                    <textarea class="form-control" id="eventDetails" placeholder="Enter your event details" rows="3"></textarea>
                                                </div>
                                                <div class="col-md-12"><label class="form-label"
                                                        for="datetime-localEvent">Event Date</label><input
                                                        class="form-control" id="datetime-localEvent" type="date"
                                                        value="2024-04-10"></div>
                                                <div class="col-sm-6"><label class="form-label">Start Time
                                                    </label><input class="form-control" id="time-picker1" type="time"
                                                        value="05:30"></div>
                                                <div class="col-sm-6"> <label class="form-label">End Time
                                                    </label><input class="form-control" id="time-picker2" type="time"
                                                        value="08:45"></div>
                                            </form>
                                        </div>
                                        <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                                data-bs-dismiss="modal">Cancel</button><button class="btn btn-primary"
                                                type="button">Create Event</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/fullcalendar-custom.js') }}"></script>
    <script src="{{ asset('assets/js/flat-pickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/flat-pickr/custom-flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/select2/tagify.js') }}"></script>
    <script src="{{ asset('assets/js/select2/tagify.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/intltelinput.min.js') }}"></script>
@endsection
