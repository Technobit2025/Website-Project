@extends('layouts.simple.master')

@section('title', 'Advance Init')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dataTables.bootstrap5.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Advance Init</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Data Tables</li>
                        <li class="breadcrumb-item active">Advance Init</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid datatable-advance-wrapper">
        <div class="row"><!-- Stock result -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5>Stock Result</h5>
                        <p class="f-m-light mt-1">Data within DataTables can be easily rendered to add
                            graphics or colour to your tables, as demonstrated in the example on this page.
                            These examples make use of columns.render and drawCallback to customise the
                            cells in three ways:</p>
                        <p class="f-m-light mt-1">1. the colour of the cell is determine by the relative
                            price of the stock.</p>
                        <p class="f-m-light mt-1"> 2. a 'sparkline' class is added to the numeric array in
                            the 'last' column.</p>
                        <p class="f-m-light mt-1"> 3. the jQuery Sparklines plugin is called to turn that
                            array into a line graph.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped">
                            <table class="display nowrap" id="stock" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Symbol</th>
                                        <th>Price</th>
                                        <th>Difference</th>
                                        <th>Last</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Symbol</th>
                                        <th>Price</th>
                                        <th>Difference</th>
                                        <th>Last</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5>Row Create Callback</h5>
                        <p class="f-m-light mt-1"> For each row that is generated for display, the
                            createdRow function is called once and once only. It is passed the create row
                            node which can then be modified.</p>
                        <p class="f-m-light mt-1">the 'salary' column Primary and bold by adding a CSS class
                            to the container cell if the salary is greater than $150,000.</p>
                        <p class="f-m-light mt-1">the 'salary' column danger and bold by adding a CSS class
                            to the container cell if the salary is less than $40,000.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar table-striped">
                            <table class="display callback-table" id="row_create" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>Email</th>
                                        <th>Experience</th>
                                        <th>Sex</th>
                                        <th>Contact No.</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Elana Robbert </td>
                                        <td>ElanaRob@gmail.com </td>
                                        <td>1 Year </td>
                                        <td>Male </td>
                                        <td>+91 9789887777</td>
                                        <td>28,000</td>
                                    </tr>
                                    <tr>
                                        <td>Stiphen Deo</td>
                                        <td>Stiphen@yahoo.com</td>
                                        <td>6 Month </td>
                                        <td>Female</td>
                                        <td>+91 9874563210 </td>
                                        <td>22,000</td>
                                    </tr>
                                    <tr>
                                        <td>Genelia Ottre </td>
                                        <td>Genelia@gmail.com</td>
                                        <td>2 Days</td>
                                        <td>Male</td>
                                        <td>+91 8794562135</td>
                                        <td>24,120</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>Michael@yahoo.com</td>
                                        <td>3 Year</td>
                                        <td>Female</td>
                                        <td>+91 1234567891</td>
                                        <td>$1,98,500</td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td>Paul@gmail.com</td>
                                        <td>2 Day</td>
                                        <td>Male</td>
                                        <td>+91 3124567894</td>
                                        <td>$7,25,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>Gloria@yahoo.com</td>
                                        <td>4 Year</td>
                                        <td>Male</td>
                                        <td>+91 9876541230</td>
                                        <td>$2,37,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Bradley@gmail.com</td>
                                        <td>6 Year</td>
                                        <td>Male</td>
                                        <td>+91 8794561230</td>
                                        <td>$1,32,000</td>
                                    </tr>
                                    <tr>
                                        <td>Dai Rios</td>
                                        <td>Rios@gmail.com</td>
                                        <td>1 Year</td>
                                        <td>Male</td>
                                        <td>+91 7418529630</td>
                                        <td>$2,17,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Jenette@yahoo.com</td>
                                        <td>2 Year</td>
                                        <td>Female</td>
                                        <td>+91 4569871230</td>
                                        <td>$3,45,000</td>
                                    </tr>
                                    <tr>
                                        <td>Yuri Berry</td>
                                        <td>Berry@gmail.com</td>
                                        <td>3 Year</td>
                                        <td>Female</td>
                                        <td>+91 7894561230</td>
                                        <td>$6,75,000</td>
                                    </tr>
                                    <tr>
                                        <td>Caesar Vance</td>
                                        <td>Vance@yahoo.com</td>
                                        <td>1 Year</td>
                                        <td>Male</td>
                                        <td>+91 8596741230</td>
                                        <td>$14,500</td>
                                    </tr>
                                    <tr>
                                        <td>Doris Wilder</td>
                                        <td>Wilder@gmail.com</td>
                                        <td>6 Month</td>
                                        <td>Male</td>
                                        <td>+91 6541239870</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td>Angelica Ramos</td>
                                        <td>Angelica@gmail.com</td>
                                        <td>4 Month</td>
                                        <td>Female</td>
                                        <td>+91 8745963210</td>
                                        <td>$12,00,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Joyce</td>
                                        <td>Gavin@yahoo.com</td>
                                        <td>8 Month</td>
                                        <td>Male</td>
                                        <td>+91 8596741230</td>
                                        <td>$92,575</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Chang</td>
                                        <td>Jennifer@yahoo.com</td>
                                        <td>1 Year</td>
                                        <td>Female</td>
                                        <td>+91 7412589630</td>
                                        <td>$3,57,650</td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Brenden@gmail.com</td>
                                        <td>2 Year</td>
                                        <td>Female</td>
                                        <td>+91 6589742301</td>
                                        <td>$2,06,850</td>
                                    </tr>
                                    <tr>
                                        <td>Fiona Green</td>
                                        <td>Fiona@yahoo.com</td>
                                        <td>3 Month</td>
                                        <td>Female</td>
                                        <td>+91 6985321470</td>
                                        <td>$8,50,000</td>
                                    </tr>
                                    <tr>
                                        <td>Shou Itou</td>
                                        <td>Shou@gmail.com</td>
                                        <td>2 Year</td>
                                        <td>Female</td>
                                        <td>+91 3256897414</td>
                                        <td>$1,63,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michelle House</td>
                                        <td>Michelle@gmail.com</td>
                                        <td>1 Year</td>
                                        <td>Male</td>
                                        <td>+91 8745961235</td>
                                        <td>$95,400</td>
                                    </tr>
                                    <tr>
                                        <td>Suki Burks</td>
                                        <td>Burks@gmail.com</td>
                                        <td>3 Year</td>
                                        <td>Female</td>
                                        <td>+91 4785961230</td>
                                        <td>$1,14,500</td>
                                    </tr>
                                    <tr>
                                        <td>Prescott Bartlett</td>
                                        <td>Prescott@gmail.com</td>
                                        <td>8 Year</td>
                                        <td>Male</td>
                                        <td>+91 4578961231</td>
                                        <td>$1,45,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Cortez</td>
                                        <td>Gavin@gmail.com</td>
                                        <td>9 Year</td>
                                        <td>Male</td>
                                        <td>+91 748521369</td>
                                        <td>$2,35,500</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>Email</th>
                                        <th>Experience</th>
                                        <th>Sex</th>
                                        <th>Contact No.</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5>Footer callback</h5>
                        <p class="f-m-light mt-1"> With the use of the header and footer callback
                            manipulation functions provided by DataTables <code>headerCallback </code>option
                            and <code>footerCallback </code>option, it is possible to perform some powerful
                            and useful data manipulation functions, such as summarizing data in the table.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display foot-callback-table" id="footer-callback-table">
                                <thead>
                                    <tr>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger</td>
                                        <td>Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett</td>
                                        <td>Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton</td>
                                        <td>Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric</td>
                                        <td>Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Airi</td>
                                        <td>Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle</td>
                                        <td>Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod</td>
                                        <td>Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona</td>
                                        <td>Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td>Colleen</td>
                                        <td>Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya</td>
                                        <td>Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>$103,600</td>
                                    </tr>
                                    <tr>
                                        <td>Jena</td>
                                        <td>Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>$90,560</td>
                                    </tr>
                                    <tr>
                                        <td>Quinn</td>
                                        <td>Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>$342,000</td>
                                    </tr>
                                    <tr>
                                        <td>Charde</td>
                                        <td>Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>$470,600</td>
                                    </tr>
                                    <tr>
                                        <td>Haley</td>
                                        <td>Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>$313,500</td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana</td>
                                        <td>Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>$385,750</td>
                                    </tr>
                                    <tr>
                                        <td>Michael</td>
                                        <td>Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>$198,500</td>
                                    </tr>
                                    <tr>
                                        <td>Paul</td>
                                        <td>Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>$725,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gloria</td>
                                        <td>Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>$237,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley</td>
                                        <td>Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td>Dai</td>
                                        <td>Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>$217,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jenette</td>
                                        <td>Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>$345,000</td>
                                    </tr>
                                    <tr>
                                        <td>Yuri</td>
                                        <td>Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>$675,000</td>
                                    </tr>
                                    <tr>
                                        <td>Caesar</td>
                                        <td>Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td>Doris</td>
                                        <td>Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sydney</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td>Angelica</td>
                                        <td>Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin</td>
                                        <td>Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>$92,575</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer</td>
                                        <td>Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>$357,650</td>
                                    </tr>
                                    <tr>
                                        <td>Brenden</td>
                                        <td>Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td>Fiona</td>
                                        <td>Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>$850,000</td>
                                    </tr>
                                    <tr>
                                        <td>Shou</td>
                                        <td>Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>$163,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michelle</td>
                                        <td>House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sydney</td>
                                        <td>$95,400</td>
                                    </tr>
                                    <tr>
                                        <td>Suki</td>
                                        <td>Burks</td>
                                        <td>Developer</td>
                                        <td>London</td>
                                        <td>$114,500</td>
                                    </tr>
                                    <tr>
                                        <td>Prescott</td>
                                        <td>Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>$145,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin</td>
                                        <td>Cortez</td>
                                        <td>Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>$235,500</td>
                                    </tr>
                                    <tr>
                                        <td>Martena</td>
                                        <td>Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>$324,050</td>
                                    </tr>
                                    <tr>
                                        <td>Unity</td>
                                        <td>Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>$85,675</td>
                                    </tr>
                                    <tr>
                                        <td>Howard</td>
                                        <td>Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>$164,500</td>
                                    </tr>
                                    <tr>
                                        <td>Hope</td>
                                        <td>Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>$109,850</td>
                                    </tr>
                                    <tr>
                                        <td>Vivian</td>
                                        <td>Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr>
                                        <td>Timothy</td>
                                        <td>Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>$136,200</td>
                                    </tr>
                                    <tr>
                                        <td>Jackson</td>
                                        <td>Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>$645,750</td>
                                    </tr>
                                    <tr>
                                        <td>Olivia</td>
                                        <td>Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>$234,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno</td>
                                        <td>Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sakura</td>
                                        <td>Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>$139,575</td>
                                    </tr>
                                    <tr>
                                        <td>Thor</td>
                                        <td>Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>$98,540</td>
                                    </tr>
                                    <tr>
                                        <td>Finn</td>
                                        <td>Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>$87,500</td>
                                    </tr>
                                    <tr>
                                        <td>Serge</td>
                                        <td>Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr>
                                        <td>Zenaida</td>
                                        <td>Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr>
                                        <td>Zorita</td>
                                        <td>Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>$115,000</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer</td>
                                        <td>Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>$75,650</td>
                                    </tr>
                                    <tr>
                                        <td>Cara</td>
                                        <td>Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr>
                                        <td>Hermione</td>
                                        <td>Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>$356,250</td>
                                    </tr>
                                    <tr>
                                        <td>Lael</td>
                                        <td>Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jonas</td>
                                        <td>Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td>Shad</td>
                                        <td>Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michael</td>
                                        <td>Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Donna</td>
                                        <td>Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>$112,000</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4"></th>
                                        <th class="txt-primary"></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h5>Row Grouping</h5>
                        <p class="f-m-light mt-1"> In the example below the 'group' is the office location,
                            which is based on the information in the third column (which is set to hidden).
                            The grouping indicator is added by the<code> drawCallback </code>Option function
                            , which will parse through the rows which are displayed, and enter a grouping TR
                            element where a new group is found.A <code>click </code>event handler is added
                            for the grouping rows to allow the grouping order to be restored as well as
                            ordering by any other column.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display row-group-table" id="row-grouping-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011-04-25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011-07-25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009-01-12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012-03-29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008-11-28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012-12-02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012-08-06</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010-10-14</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009-09-15</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008-12-13</td>
                                        <td>$103,600</td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008-12-19</td>
                                        <td>$90,560</td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013-03-03</td>
                                        <td>$342,000</td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008-10-16</td>
                                        <td>$470,600</td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012-12-18</td>
                                        <td>$313,500</td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010-03-17</td>
                                        <td>$385,750</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012-11-27</td>
                                        <td>$198,500</td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010-06-09</td>
                                        <td>$725,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009-04-10</td>
                                        <td>$237,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012-10-13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012-09-26</td>
                                        <td>$217,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011-09-03</td>
                                        <td>$345,000</td>
                                    </tr>
                                    <tr>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009-06-25</td>
                                        <td>$675,000</td>
                                    </tr>
                                    <tr>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011-12-12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sydney</td>
                                        <td>23</td>
                                        <td>2010-09-20</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009-10-09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010-12-22</td>
                                        <td>$92,575</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>2010-11-14</td>
                                        <td>$357,650</td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011-06-07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td>Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010-03-11</td>
                                        <td>$850,000</td>
                                    </tr>
                                    <tr>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>2011-08-14</td>
                                        <td>$163,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sydney</td>
                                        <td>37</td>
                                        <td>2011-06-02</td>
                                        <td>$95,400</td>
                                    </tr>
                                    <tr>
                                        <td>Suki Burks</td>
                                        <td>Developer</td>
                                        <td>London</td>
                                        <td>53</td>
                                        <td>2009-10-22</td>
                                        <td>$114,500</td>
                                    </tr>
                                    <tr>
                                        <td>Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>2011-05-07</td>
                                        <td>$145,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Cortez</td>
                                        <td>Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>2008-10-26</td>
                                        <td>$235,500</td>
                                    </tr>
                                    <tr>
                                        <td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>2011-03-09</td>
                                        <td>$324,050</td>
                                    </tr>
                                    <tr>
                                        <td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009-12-09</td>
                                        <td>$85,675</td>
                                    </tr>
                                    <tr>
                                        <td>Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>2008-12-16</td>
                                        <td>$164,500</td>
                                    </tr>
                                    <tr>
                                        <td>Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>2010-02-12</td>
                                        <td>$109,850</td>
                                    </tr>
                                    <tr>
                                        <td>Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>2009-02-14</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr>
                                        <td>Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>2008-12-11</td>
                                        <td>$136,200</td>
                                    </tr>
                                    <tr>
                                        <td>Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>2008-09-26</td>
                                        <td>$645,750</td>
                                    </tr>
                                    <tr>
                                        <td>Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2011-02-03</td>
                                        <td>$234,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011-05-03</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sakura Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>37</td>
                                        <td>2009-08-19</td>
                                        <td>$139,575</td>
                                    </tr>
                                    <tr>
                                        <td>Thor Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2013-08-11</td>
                                        <td>$98,540</td>
                                    </tr>
                                    <tr>
                                        <td>Finn Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009-07-07</td>
                                        <td>$87,500</td>
                                    </tr>
                                    <tr>
                                        <td>Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2012-04-09</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr>
                                        <td>Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>63</td>
                                        <td>2010-01-04</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr>
                                        <td>Zorita Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>56</td>
                                        <td>2012-06-01</td>
                                        <td>$115,000</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>43</td>
                                        <td>2013-02-01</td>
                                        <td>$75,650</td>
                                    </tr>
                                    <tr>
                                        <td>Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011-12-06</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr>
                                        <td>Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2011-03-21</td>
                                        <td>$356,250</td>
                                    </tr>
                                    <tr>
                                        <td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009-02-27</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010-07-14</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008-11-13</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011-06-27</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011-01-25</td>
                                        <td>$112,000</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Container-fluid Ends-->
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables1.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom2.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable_advance.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
