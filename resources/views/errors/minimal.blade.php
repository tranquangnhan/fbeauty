<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <style type="text/css">

            /*======================
                404 page
            =======================*/

            body {
                font-family: 'Nunito', sans-serif;
            }
            .page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
            }

            .page_404  img{ width:100%;}

            .four_zero_four_bg{

                background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
                height: 400px;
                background-position: center;
            }


            .four_zero_four_bg h1{
                font-size:80px;
            }

            .four_zero_four_bg h3{
                font-size:80px;
            }

            .link_404{
                color: #fff!important;
                padding: 10px 20px;
                background: #39ac31;
                margin: 20px 0;
                display: inline-block;}
            .contant_box_404{ margin-top:-50px;}
        </style>
    </head>
    <body class="antialiased">
        <section class="page_404">
            <div class="container">
                <div class="row m-auto">
                    <div class="col-sm-12 ">
                        <div class="col-sm-10 col-sm-offset-1  text-center m-auto">
                            <div class="four_zero_four_bg">
                                <h1 class="text-center ">@yield('code')</h1>
                            </div>

                            <div class="contant_box_404">
                                <h3 class="h2">
                                    Kh??ng c?? trang n??y
                                </h3>

                                <p>trang b???n t??m ki???m kh??ng c?? s???n</p>

                                <a  href="javascript:history.back()" class="link_404">Quay l???i </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
