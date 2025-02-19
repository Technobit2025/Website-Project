<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>Ecommerce Template Cuba - Premium Admin Template</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <style type="text/css">
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: Rubik, sans-serif;
            background-color: #f6f7fb;
            display: block;
            padding: 0 12px;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
        }

        h5 {
            margin: 10px;
            color: #777;
        }

        .text-center {
            text-align: center
        }

        img.img-fluid {
            max-width: 100%;
            height: auto;
        }

        .main-bg-light {
            background-color: #fafafa;
        }

        .title {
            color: #444444;
            font-size: 22px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 0;
            padding-bottom: 0;
            text-transform: capitalize;
            display: inline-block;
            line-height: 1;
        }

        .menu {
            width: 100%;
        }

        .menu li a {
            text-transform: capitalize;
            color: #444;
            font-size: 16px;
            margin-right: 15px
        }

        .menu li a:hover {
            color: #7366FF !important;
        }

        .main-logo {
            padding: 10px 20px;
        }

        .product-box .product {
            border: 1px solid #ddd;
            text-align: center;
            position: relative;
            margin: 0 15px;
        }

        .product-info {
            margin-top: 15px;
        }

        .product-info h6 {
            line-height: 1;
            margin-bottom: 0;
            padding-bottom: 5px;
            font-size: 14px;
            font-family: "Roboto", sans-serif;
            color: #777;
            margin-top: 0;
        }

        .product-info h4 {
            font-size: 16px;
            color: #444;
            font-weight: 700;
            margin-bottom: 0;
            margin-top: 5px;
            padding-bottom: 10px;
            line-height: 1;
        }

        .add-with-banner>td {
            padding: 0 15px;
        }

        .footer-social-icon tr td img {
            margin-left: 5px;
            margin-right: 5px;
        }

        .temp-social td {
            display: inline-block;
        }

        .temp-social td i {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #52526c;
            border: 1px solid #52526c;
            transition: all 0.5s ease;
        }

        .temp-social td i:hover {
            background-color: #52526c;
            color: #ffffff;
        }

        .temp-social td:nth-child(n+2) {
            margin-left: 15px;
        }

        @media only screen and (max-width: 991px) {
            body {
                width: 96%;
            }
        }

        @media only screen and (max-width: 767px) {
            body {
                width: 94%;
            }

            table tbody table.slider tr th:first-child {
                display: none;
            }

            table tbody table.slider tr th:nth-child(2) {
                width: 100% !important;
            }

            table tbody table.slider tr th:nth-child(2) table {
                width: 100%;
            }

            table tbody table.slider tr th:nth-child(2) table tbody td {
                text-align: center !important;
            }

            table tbody table.slider tr th:nth-child(2) table tbody td.h2-white {
                font-size: 40px !important;
                line-height: 1 !important;
            }

            table tbody table.slider tr th:nth-child(2) table tbody td.text-button {
                display: inline-block;
            }

            table tbody table.slider tr th:nth-child(2) table tbody td p {
                text-align: center !important;
            }

            table tbody table tr.header td.menu ul li a {
                margin-right: 10px;
                font-size: 14px;
            }

            table tbody table .display-width-inner tbody td h3 {
                font-size: 22px;
            }

            table tbody table.product-sec tbody tr {
                display: flex;
                flex-wrap: wrap;
            }

            table tbody table.product-sec tbody tr td {
                width: 50%;
                flex: 0 0 auto;
            }
        }

        @media only screen and (max-width:575px) {
            tr.header td {
                display: block;
                text-align: center;
            }

            tr.header td+td {
                margin: 0 0 12px;
            }

            table tbody table tr.header td.menu ul li a {
                margin-right: 6px;
            }

            table tbody table .display-width-inner:nth-child(2) tbody tr td.img-sec {
                order: -1;
            }

            .temp-social td i {
                width: 32px !important;
                height: 32px !important;
            }

            .temp-social td:nth-child(n+2) {
                margin-left: 6px !important;
            }

            table tbody table .display-width-inner tbody tr {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }

            table tbody table .display-width-inner tbody tr td.img-sec {
                width: 100% !important;
            }

            table tbody table .display-width-inner tbody tr td.img-sec img {
                border-radius: 0 !important;
                margin-bottom: 0 !important;
            }

            table tbody table .display-width-inner tbody tr td {
                width: 50% !important;
                border-radius: 0 !important;
            }

            table tbody table.main-bg-light tbody tr.add-with-banner {
                display: flex;
                flex-wrap: wrap;
            }

            table tbody table.main-bg-light tbody tr.add-with-banner td {
                width: 100%;
            }

            table tbody table.main-bg-light tbody tr.add-with-banner td+td {
                margin-top: 15px;
            }

            table tbody table.product-sec .product-box {
                padding: 0 !important;
            }

            table tbody table.product-sec tbody tr td {
                width: 100%;
            }

            table tbody table.product-banner tbody tr {
                display: flex;
                flex-wrap: wrap;
            }

            table tbody table.product-banner tbody tr td {
                width: 100%;
            }

            table tbody table.product-banner tbody tr td+td {
                margin-top: 20px;
            }
        }

        @media only screen and (max-width:480px) {
            body {
                width: 90%;
            }
        }

        @media only screen and (max-width: 360px) {
            table tbody table .display-width-inner tbody tr td {
                width: 80% !important;
            }

            table tbody table tr.header td.menu ul li a {
                font-size: 14px;
            }
        }
    </style>
