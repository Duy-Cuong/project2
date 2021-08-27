@extends('layout.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>...</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  </head>
  <style>
html {
  box-sizing: border-box;
}
* {
  margin: 0;
  padding: 0;
}
*,
*:before,
*:after {
  box-sizing: border-box;
}
input,
textarea,
select,
button {
    outline: none;
}
input {
    line-height: normal;
}
label,
button {
    cursor: pointer;
}
a {
    text-decoration: none;
}
img {
    max-width: 100%;
}
body {
    font-size: 16px;
    font-family: "Poppins", sans-serif;
}


/* card-list */
body {

}
.cards {
    width: 38%;
    columns: 2;
    float: right;
    margin-left: 25px;
    margin-top: 50px;

}

.card {
    border-radius: 20px;
    overflow: hidden;
    background-color: white;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    /* width: calc(calc(40% / var(--columns)) - var(--spacing));
    margin-left: var(--spacing);
    margin-bottom: var(--spacing); */
    margin-left: 50px;
    margin-bottom: 25px;
}
.card-image {
    height: 200px;
    width: 100%;
    flex-shrink: 0;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  
}
.card-top {
    padding: 18px;
}
.card-title {
    font-weight: 600;
    word-break: break-all;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    word-break: break-word;
}
.card-bottom {
    padding: 15px;
    border-top: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.row {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: flex-end;
    overflow: hidden;


}
.container{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;

}
.left{
    width: 50%;
    margin-top: 50px;
    flex-direction: column;
    text-align: center;
    position: relative;


}
.left-img{
    flex-direction: column;
    margin-left: 200px;
    margin-bottom: 20px;
    width: 550px;
    height: 320px;
    position: relative;
    background-image: url("/storage/frame1.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.left2{
    width: 100%;
    margin-top: 20px;
    text-align: center;
    left: 0;
    position: absolute;

}
  </style>
  <body>
    <div class="container">
    <div class="left">
      <div class="left-img"><br><br><br>
          <h1>Xin chào </h1><br>
        <span style="font-size: 24px; width: 100px;">
          <p>Chào mừng bạn đã đến với trang web</p>
          <p>đặt sân đá bóng. Chúng tôi mong bạn</p>
          <p>tràn đầy năng lượng và có được trải</p>
          <p>nghiệm bùng nổ trên sân !!!</p>
      </span>
      </div>
      <br><br><br><br><br>
        <div class="left2">
          <h1>Dịch vụ</h1><br><br>
          <span><a href="">Đồ thể thao</a>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <a href="">Sự kiện</a></span><br><br><br>
          <span><a href="">Khuyến mãi</a>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <a href="">Thi công sân</a></span>
      </div>
    </div>

    <div class="cards">
<div class="row">
        <div class="card">
            <img
            src="/storage/yard.png"
            alt=""
            class="card-image"
            />
            <div class="card-content">
                <div class="card-top">
                    <h3 class="card-title">Sân A</h3>
                </div>
                <div class="card-bottom">
                    <div class="card-live">
                        <i class='fas fa-dollar-sign' style='font-size:24px'><span>giá</span></i>
                    </div>
                    <div class="card-price">100.000 VNĐ</div>
                </div>
            </div>
        </div>
            <div class="card">
            <img
                src="/storage/yard.png"
                alt=""
                class="card-image"
            />
            <div class="card-content">
            <div class="card-top">
                <h3 class="card-title">Sân B</h3>
            </div>
            <div class="card-bottom">
                <div class="card-live">
                <i class='fas fa-dollar-sign' style='font-size:24px'><span>giá</span></i>
                </div>
                <div class="card-price">100.000 VNĐ</div>
            </div>
            </div>
        </div>
</div>
<div class="row">
        <div class="card">
            <img
            src="/storage/yard.png"
            alt=""
            class="card-image"
            />
            <div class="card-content">
            <div class="card-top">
                <h3 class="card-title">Sân C</h3>
            </div>
            <div class="card-bottom">
                <div class="card-live">
                <i class='fas fa-dollar-sign' style='font-size:24px'><span>giá</span></i>
                </div>
                <div class="card-price">100.000 VNĐ</div>
            </div>
            </div>
        </div>
        <div class="card">
            <img
            src="/storage/yard.png"
            alt=""
            class="card-image"
            />
            <div class="card-content">
            <div class="card-top">
                <h3 class="card-title">Sân D</h3>
            </div>
            <div class="card-bottom">
                <div class="card-live">
                <i class='fas fa-dollar-sign' style='font-size:24px'><span>giá</span></i>
                </div>
                <div class="card-price">100.000 VNĐ</div>
            </div>
            </div>
        </div>
    </div>
<div class="row">
      <div class="card">
        <img
          src="/storage/yard.png"
          alt=""
          class="card-image"
        />
        <div class="card-content">
          <div class="card-top">
            <h3 class="card-title">Sân E</h3>
          </div>
          <div class="card-bottom">
            <div class="card-live">
            <i class='fas fa-dollar-sign' style='font-size:24px'><span>giá</span></i>
            </div>
            <div class="card-price">100.000 VNĐ</div>
          </div>
        </div>
      </div>
      <div class="card">
        <img
          src="/storage/yard.png"
          alt=""
          class="card-image"
        />
        <div class="card-content">
          <div class="card-top">
            <h3 class="card-title">Sân F</h3>
          </div>
          <div class="card-bottom">
            <div class="card-live">
            <i class='fas fa-dollar-sign' style='font-size:24px'><span>giá</span></i>
            </div>
            <div class="card-price">100.000 VNĐ</div>
          </div>
        </div>
      </div>
</div>
</div>
    </div>
  </body>
</html>
@endsection