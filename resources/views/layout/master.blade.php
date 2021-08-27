<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <title>@yield('title')</title>    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .header{
            width: 100%;
            height: 350px;
            background-image: url("/storage/banner.png");
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo{
            width: 320px;
            height: 320px;
            margin-left: 26px;
            background-image: url("/storage/logo.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .text{
            width: 200px;
            height: 100%;
            padding-left: 50px;
        }
        .menu{
            padding-top: 20px;
            height: 100%;
            width: 1800px;
            float: right;

        }
        .menu ul.root{
            list-style-type: none;
            font-size: large;
        }
        .menu li{
            height: 60px;
            line-height: 60px;
            width: 150px;
            float: right;
        }
        .menu a{
            text-decoration: none;
            color: black;
            display: block;
            text-align: center;
            font-size: 20px;
        }body{
            background: #fcfcfc;
            height: 1000px;
            overflow: auto;
        }
        footer{
            position: absolute;
            left: 0;
            right: 0;
            background: #111;
            height: 250px;
            width: 100%;
            font-family: "Open Sans";
            padding-top: 40px;
            color: #fff;
        }
        .footer-content{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
        .footer-content h2{
            font-size: 1.8rem;
            font-weight: 400;
            text-transform: capitalize;
            line-height: 3rem;
        }
        .footer-content p{
            max-width: 800px;
            margin: 10px auto;
            line-height: 28px;
            font-size: 20px;
        }
        .socials{
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0 3rem 0;
        }
        .socials li{
            margin: 0 10px;
        }
        .socials a{
            text-decoration: none;
            color: #fff;
        }
        .socials a i{
            font-size: 1.6rem;
            transition: color .4s ease;

        }
        .socials a:hover i{
            color: burlywood;
        }

        .footer-bottom{
            background: #000;
            width: 100%;
            padding: 18px 0;
            text-align: center;
        }
        .footer-bottom p{
            font-size: 18px;
            word-spacing: 2px;
            text-transform: capitalize;
        }
        .footer-bottom span{
            text-transform: uppercase;
            opacity: .4;
            font-weight: 200;
        }
    </style>
</head>
<body>   
    <div class="container">
        <div class="header">
            <div class="logo"></div>
            <div class="text">
                History &nbsp;&nbsp;|&nbsp;&nbsp; User
            </div>
        </div>

        <div class="menu">
            <ul class="root">
              <li>
                <a href="">Giới thiệu</a>
              </li>
              <li>
                <a href="">Liên hệ</a>
              </li>
              <li>
                <a href="">Hỏi đáp</a>
              </li>
              <li>
                <a href="">Tin tức</a>
              </li>
              <li>
                <a href="">Trang chủ</a>
                
              </li>
            </ul>
      
          </div>

        <div class="content">
            @yield('content')


        </div>

    </div>
  
@section('footer')
<footer>
    <div class="footer-content">
        <h2>BKacad Yard</h2>
        <p>Cảm ơn bạn đã tin tưởng dịch vụ của chúng tôi. Chúc bạn có 1 ngày tốt lành !</p>
        <ul class="socials" style="width: 100%">
            <li><a href="https://www.facebook.com/thanhdzyee/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="https://www.instagram.com/just_dduyy/?hl=vi"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2021. designed by <span>Duy & Cường</span></p>
    </div>
</footer>
@show
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}
</body>
</html>