</head>
<table align="center" border="0" cellpadding="0" cellspacing="0"
    style="background-color: #fff; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);">
    <tbody>
        <tr>
            <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                        <tr class="header">
                            <td align="left" valign="top"><img class="main-logo"
                                    src="{{ asset('assets/images/logo/logo.png') }}"></td>
                            <td class="menu" align="right">
                                <ul>
                                    <li style="display: inline-block;text-decoration: unset"><a href="{{ route('admin.default_dashboard') }}"
                                            target="_blank"
                                            style="text-transform: capitalize;color:#444;text-decoration: none;">Home</a>
                                    </li>
                                    <li style="display: inline-block;text-decoration: unset"><a href="{{ route('admin.wish_list') }}"
                                            target="_blank"
                                            style="text-transform: capitalize;color:#444;text-decoration: none;">Wishlist</a>
                                    </li>
                                    <li style="display: inline-block;text-decoration: unset"><a href="{{ route('admin.cart') }}"
                                            target="_blank"
                                            style="text-transform: capitalize;color:#444;text-decoration: none;">
                                            My
                                            cart</a></li>
                                    <li style="display: inline-block;text-decoration: unset"><a href="{{ route('admin.contacts') }}"
                                            target="_blank"
                                            style="text-transform: capitalize;color:#444;text-decoration: none;">Contact</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <td><img class="img-fluid" src="{{ asset('assets/images/email-template/1.jpg') }}"
                                    alt="" style="width: 100%;"></td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="title" style="text-align: center;">Additional 50% Off</h4>
                <h5 style="text-align: center;">This comfortable chairs and &amp; Sofa or etc.</h5>
                <table class="product-sec" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                    style="margin-top:30px;">
                    <thead>
                        <tr></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="product-box hover">
                                    <div class="product border-theme br-0"><img class="img-fluid"
                                            src="{{ asset('assets/images/email-template/2.png') }}" alt="product">
                                    </div>
                                    <div class="product-info">
                                        <div class="rating"><i class="fa-solid fa-star" style="color:#ffb829;"></i><i
                                                class="fa-solid fa-star" style="color:#ffb829;"></i><i
                                                class="fa-solid fa-star" style="color:#ffb829;"></i><i
                                                class="fa-solid fa-star" style="color:#ffb829;"></i><i
                                                class="fa-solid fa-star" style="color:#ffb829;"></i></div><a
                                            href="#!" tabindex="0" style="text-align: center;">
                                            <h6 style="text-align: center;">When an unknown.</h6>
                                        </a>
                                        <h4 style="text-align: center;">$45.00</h4>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-box hover">
                                    <div class="product border-theme br-0"><img class="img-fluid"
                                            src="{{ asset('assets/images/email-template/7.png') }}" alt="product">
                                    </div>
                                    <div class="product-info">
                                        <div class="rating"><i class="fa-solid fa-star" style="color:#ffb829;"></i><i
                                                class="fa-solid fa-star" style="color:#ffb829;"></i><i
                                                class="fa-solid fa-star" style="color:#ffb829;"></i><i
                                                class="fa-solid fa-star" style="color:#ffb829;"></i><i
                                                class="fa-solid fa-star" style="color:#ffb829;"></i></div><a
                                            href="#!" tabindex="0" style="text-align: center;">
                                            <h6 style="text-align: center;">When an unknown.</h6>
                                        </a>
                                        <h4 style="text-align: center;">$75.00</h4>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-box hover">
                                    <div class="product border-theme br-0"><img class="img-fluid"
                                            src="{{ asset('assets/images/email-template/8.png') }}" alt="product">
                                    </div>
                                    <div class="product-info">
                                        <div class="rating"><i class="fa-solid fa-star" style="color:#ffb829;"></i><i
                                                class="fa-solid fa-star" style="color:#ffb829;"></i><i
                                                class="fa-solid fa-star" style="color:#ffb829;"></i><i
                                                class="fa-solid fa-star" style="color:#ffb829;"></i><i
                                                class="fa-solid fa-star" style="color:#ffb829;"></i></div><a
                                            href="#!" tabindex="0" style="text-align: center;">
                                            <h6 style="text-align: center;">When an unknown.</h6>
                                        </a>
                                        <h4 style="text-align: center;">$90.00</h4>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="main-bg-light" border="0" cellpadding="0" cellspacing="0" width="100%"
                    style="margin-top:40px;">
                    <tbody>
                        <tr>
                            <td height="45" style="mso-line-height-rule:exactly; line-height:45px;"></td>
                        </tr>
                        <tr class="add-with-banner" align="center">
                            <td><img class="img-fluid" src="{{ asset('assets/images/email-template/3.png') }}"></td>
                            <td>
                                <div style="border-top:1px solid #f02e4e; mso-line-height-rule: exactly;"
                                    data-border-bottom-color="Week Border"></div><a href="#!">
                                    <div class="Heading" align="center"
                                        style="color:#333333;font-weight:600; font-size:23px; letter-spacing:1px; line-height:35px; mso-line-height-rule: exactly; margin-top: 15px;"
                                        data-color="Week Heading" data-size="Week Heading" data-min="15"
                                        data-max="43">This Week&apos;s Sale </div>
                                    <div class="Heading" align="center"
                                        style="color:#333333; font-weight:600; font-size:25px; letter-spacing:1px; line-height:35px; mso-line-height-rule: exactly; margin-bottom: 15px;"
                                        data-color="Week Heading" data-size="Week Heading" data-min="15"
                                        data-max="45">Save Up To 50%</div>
                                </a>
                                <div style="border-bottom:1px solid #f02e4e; mso-line-height-rule: exactly;"
                                    data-border-bottom-color="Week Border"></div>
                            </td>
                        </tr>
                        <tr>
                            <td height="45" style="mso-line-height-rule:exactly; line-height:45px;"></td>
                        </tr>
                    </tbody>
                </table>
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                        <tr align="center">
                            <td><a href="#!"><img class="img-fluid"
                                        src="{{ asset('assets/images/email-template/cosmetic.jpg') }}"
                                        style="width:100%;"></a></td>
                        </tr>
                    </tbody>
                </table>
                <table class="product-banner" border="0" cellpadding="0" cellspacing="0" width="100%"
                    style="margin-top:30px;">
                    <tbody>
                        <tr class="add-with-banner" align="center">
                            <td><a href="#!"><img class="img-fluid"
                                        src="{{ asset('assets/images/email-template/6.png') }}"
                                        style="width:100%;"></a></td>
                            <td><a href="#!"><img class="img-fluid"
                                        src="{{ asset('assets/images/email-template/5.png') }}"
                                        style="width:100%;"></a></td>
                        </tr>
                    </tbody>
                </table>
                <table class="main-bg-light text-center" align="center" border="0" cellpadding="0"
                    cellspacing="0" width="100%" style="margin-top:30px;">
                    <tbody>
                        <tr>
                            <td style="padding: 30px;">
                                <div>
                                    <h4 class="title" style="margin:0;text-align: center;">Follow us</h4>
                                </div>
                                <table class="footer-social-icon" border="0" cellpadding="0" cellspacing="0"
                                    align="center" style="margin-top:20px;">
                                    <tbody>
                                        <tr class="temp-social">
                                            <td><a href="https://www.facebook.com"><i
                                                        class="fa-brands fa-facebook-f"></i></a></td>
                                            <td><a href="https://www.youtube.com/"><i
                                                        class="fa-brands fa-youtube"></i></a></td>
                                            <td><a href="https://twitter.com"><i
                                                        class="fa-brands fa-x-twitter"></i></a></td>
                                            <td><a href="https://www.linkedin.com"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></td>
                                            <td><a href="https://in.pinterest.com/"><i
                                                        class="fa-brands fa-pinterest-p"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div style="border-top: 1px solid #ddd; margin: 20px auto 0;"></div>
                                <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                    style="margin: 20px auto 0;">
                                    <tbody>
                                        <tr>
                                            <td><a href="#!" style="font-size:13px; color:#7366FF;">
                                                    Want to change how you receive
                                                    these emails?</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="font-size:13px; margin:0;">
                                                    2023 - 24 Copy Right by
                                                    Themeforest powered by Pixel Strap
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#!"
                                                    style="font-size:13px; margin:0;text-decoration: underline; color:#7366FF;">Unsubscribe</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
