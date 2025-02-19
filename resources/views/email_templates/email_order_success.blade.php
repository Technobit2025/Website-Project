<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>Order Success Cuba - Premium Admin Template</title>
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

        p {
            margin: 15px 0;
        }

        h5 {
            color: #444;
            text-align: left;
            font-weight: 400;
        }

        .text-center {
            text-align: center
        }

        .title {
            color: #444444;
            font-size: 22px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }

        table {
            margin-top: 30px
        }

        table.top-0 {
            margin-top: 0;
        }

        table.order-detail,
        .order-detail th,
        .order-detail td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        .order-detail th {
            font-size: 16px;
            padding: 15px;
            text-align: center;
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

        @media only screen and (max-width: 767px) {
            body {
                width: 93%;
            }

            .order-detail tbody tr:nth-child(n+2) td img {
                width: 65px;
            }
        }

        @media only screen and (max-width: 575px) {
            body {
                width: 90%;
            }

            .order-main-section {
                padding: 0 20px !important;
            }

            .order-detail tbody tr:nth-child(n+2) td img {
                width: 40px;
            }

            table tbody tr td .delivery-img {
                height: 120px;
            }

            .order-detail th {
                padding: 10px 8px;
                font-size: 14px;
            }

            .deliver-address tbody tr td h5 {
                font-size: 14px !important;
                margin-bottom: 8px !important;
            }

            .deliver-address tbody tr td p {
                font-size: 12px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            table tbody tr td .delivery-img {
                height: 75px;
            }

            table tbody tr td .received-order-img {
                height: 38px;
            }

            .order-main-section .temp-social td i {
                width: 28px;
                height: 28px;
            }

            .order-main-section .delivery-process-img {
                height: 75px;
            }

            .order-main-section tbody tr td .main-bg-light tbody tr td:not(.temp-social td) {
                padding: 20px !important;
            }

            .order-detail th {
                padding: 6px 8px;
                font-size: 12px;
            }

            .order-detail tbody tr td h5 {
                font-size: 12px !important;
            }

            .order-detail tbody tr td {
                padding-inline: 6px !important;
            }

            .order-detail tbody tr td:nth-child(3),
            .order-detail tbody tr th:nth-child(3) {
                display: none;
            }

            .order-main-section tbody tr td .payment-order-table tbody tr:nth-child(5) td>div {
                margin-top: 20px !important;
            }

            .deliver-address tbody tr {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                gap: 8px;
                justify-content: center;
            }

            .deliver-address tbody tr td:nth-child(2) {
                display: none;
            }

            .deliver-address tbody tr td {
                width: 70% !important;
            }
        }
    </style>
</head>

<body style="margin: 20px auto;">
    <table class="order-main-section" align="center" border="0" cellpadding="0" cellspacing="0"
        style="padding: 0 30px;background-color: #fff; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%;">
        <tbody>
            <tr>
                <td>
                    <table class="payment-order-table" align="center" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td><img class="delivery-img"
                                        src="{{ asset('assets/images/email-template/delivery.png') }}" alt=""
                                        style=";margin-bottom: 30px;"></td>
                            </tr>
                            <tr>
                                <td><img class="received-order-img"
                                        src="{{ asset('assets/images/email-template/success.png') }}" alt="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="title">thank you</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Payment Is Successfully Processsed And Your Order Is On The Way</p>
                                    <p>Transaction ID:267676GHERT105467</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="border-top:1px solid #777;height:1px;margin-top: 30px;"></div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="delivery-process-img"
                                        src="{{ asset('assets/images/email-template/order-success.png') }}"
                                        alt="" style="margin-top: 30px;"></td>
                            </tr>
                        </tbody>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td>
                                    <h2 class="title">YOUR ORDER DETAILS</h2>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left">
                        <tbody>
                            <tr align="left">
                                <th>PRODUCT</th>
                                <th style="padding-left: 15px;">DESCRIPTION</th>
                                <th>QUANTITY</th>
                                <th>PRICE </th>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('assets/images/email-template/4.png') }}" alt=""
                                        width="130"></td>
                                <td valign="top" style="padding-inline: 15px;">
                                    <h5 style="margin-top: 15px;">Lightweight Headphones - Wireless on ear headphone
                                    </h5>
                                </td>
                                <td valign="top" style="padding-inline: 15px;">
                                    <h5 style="font-size: 14px; color:#444;margin-top:15px;    margin-bottom: 0px;">Size
                                        : <span> L</span></h5>
                                    <h5 style="font-size: 14px; color:#444;margin-top: 10px;">QTY : <span>1</span></h5>
                                </td>
                                <td valign="top" style="padding-inline: 15px;">
                                    <h5 style="font-size: 14px; color:#444;margin-top:15px"><b>$799</b></h5>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('assets/images/email-template/1.png') }}" alt=""
                                        width="130"></td>
                                <td valign="top" style="padding-inline: 15px;">
                                    <h5 style="margin-top: 15px;">Three seater wood style sofa for leaving room</h5>
                                </td>
                                <td valign="top" style="padding-inline: 15px;">
                                    <h5 style="font-size: 14px; color:#444;margin-top:15px;    margin-bottom: 0px;">Size
                                        : <span> L</span></h5>
                                    <h5 style="font-size: 14px; color:#444;margin-top: 10px;">QTY : <span>1</span></h5>
                                </td>
                                <td valign="top" style="padding-inline: 15px;">
                                    <h5 style="font-size: 14px; color:#444;margin-top:15px"><b>$500</b></h5>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"
                                    style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;">
                                    Products:</td>
                                <td class="price" colspan="3"
                                    style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;">
                                    <b>$1299.00</b></td>
                            </tr>
                            <tr>
                                <td colspan="2"
                                    style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;">
                                    Discount :</td>
                                <td class="price" colspan="3"
                                    style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;">
                                    <b>$10</b></td>
                            </tr>
                            <tr>
                                <td colspan="2"
                                    style="line-height: 49px;font-family: Arial;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;">
                                    Gift Wripping: </td>
                                <td class="price" colspan="3"
                                    style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;">
                                    <b>$1299</b></td>
                            </tr>
                            <tr>
                                <td colspan="2"
                                    style="line-height: 49px;font-size: 13px;color: #000000;                  padding-left: 20px;text-align:left;border-right: unset;">
                                    Shipping :</td>
                                <td class="price" colspan="3"
                                    style="                  line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;">
                                    <b>$30</b></td>
                            </tr>
                            <tr>
                                <td colspan="2"
                                    style="line-height: 49px;font-size: 13px;color: #000000;                  padding-left: 20px;text-align:left;border-right: unset;">
                                    TOTAL PAID :</td>
                                <td class="price" colspan="3"
                                    style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;">
                                    <b>$1319</b></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="deliver-address" cellpadding="0" cellspacing="0" border="0" align="left"
                        style="width: 100%; margin-block:30px;">
                        <tbody>
                            <tr>
                                <td
                                    style="font-size: 13px; font-weight: 400; color: #444444; letter-spacing: 0.2px;width: 50%;">
                                    <h5
                                        style="font-size: 16px; font-weight: 500;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        DILIVERY ADDRESS</h5>
                                    <p
                                        style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        268 Cambridge Lane New Albany,<br> IN 47150268 Cambridge Lane <br>New Albany, IN
                                        47150</p>
                                </td>
                                <td class="user-info" width="57" height="25"><img
                                        src="{{ asset('assets/images/email-template/space.jpg') }}" alt=" "
                                        height="25" width="57"></td>
                                <td class="user-info"
                                    style="font-size: 13px; font-weight: 400; color: #444444; letter-spacing: 0.2px;width: 50%;">
                                    <h5
                                        style="font-size: 16px;font-weight: 500;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        SHIPPING ADDRESS</h5>
                                    <p
                                        style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        268 Cambridge Lane New Albany,<br> IN 47150268 Cambridge Lane <br>New Albany, IN
                                        47150</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="main-bg-light text-center top-0" align="center" border="0" cellpadding="0"
                        cellspacing="0" width="100%">
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
                                                <td><a href="#!" style="font-size:13px; color:#7366FF;">Want to
                                                        change how you receive these emails?</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="font-size:13px; margin:0;">2023 - 24 Copy Right by
                                                        Themeforest powered by Pixel Strap</p>
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
</body>

</html>
