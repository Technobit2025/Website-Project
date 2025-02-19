@extends('layouts.simple.master')

@section('title', 'Basic Tables')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Bootstrap Basic Tables</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bootstrap Tables</li>
                        <li class="breadcrumb-item active">Bootstrap Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid basic_table">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Table with Border Bottom Color</h5>
                        <p class="f-m-light mt-1"> Use <code>table</code> class to any table, and
                            <code>border-bottom-* </code>class for Border bottom color
                            .
                        </p>
                    </div>
                    <div class="table-responsive custom-scrollbar">
                        <table class="table border-bottom-table">
                            <thead>
                                <tr class="border-bottom-primary">
                                    <th scope="col">Id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Language</th>
                                    <th scope="col">Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom-secondary">
                                    <th scope="row">1</th>
                                    <td> <img class="img-30 me-2" src="{{ asset('assets/images/user/1.jpg') }}"
                                            alt="profile">Ram Jacob</td>
                                    <td>Wolfe</td>
                                    <td>RamJacob@twitter</td>
                                    <td>Developer</td>
                                    <td>Apple Inc.</td>
                                    <td> <span class="badge badge-light-danger">Php</span></td>
                                    <td>IND</td>
                                </tr>
                                <tr class="border-bottom-success">
                                    <th scope="row">2</th>
                                    <td> <img class="img-30 me-2" src="{{ asset('assets/images/user/2.jpg') }}"
                                            alt="profile">John Deo</td>
                                    <td>Gummer</td>
                                    <td>JohnDeo@twitter </td>
                                    <td>Designer</td>
                                    <td>Hewlett packard </td>
                                    <td> <span class="badge badge-light-primary">Html</span></td>
                                    <td>US</td>
                                </tr>
                                <tr class="border-bottom-info">
                                    <th scope="row">3</th>
                                    <td> <img class="img-30 me-2" src="{{ asset('assets/images/user/3.jpg') }}"
                                            alt="profile">Elana John</td>
                                    <td>Cazale </td>
                                    <td>ElanaJohn@twitter</td>
                                    <td>Designer</td>
                                    <td>Microsoft</td>
                                    <td> <span class="badge badge-light-danger">Pug</span></td>
                                    <td>UK</td>
                                </tr>
                                <tr class="border-bottom-warning">
                                    <th scope="row">4</th>
                                    <td> <img class="img-30 me-2" src="{{ asset('assets/images/user/7.jpg') }}"
                                            alt="">Meryl Streep</td>
                                    <td>Roberts</td>
                                    <td>MerylStreep@twitter</td>
                                    <td>Developer</td>
                                    <td>Tata Ltd. </td>
                                    <td> <span class="badge badge-light-success">React</span></td>
                                    <td>IDN</td>
                                </tr>
                                <tr class="border-bottom-danger">
                                    <th scope="row">5</th>
                                    <td> <img class="img-30 me-2" src="{{ asset('assets/images/user/2.png') }}"
                                            alt="">Emma Stone</td>
                                    <td>Stone</td>
                                    <td>EmmaStone@twitter </td>
                                    <td>Developer</td>
                                    <td>Wipro Ltd. </td>
                                    <td> <span class="badge badge-light-primary">Vue</span></td>
                                    <td>IRN</td>
                                </tr>
                                <tr class="border-bottom-light">
                                    <th scope="row">6</th>
                                    <td> <img class="img-30 me-2" src="{{ asset('assets/images/user/3.png') }}"
                                            alt="">Eliana Jons</td>
                                    <td>Jons</td>
                                    <td>ElianaJons@twitter </td>
                                    <td>Developer</td>
                                    <td>Info Ltd. </td>
                                    <td> <span class="badge badge-light-success">Vue</span></td>
                                    <td>IRN</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Bootstrap Table With Variants</h5>
                        <p class="f-m-light mt-1"> Use <code>table</code> class to any table, and
                            <code>border-bottom-* </code>class for Border bottom color
                            .
                        </p>
                    </div>
                    <div class="table-responsive custom-scrollbar">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Roll Number</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Standard</th>
                                    <th scope="col">Grade</th>
                                    <th scope="col">Percentage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Default </td>
                                    <td>01</td>
                                    <td>Watson Freeman</td>
                                    <td>10<sup>th</sup></td>
                                    <td>A <sup>+</sup></td>
                                    <td>89.5%</td>
                                </tr>
                                <tr class="table-primary">
                                    <td>Primary</td>
                                    <td>02</td>
                                    <td>Miley Morgan</td>
                                    <td>06<sup>th</sup></td>
                                    <td>B<sup>+</sup></td>
                                    <td>65.6%</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td>Secondary</td>
                                    <td>03</td>
                                    <td>Charli Olsen</td>
                                    <td>02<sup>th</sup></td>
                                    <td>C<sup>+</sup></td>
                                    <td>45.2%</td>
                                </tr>
                                <tr class="table-success">
                                    <td>Success</td>
                                    <td>04</td>
                                    <td>Levi Berger</td>
                                    <td>11<sup>th</sup></td>
                                    <td>A<sup>+</sup></td>
                                    <td>78.3%</td>
                                </tr>
                                <tr class="table-danger">
                                    <td>Danger</td>
                                    <td>05</td>
                                    <td>Ayaan Rich</td>
                                    <td>08<sup>th</sup></td>
                                    <td>B<sup>+</sup></td>
                                    <td>67.9%</td>
                                </tr>
                                <tr class="table-warning">
                                    <td>Warning</td>
                                    <td>06</td>
                                    <td>Mae Flores</td>
                                    <td>12<sup>th</sup></td>
                                    <td>A<sup>+</sup></td>
                                    <td>99.4%</td>
                                </tr>
                                <tr class="table-info">
                                    <td>Info</td>
                                    <td>07</td>
                                    <td>Angel Terrell</td>
                                    <td>10<sup>th</sup></td>
                                    <td>B<sup>+</sup></td>
                                    <td>70.3%</td>
                                </tr>
                                <tr class="table-light">
                                    <td>Light</td>
                                    <td>08</td>
                                    <td>Logan Luna</td>
                                    <td>11<sup>th</sup></td>
                                    <td>A<sup>+</sup></td>
                                    <td>92.5%</td>
                                </tr>
                                <tr class="table-dark">
                                    <td>Dark</td>
                                    <td>09</td>
                                    <td>Sage Cuevas</td>
                                    <td>04<sup>th</sup></td>
                                    <td>A<sup>+</sup></td>
                                    <td>97.6%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Inverse Table</h5>
                        <p class="f-m-light mt-1"> Use <code>table-inverse</code> class inside table
                            element.</p>
                    </div>
                    <div class="table-responsive custom-scrollbar">
                        <table class="table table-inverse">
                            <thead>
                                <tr class="border-bottom-light">
                                    <th scope="col">Id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Office</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Salary</th>
                                    <th scope="col">Join Date </th>
                                    <th scope="col">Age</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Stephan</td>
                                    <td>Laiten</td>
                                    <td>Tokyo</td>
                                    <td>Accountant</td>
                                    <td>$2100.00 </td>
                                    <td>21/01/2024 </td>
                                    <td>20 </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Fay </td>
                                    <td>Van Damme </td>
                                    <td>London </td>
                                    <td>CEO</td>
                                    <td>$1420.00 </td>
                                    <td>14/02/2021 </td>
                                    <td>22</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Brevin </td>
                                    <td>Oleveria</td>
                                    <td>New York </td>
                                    <td>Software Engineer </td>
                                    <td>$1340.00 </td>
                                    <td>04/06/2024 </td>
                                    <td>18 </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Regina</td>
                                    <td>Ottandy </td>
                                    <td>France </td>
                                    <td>Pre-sale Support </td>
                                    <td>$3400.00 </td>
                                    <td>10/08/2024 </td>
                                    <td>25 </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Vani</td>
                                    <td>Shah </td>
                                    <td>Los Angeles </td>
                                    <td>Senior Developer </td>
                                    <td>$3500.00 </td>
                                    <td>23/07/2024 </td>
                                    <td>28 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hoverable Rows with Horizontal Border</h5>
                        <p class="f-m-light mt-1"> Hoverable row use a class <code>table-hover</code> and
                            for horizontal border use a class <code>table-border-horizontal</code> , solid
                            border use a class <code>border-solid, table </code>classes.</p>
                    </div>
                    <div class="table-responsive signal-table custom-scrollbar">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Signal Name </th>
                                    <th scope="col">Security</th>
                                    <th scope="col">Stage</th>
                                    <th scope="col">Schedule</th>
                                    <th scope="col">Team Lead</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="d-flex align-items-center"><i class="bg-light-success font-success"
                                            data-feather="alert-triangle"></i><span class="font-success">No
                                            Signal</span></td>
                                    <td>Astrid: NE Shared managed</td>
                                    <td>Medium</td>
                                    <td>Triaged</td>
                                    <td>0.33 </td>
                                    <td>Chase Nguyen </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td class="d-flex align-items-center"><i class="bg-light-danger font-danger"
                                            data-feather="alert-triangle"></i><span class="font-danger">Offline</span>
                                    </td>
                                    <td>Cosmo: prod shared ares </td>
                                    <td>Huge</td>
                                    <td>Triaged</td>
                                    <td>0.39</td>
                                    <td>Brie Furman</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td class="d-flex align-items-center"> <i class="bg-light-primary font-primary"
                                            data-feather="alert-circle"></i><span class="font-primary">Online</span></td>
                                    <td>Phoenix: prod shared lyra-lists </td>
                                    <td>Minor</td>
                                    <td>No Triaged</td>
                                    <td>3.12 </td>
                                    <td>Jeremy Lake</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td class="d-flex align-items-center"> <i class="bg-light-success font-success"
                                            data-feather="check-circle"></i><span class="font-success">No
                                            Signal</span></td>
                                    <td>Astrid: NE Shared managed</td>
                                    <td>Negligible</td>
                                    <td>Triaged</td>
                                    <td>13.18</td>
                                    <td>Angelica Howards</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td class="d-flex align-items-center"> <i class="bg-light-danger font-danger"
                                            data-feather="check-circle"></i><span class="font-danger">Online</span></td>
                                    <td>Astrid: NE Shared managed</td>
                                    <td>Medium</td>
                                    <td>No Triaged</td>
                                    <td>5.33 </td>
                                    <td>Diane Okuma</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card common-striped">
                    <div class="card-header">
                        <h5>Inverse Table Background</h5>
                        <p class="f-m-light mt-1"> Use
                            <code>bg-info, bg-success, bg-warning and bg-danger </code>classes with light
                            text on dark backgrounds inside table element.<br>To set the light background
                            color use <code>bg-[color] </code> class where <code> [color]</code> is the
                            value of your selected color from stack color palette. So for teal color
                            background class will be <code> bg-teal</code>.
                        </p>
                    </div>
                    <div class="table-responsive custom-scrollbar">
                        <table class="table table-striped">
                            <thead class="tbl-strip-thad-bdr">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Credit Volume </th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Role </th>
                                    <th scope="col">Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Ram Jacob </td>
                                    <td>Wolfe</td>
                                    <td>Apple Inc. </td>
                                    <td>$3500.00 </td>
                                    <td>RamJacob@twitter </td>
                                    <td>Developer</td>
                                    <td>IND</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>John Deo </td>
                                    <td>Gummer </td>
                                    <td>Hewlett packard </td>
                                    <td>$2400.00</td>
                                    <td>JohnDeo@twitter </td>
                                    <td>Designer</td>
                                    <td>US</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Elana John </td>
                                    <td>Wolfe</td>
                                    <td>Microsoft </td>
                                    <td>$2560.00 </td>
                                    <td>ElanaJohn@twitter </td>
                                    <td>Designer</td>
                                    <td>UK</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Meryl Streep </td>
                                    <td>Roberts</td>
                                    <td>Tata Ltd. </td>
                                    <td>$1870.00</td>
                                    <td>MerylStreep@twitter </td>
                                    <td>Developer</td>
                                    <td>IND</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Emma Stone </td>
                                    <td>Stone</td>
                                    <td>Wipro Ltd. </td>
                                    <td>$4580.00 </td>
                                    <td>EmmaStone@twitter </td>
                                    <td>Developer</td>
                                    <td>IRN</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Eliana Jons </td>
                                    <td>Jons</td>
                                    <td>Info Ltd. </td>
                                    <td>$4580.00 </td>
                                    <td>ElianaJons@twitter </td>
                                    <td>Developer</td>
                                    <td>IRN</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Caption</h5>
                        <p class="f-m-light mt-1"> A <code>&lt;caption&gt;</code> functions like a heading
                            for a table. It helps users with screen readers to find a table and understand
                            what it’s about and decide if they want to read it.</p>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table">
                                    <caption>List of users</caption>
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Employee Name </th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Experience</th>
                                            <th scope="col">Sex</th>
                                            <th scope="col">Contact No. </th>
                                            <th scope="col">Age</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Elana Robbert </td>
                                            <td>ElanaRob@gmail.com </td>
                                            <td>1 Year </td>
                                            <td>Male </td>
                                            <td>+91 9789887777 </td>
                                            <td>28 </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Stiphen Deo </td>
                                            <td>Stiphen@yahoo.com </td>
                                            <td>6 Month </td>
                                            <td>Female</td>
                                            <td>+91 9874563210 </td>
                                            <td>22 </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Genelia Ottre </td>
                                            <td>Genelia@gmail.com </td>
                                            <td>2 Days </td>
                                            <td>Male </td>
                                            <td>+91 8794562135 </td>
                                            <td>24 </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Table Head Options</h5>
                        <p class="f-m-light mt-1">Similar to tables , use the modifier
                            classes<code> table-[color]</code> to make <code>thead</code> appear in any
                            color.</p>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Striped Row with Inverse Table</h5>
                        <p class="f-m-light mt-1"> Use <code>table-striped</code> to add zebra-striping to
                            any table row within the <code></code>. This styling doesn't work in IE8 and
                            below as :nth-child CSS selector isn't supported.</p>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table table-inverse table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Dessert</th>
                                            <th scope="col">Calories</th>
                                            <th scope="col">Fat</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>KitKat</td>
                                            <td>518</td>
                                            <td>26</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Donut</td>
                                            <td>452</td>
                                            <td>25</td>
                                            <td>80</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Eclair</td>
                                            <td>262</td>
                                            <td>16</td>
                                            <td>10</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Striped Columns</h5>
                        <p class="f-m-light mt-1"> Use <code>table-striped-columns </code>to add
                            zebra-striping to any table column.</p>
                    </div>
                    <div class="card-block row emphasis-table">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table table-striped-columns">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Occupation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Kara Mayer</td>
                                            <td>53</td>
                                            <td>New York</td>
                                            <td>Software Engineer</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jorge Molina</td>
                                            <td>22</td>
                                            <td>Chicago</td>
                                            <td>Teacher</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Adele Gibbs</td>
                                            <td>28</td>
                                            <td>Miami</td>
                                            <td>Financial Advisor</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Active Tables</h5>
                        <p class="f-m-light mt-1"> Highlight a table row or cell by adding a
                            <code>table-active </code>class.
                        </p>
                    </div>
                    <div class="card-block row emphasis-table">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product ID</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-active">
                                            <th scope="row"> <a href="#!">P001</a></th>
                                            <td>Laptop</td>
                                            <td>Computers</td>
                                            <td>$999</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"> <a href="#!">P002</a></th>
                                            <td>Headphones</td>
                                            <td>Audio</td>
                                            <td class="table-active">$600</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"> <a href="#!">P003</a></th>
                                            <td class="table-active">Electric Kettle</td>
                                            <td class="table-active">Home</td>
                                            <td>$40</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Table Borders</h5>
                        <p class="f-m-light mt-1"> Add <code>table-bordered </code>for borders on all sides
                            of the table and cells.</p>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">ISBN</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Year Published</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">978-1-891830-75-4</th>
                                            <td>The Great Gatsby</td>
                                            <td>F. Scott Fitzgerald</td>
                                            <td>1975</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">978-0-06-112008-4</th>
                                            <td>To Kill a Mockingbird</td>
                                            <td>Harper Lee</td>
                                            <td>1985</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">978-0-452-28423-4</th>
                                            <td>1987</td>
                                            <td>George Orwell</td>
                                            <td>1947</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">978-1-5011-8687-0</th>
                                            <td>Where the Crawdads Sing</td>
                                            <td>Delia Owens</td>
                                            <td>2019</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Table Without Borders</h5>
                        <p class="f-m-light mt-1"> Add <code>table-borderless </code>for a table without
                            borders.</p>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Exercise Type</th>
                                            <th scope="col">Duration</th>
                                            <th scope="col">Calories Burned</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">21-07-2024</th>
                                            <td>Running</td>
                                            <td>30</td>
                                            <td>300</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">29-07-2024</th>
                                            <td>Cycling</td>
                                            <td>45</td>
                                            <td>400</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">11-08-2024</th>
                                            <td>Yoga</td>
                                            <td>60</td>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">25-11-2024</th>
                                            <td>Weightlifting</td>
                                            <td>40</td>
                                            <td>250</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Vertical alignment</h5>
                        <p class="f-m-light mt-1"> Table cells of <code>&lt;thead&gt; </code>are always
                            vertical aligned to the bottom. Table cells in
                            <code>&lt;tbody&gt; </code>inherit their alignment from
                            <code>&lt;table&gt; </code>and are aligned to the top by default. Use the
                            vertical align classes to re-align where needed.
                        </p>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">Heading1</th>
                                            <th scope="col">Heading2</th>
                                            <th scope="col">Heading3</th>
                                            <th scope="col">Heading4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>This cell inherits <code>vertical-align: middle; </code>from
                                                the table</td>
                                            <td>This cell inherits <code>vertical-align: middle; </code>from
                                                the table</td>
                                            <td>This cell inherits <code>vertical-align: middle; </code>from
                                                the table</td>
                                            <td>This here is some placeholder text, intended to take up
                                                quite a bit of vertical space, to demonstrate how the
                                                vertical alignment works in the preceding cells.</td>
                                        </tr>
                                        <tr>
                                            <td>This cell inherits <code>vertical-align: bottom; </code>from
                                                the table row</td>
                                            <td>This cell inherits <code>vertical-align: bottom; </code>from
                                                the table row</td>
                                            <td>This cell inherits <code>vertical-align: bottom; </code>from
                                                the table row</td>
                                            <td>This here is some placeholder text, intended to take up
                                                quite a bit of vertical space, to demonstrate how the
                                                vertical alignment works in the preceding cells.</td>
                                        </tr>
                                        <tr>
                                            <td>This cell inherits <code>vertical-align: middle; </code>from
                                                the table</td>
                                            <td>This cell inherits <code>vertical-align: middle; </code>from
                                                the table</td>
                                            <td>This cell is aligned to the top.</td>
                                            <td>This here is some placeholder text, intended to take up
                                                quite a bit of vertical space, to demonstrate how the
                                                vertical alignment works in the preceding cells.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Nesting</h5>
                        <p class="f-m-light mt-1"> Border styles, active styles, and table variants are not
                            inherited by nested tables.</p>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Notes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>05-09-2024</td>
                                            <td>Ryder Grant</td>
                                            <td> <span class="badge badge-success">Present</span></td>
                                            <td>On time</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <table class="table mb-0 table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Course Name</th>
                                                            <th scope="col">Instructor</th>
                                                            <th scope="col">Day</th>
                                                            <th scope="col">Time</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Data Structures</td>
                                                            <td>Prof. A. Smith</td>
                                                            <td>Monday</td>
                                                            <td>10:00 AM</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Database Systems</td>
                                                            <td>Prof. D. Johnson</td>
                                                            <td>Friday</td>
                                                            <td>09:00 AM</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11-10-2024</td>
                                            <td>Collins Ellison</td>
                                            <td> <span class="badge badge-danger">Absent</span></td>
                                            <td>Sick leave</td>
                                        </tr>
                                        <tr>
                                            <td>25-11-2024</td>
                                            <td>Ocean Kelly</td>
                                            <td> <span class="badge badge-success">Present</span></td>
                                            <td>Late by 10 minutes</td>
                                        </tr>
                                        <tr>
                                            <td>18-12-2024</td>
                                            <td>Jayce Fisher</td>
                                            <td> <span class="badge badge-danger">Absent</span></td>
                                            <td>Family emergency</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Anatomy (Table Head)</h5>
                        <p class="f-m-light mt-1"> Similar to tables and dark tables, use the modifier
                            classes <code>table-light </code>or <code>table-dark </code>to make
                            <code>&lt;thead&gt;</code>s appear light or dark gray.
                        </p>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table table-light">
                                    <thead>
                                        <tr>
                                            <th scope="col">Version</th>
                                            <th scope="col">Release Date</th>
                                            <th scope="col">New Features</th>
                                            <th scope="col">Bug Fixes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <span class="badge badge-primary">1.0.0</span></td>
                                            <td>15-05-2024</td>
                                            <td>Improved UI</td>
                                            <td>Resolved crash on startup</td>
                                        </tr>
                                        <tr>
                                            <td> <span class="badge badge-secondary">1.1.0</span></td>
                                            <td>25-06-2024</td>
                                            <td>Added user profiles</td>
                                            <td>Fixed login issues</td>
                                        </tr>
                                        <tr>
                                            <td> <span class="badge badge-warning">2.1.0</span></td>
                                            <td>06-06-2024</td>
                                            <td>Security features</td>
                                            <td>Corrected auth errors</td>
                                        </tr>
                                        <tr>
                                            <td> <span class="badge badge-success">2.2.0</span></td>
                                            <td>08-07-2024</td>
                                            <td>Multi-language support</td>
                                            <td>Fixed display bugs</td>
                                        </tr>
                                        <tr>
                                            <td> <span class="badge badge-info">3.1.0</span></td>
                                            <td>12-08-2024</td>
                                            <td>Added Sellers</td>
                                            <td>Fixed seller details</td>
                                        </tr>
                                        <tr>
                                            <td> <span class="badge badge-primary">3.2.0</span></td>
                                            <td>27-09-2024</td>
                                            <td>Added dashboards</td>
                                            <td>Fixed Timeline issue</td>
                                        </tr>
                                        <tr>
                                            <td> <span class="badge badge-secondary">4.1.0</span></td>
                                            <td>28-12-2024</td>
                                            <td>Gallery placeholders</td>
                                            <td>Fixed placeholder delay issue</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Table Foot</h5>
                        <p class="f-m-light mt-1"> To prevent any styles from leaking to nested tables, we
                            use the child combinator (>) selector in our CSS. Since we need to target all
                            the tds and ths in the thead, tbody, and tfoot, our selector would look pretty
                            long without it. </p>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product ID</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Price ($)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>P005</td>
                                            <td>Headphones</td>
                                            <td>Audio</td>
                                            <td>$120</td>
                                        </tr>
                                        <tr>
                                            <td>P006</td>
                                            <td>Blender</td>
                                            <td>Kitchen</td>
                                            <td>$80</td>
                                        </tr>
                                        <tr>
                                            <td>P007</td>
                                            <td>Smartphone</td>
                                            <td>Electronics</td>
                                            <td>$690</td>
                                        </tr>
                                        <tr>
                                            <td>P008</td>
                                            <td>Electric Kettle</td>
                                            <td>Home</td>
                                            <td>$40</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3">Total Products</td>
                                            <td>04</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Table Group Dividers</h5>
                        <p class="f-m-light mt-1"> Add a thicker border, darker between table
                            groups—<code>&lt;thead&gt;, &lt;tbody&gt;, and &lt;tfoot&gt;—with
                            </code><code>table-group-divider</code>.
                            Customize the color by changing the border-top-color (which we don’t currently
                            provide a utility class for at this time).</p>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Larry</td>
                                            <td>Olson</td>
                                            <td>@instagram</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td colspan="2">Franklin</td>
                                            <td>@linkedin</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Breakpoint Specific</h5>
                        <p class="f-m-light mt-1"> Use <code>table-responsive"❴-sm|-md|-lg|-xl|-xxl❵"</code>
                            functions like a heading for a table. It helps users with screen readers to find
                            a table and understand what it’s about and decide if they want to read it.</p>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Order Id </th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Iphone X Grey </td>
                                            <td>C12345</td>
                                            <td>$12550 </td>
                                            <td>1</td>
                                            <td>$12550</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Titan Watch </td>
                                            <td>A14725 </td>
                                            <td>$120</td>
                                            <td>2</td>
                                            <td>$250</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Apple Airpods </td>
                                            <td>B54213</td>
                                            <td>$210 </td>
                                            <td>1</td>
                                            <td>$210</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Responsive Tables with Light Background</h5>
                        <p class="f-m-light mt-1"> A <code>table-responsive , light-card</code> inside table
                            element.</p>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table light-card">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Task</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Assign</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Price </th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Web Development </td>
                                            <td>Pixel@efo.com </td>
                                            <td>+91 7874226671 </td>
                                            <td>Mark Jecno </td>
                                            <td>12/07/2024 </td>
                                            <td>$2315.00 </td>
                                            <td class="font-danger">Pending</td>
                                            <td>75%</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Graphic Design </td>
                                            <td>Strap@google.com </td>
                                            <td>+91 8347855785 </td>
                                            <td>Elana John </td>
                                            <td>23/08/2024 </td>
                                            <td>$4125.00 </td>
                                            <td class="font-danger">Pending </td>
                                            <td>45%</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>WordPress</td>
                                            <td>Pixelstrap@gmail.com </td>
                                            <td>+91 635609347 </td>
                                            <td>John Deo</td>
                                            <td>15/04/2024 </td>
                                            <td>$6123.00 </td>
                                            <td class="font-success">Done</td>
                                            <td>100%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Sizing Tables</h5>
                        <p class="f-m-light mt-1"> Example of extra large table, Add<code> table-xl</code>
                            class to the<code> table</code> , Large table Add <code> table-lg</code> ,
                            Default table Add <code>table-de</code> , Small table Add
                            <code>table-sm </code>, Extra Small table Add <code>table-xs </code>to create a
                            table.
                        </p>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table table-lg">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Employee Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Hours</th>
                                            <th scope="col">Performance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark Jecno </td>
                                            <td>22/08/2024 </td>
                                            <td class="font-danger">On leave </td>
                                            <td>0</td>
                                            <td>29/30</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Elana Robbert </td>
                                            <td>21/08/2024 </td>
                                            <td class="font-success">Present</td>
                                            <td>10</td>
                                            <td>30/30</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>John Deo </td>
                                            <td>18/08/2024</td>
                                            <td class="font-danger">On leave </td>
                                            <td>8</td>
                                            <td>28/30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card common-striped">
                    <div class="card-header">
                        <h5>Custom Table Color with Hover and Stripped</h5>
                        <p class="f-m-light mt-1"> Use class
                            <code>table-hover, table-striped table-*table-info , table-success , table-success , table-info
                                , table-danger , table-primary , table-secondary , table-light , table-active</code>
                            inside table element.
                        </p>
                    </div>
                    <div class="table-responsive custom-scrollbar">
                        <table class="table table-striped table-hover">
                            <thead class="tbl-strip-thad-bdr">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Film Title</th>
                                    <th scope="col">Released</th>
                                    <th scope="col">Studio</th>
                                    <th scope="col">Budget </th>
                                    <th scope="col">Domestic Gross</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Frozen </td>
                                    <td>2013 </td>
                                    <td>Disney </td>
                                    <td>$150,000,000</td>
                                    <td>$400,953,009</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Minions </td>
                                    <td>2015 </td>
                                    <td>Universal </td>
                                    <td>$74,000,000</td>
                                    <td>$336,045,770</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Zootopia </td>
                                    <td>2016 </td>
                                    <td>Disney </td>
                                    <td>$150,000,000</td>
                                    <td>$341,268,248</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Finding Dory </td>
                                    <td>2016</td>
                                    <td>Disney Pixar</td>
                                    <td>$175,000,000</td>
                                    <td> $486,295,561</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Toy Story 3 </td>
                                    <td>2010</td>
                                    <td>Disney Pixar</td>
                                    <td>$200,000,000</td>
                                    <td>$415,004,880</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-no-border">
                        <h5>Dashed Border </h5>
                        <p class="f-m-light mt-1">Use <code>table-dashed</code> class for dash border for
                            dotted border use class<code> table-dotted</code> for double border use
                            class<code> table-double</code>.</p>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table table-dashed">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id </th>
                                            <th scope="col">Classname</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Hours</th>
                                            <th scope="col">Trainer</th>
                                            <th scope="col">Spots</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Crit Cardio</td>
                                            <td>Gym</td>
                                            <td>9:00 AM - 11:00 AM </td>
                                            <td>Aaron Chapman </td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Zumba Dance</td>
                                            <td>Dance</td>
                                            <td>8:00 AM - 9:00 AM </td>
                                            <td>Donna Wilson </td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Like a butterfly </td>
                                            <td>Boxing</td>
                                            <td>9:00 AM - 10:00 AM </td>
                                            <td>Randy Porter </td>
                                            <td>13</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Pilates Reformer </td>
                                            <td>Gym</td>
                                            <td>7:00 AM - 8:30 AM </td>
                                            <td>Aaron Chapman </td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Mind & Body </td>
                                            <td>Yoga</td>
                                            <td>8:00 AM - 9:00 AM </td>
                                            <td>Adam Stewart </td>
                                            <td>20</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
@endsection
