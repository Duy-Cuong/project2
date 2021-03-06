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
  padding: 20px;
}
.cards {
    width: 50%;
  /* --spacing: 25px;
  --columns: 2;
  display: flex;
  flex-wrap: wrap;
  margin-left: calc(-1 * var(--spacing)); */
}

.card {
  border-radius: 20px;
  overflow: hidden;
  background-color: white;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  /* width: calc(calc(40% / var(--columns)) - var(--spacing));
  margin-left: var(--spacing);
  margin-bottom: var(--spacing); */
  margin-right: 25px;
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
}
.container{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
.left{
    width: 50%;;
    
}
  </style>
  <body>
    <div class="container">
    <div class="left">c?????ng</div>
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
                    <h3 class="card-title">S??n A</h3>
                </div>
                <div class="card-bottom">
                    <div class="card-live">
                        <i class='fas fa-dollar-sign' style='font-size:24px'><span>gi??</span></i>
                    </div>
                    <div class="card-price">100.000 VN??</div>
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
                <h3 class="card-title">S??n B</h3>
            </div>
            <div class="card-bottom">
                <div class="card-live">
                <i class='fas fa-dollar-sign' style='font-size:24px'><span>gi??</span></i>
                </div>
                <div class="card-price">100.000 VN??</div>
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
                <h3 class="card-title">S??n C</h3>
            </div>
            <div class="card-bottom">
                <div class="card-live">
                <i class='fas fa-dollar-sign' style='font-size:24px'><span>gi??</span></i>
                </div>
                <div class="card-price">100.000 VN??</div>
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
                <h3 class="card-title">S??n D</h3>
            </div>
            <div class="card-bottom">
                <div class="card-live">
                <i class='fas fa-dollar-sign' style='font-size:24px'><span>gi??</span></i>
                </div>
                <div class="card-price">100.000 VN??</div>
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
            <h3 class="card-title">S??n E</h3>
          </div>
          <div class="card-bottom">
            <div class="card-live">
             <i class='fas fa-dollar-sign' style='font-size:24px'><span>gi??</span></i>
            </div>
            <div class="card-price">100.000 VN??</div>
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
            <h3 class="card-title">S??n F</h3>
          </div>
          <div class="card-bottom">
            <div class="card-live">
            <i class='fas fa-dollar-sign' style='font-size:24px'><span>gi??</span></i>
            </div>
            <div class="card-price">100.000 VN??</div>
          </div>
        </div>
      </div>
</div>
</div>
    </div>
  </body>
</html>