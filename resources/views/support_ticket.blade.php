@extends('layouts.simple.master')

@section('title', 'Support Ticket')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dataTables.bootstrap5.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Support Ticket</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Support Ticket</li>
                        <li class="breadcrumb-item active">Support Ticket</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Support Ticket List</h5>
                        <p class="f-m-light mt-1">List of ticket open by customers</p>
                    </div>
                    <div class="card-body">
                        <div class="row gx-3">
                            <div class="col-xl-4 col-sm-6 box-col-6">
                                <div class="card ecommerce-widget">
                                    <div class="card-body support-ticket-font">
                                        <div class="row">
                                            <div class="col-5"><span>Order</span>
                                                <h3 class="total-num counter" data-target="2563">0</h3>
                                            </div>
                                            <div class="col-7">
                                                <div class="text-end">
                                                    <ul>
                                                        <li>Profit<span class="product-stts txt-success ms-2">9999<i
                                                                    class="icon-angle-up f-12 ms-1"></i></span></li>
                                                        <li>Loss<span class="product-stts txt-danger ms-2">2000<i
                                                                    class="icon-angle-down f-12 ms-1"></i></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-showcase">
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 box-col-6">
                                <div class="card ecommerce-widget">
                                    <div class="card-body support-ticket-font">
                                        <div class="row">
                                            <div class="col-5"><span>Pending</span>
                                                <h3 class="total-num counter" data-target="8943">0</h3>
                                            </div>
                                            <div class="col-7">
                                                <div class="text-end">
                                                    <ul>
                                                        <li>Profit<span class="product-stts txt-success ms-2">9200<i
                                                                    class="icon-angle-up f-12 ms-1"></i></span></li>
                                                        <li>Loss<span class="product-stts txt-danger ms-2">1200<i
                                                                    class="icon-angle-down f-12 ms-1"></i></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-showcase">
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 box-col-6">
                                <div class="card ecommerce-widget">
                                    <div class="card-body support-ticket-font">
                                        <div class="row">
                                            <div class="col-5"><span>Running</span>
                                                <h3 class="total-num counter" data-target="2500">0</h3>
                                            </div>
                                            <div class="col-7">
                                                <div class="text-end">
                                                    <ul>
                                                        <li>Profit<span class="product-stts txt-success ms-2">7805<i
                                                                    class="icon-angle-up f-12 ms-1"></i></span></li>
                                                        <li>Loss<span class="product-stts txt-danger ms-2">1000<i
                                                                    class="icon-angle-down f-12 ms-1"></i></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-showcase">
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 box-col-6">
                                <div class="card ecommerce-widget">
                                    <div class="card-body support-ticket-font">
                                        <div class="row">
                                            <div class="col-5"><span>Smooth</span>
                                                <h3 class="total-num counter" data-target="2060">0</h3>
                                            </div>
                                            <div class="col-7">
                                                <div class="text-end">
                                                    <ul>
                                                        <li>Profit<span class="product-stts txt-success ms-2">8590<i
                                                                    class="icon-angle-up f-12 ms-1"></i></span></li>
                                                        <li>Loss<span class="product-stts txt-danger ms-2">1006<i
                                                                    class="icon-angle-down f-12 ms-1"></i></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-showcase">
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 70%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 box-col-6">
                                <div class="card ecommerce-widget">
                                    <div class="card-body support-ticket-font">
                                        <div class="row">
                                            <div class="col-5"><span>Done</span>
                                                <h3 class="total-num counter" data-target="5600">0</h3>
                                            </div>
                                            <div class="col-7">
                                                <div class="text-end">
                                                    <ul>
                                                        <li>Profit<span class="product-stts txt-success ms-2">7890<i
                                                                    class="icon-angle-up f-12 ms-1"></i></span></li>
                                                        <li>Loss<span class="product-stts txt-danger ms-2">1350<i
                                                                    class="icon-angle-down f-12 ms-1"></i></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-showcase">
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 box-col-6">
                                <div class="card ecommerce-widget">
                                    <div class="card-body support-ticket-font">
                                        <div class="row">
                                            <div class="col-5"><span>Cancle</span>
                                                <h3 class="total-num counter" data-target="2560">0</h3>
                                            </div>
                                            <div class="col-7">
                                                <div class="text-end">
                                                    <ul>
                                                        <li>Profit<span class="product-stts txt-success ms-2">4000<i
                                                                    class="icon-angle-up f-12 ms-1"></i></span></li>
                                                        <li>Loss<span class="product-stts txt-danger ms-2">1005<i
                                                                    class="icon-angle-down f-12 ms-1"></i></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-showcase">
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive support-ticket-table custom-scrollbar">
                            <table class="display border table-striped" id="basic-6">
                                <thead>
                                    <tr>
                                        <th rowspan="2">Name</th>
                                        <th colspan="2">HR Information</th>
                                        <th colspan="4">Contact</th>
                                    </tr>
                                    <tr>
                                        <th>Position</th>
                                        <th>Salary</th>
                                        <th>Office</th>
                                        <th>Skill</th>
                                        <th>Extn.</th>
                                        <th>E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/1.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Tiger Nixon</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>System Architect</td>
                                        <td>$320,800</td>
                                        <td>Edinburgh</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 30%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>5421</td>
                                        <td>t.nixon@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/2.png') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Garrett Winters</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Accountant</td>
                                        <td>$170,750</td>
                                        <td>Tokyo</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 40%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>8422</td>
                                        <td>g.winters@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/3.png') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Ashton Cox</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Junior Technical Author</td>
                                        <td>$86,000</td>
                                        <td>San Francisco</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>1562</td>
                                        <td>a.cox@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/4.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Cedric Kelly</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Senior Javascript Developer</td>
                                        <td>$433,060</td>
                                        <td>Edinburgh</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 80%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>6224</td>
                                        <td>c.kelly@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/5.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Airi Satou</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Accountant</td>
                                        <td>$162,700</td>
                                        <td>Tokyo</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 70%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>5407</td>
                                        <td>a.satou@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/6.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Brielle Williamson</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Integration Specialist</td>
                                        <td>$372,000</td>
                                        <td>New York</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 55%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>4804</td>
                                        <td>b.williamson@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/7.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Herrod Chandler</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Sales Assistant</td>
                                        <td>$137,500</td>
                                        <td>San Francisco</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 80%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9608</td>
                                        <td>h.chandler@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/8.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Rhona Davidson</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Integration Specialist</td>
                                        <td>$327,900</td>
                                        <td>Tokyo</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 90%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>6200</td>
                                        <td>r.davidson@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/9.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Colleen Hurst</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Javascript Developer</td>
                                        <td>$205,500</td>
                                        <td>San Francisco</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 24%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2360</td>
                                        <td>c.hurst@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/10.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Sonya Frost</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Software Engineer</td>
                                        <td>$103,600</td>
                                        <td>Edinburgh</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 58%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>1667</td>
                                        <td>s.frost@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/11.png') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Jena Gaines</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Office Manager</td>
                                        <td>$90,560</td>
                                        <td>London</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 80%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>3814</td>
                                        <td>j.gaines@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/12.png') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Quinn Flynn</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Support Lead</td>
                                        <td>$342,000</td>
                                        <td>Edinburgh</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 70%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>9497</td>
                                        <td>q.flynn@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/1.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Charde Marshall</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Regional Director</td>
                                        <td>$470,600</td>
                                        <td>San Francisco</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 100%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>6741</td>
                                        <td>c.marshall@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/2.png') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Haley Kennedy</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Senior Marketing Designer</td>
                                        <td>$313,500</td>
                                        <td>London</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>3597</td>
                                        <td>h.kennedy@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/3.png') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Tatyana Fitzpatrick</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Regional Director</td>
                                        <td>$385,750</td>
                                        <td>London</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 30%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>1965</td>
                                        <td>t.fitzpatrick@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/4.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Michael Silva</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Marketing Designer</td>
                                        <td>$198,500</td>
                                        <td>London</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>1581</td>
                                        <td>m.silva@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/5.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Paul Byrd</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>$725,000</td>
                                        <td>New York</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 10%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>3059</td>
                                        <td>p.byrd@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/6.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Gloria Little</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Systems Administrator</td>
                                        <td>$237,500</td>
                                        <td>New York</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 15%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>1721</td>
                                        <td>g.little@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/7.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Bradley Greer</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Software Engineer</td>
                                        <td>$132,000</td>
                                        <td>London</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 30%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2558</td>
                                        <td>b.greer@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/8.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Dai Rios</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Personnel Lead</td>
                                        <td>$217,500</td>
                                        <td>Edinburgh</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 40%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2290</td>
                                        <td>d.rios@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/9.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Jenette Caldwell</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Development Lead</td>
                                        <td>$345,000</td>
                                        <td>New York</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>1937</td>
                                        <td>j.caldwell@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/10.jpg') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Yuri Berry</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>$675,000</td>
                                        <td>New York</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>6154</td>
                                        <td>y.berry@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex"><img class="rounded-circle img-30 me-3"
                                                    src="{{ asset('assets/images/user/11.png') }}"
                                                    alt="Generic placeholder image">
                                                <div class="flex-grow-1 align-self-center">
                                                    <div>Caesar Vance</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Pre-Sales Support</td>
                                        <td>$106,450</td>
                                        <td>New York</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>8330</td>
                                        <td>c.vance@datatables.net</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Salary</th>
                                        <th>Office</th>
                                        <th>Skill</th>
                                        <th>Extn.</th>
                                        <th>E-mail</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables1.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/support-ticket-custom.js') }}"></script>
@endsection
