<!DOCTYPE html>
<html>

<head>
  <!--<meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Timberyar|)</title>-->
  <link rel="stylesheet" href="css.css" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>
  <form action="index2.html">
    <div class="a" id="home">
      <div class="navbar">
        <img src="images/logo.png" class="logo" />
        <ul>
          <li><a href="index1.html">Home </a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contactus">Contact Us</a></li>
          <li><a href="#t&c">T&C</a></li>
          <li><a href="loginpage.php">Logout</a>
            <h4 id="h" style="color: white;"></h4>
          </li>
        </ul>
      </div>
      <div class="content">
        <h1 class="1111">Welcome To Timber Yard</h1><br />
        <h4 class="1111">
          Timber yard is a location where lumber <br />and wood-related products used in construction and/or home
          improvement projects are processed or stored.
        </h4>
        <div>
          <button type="button">
            <a href="#products" class="pro">
              <h3><span class="span1"></span>Products</h3>
            </a>
          </button>
        </div>
      </div>
    </div>
    <div class="aaaa" id="services">
      <div class="slider">
        <div class="slides">
          <input type="radio" name="radio-btn" id="radio1" />
          <input type="radio" name="radio-btn" id="radio2" />
          <input type="radio" name="radio-btn" id="radio3" />
          <input type="radio" name="radio-btn" id="radio4" />
          <div class="slide first">
            <img src="images/slide1.png" alt="" />
          </div>
          <div class="slide">
            <img src="images/slide2.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="images/slide3.png" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo.png" alt="" />
          </div>
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
          </div>
        </div>
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
        </div>
      </div>
    </div>
    <div id="products">
      <section class="product">
        <div class="product__photo">
          <div class="photo-container">
            <img src="images/Teak.jpg" alt="Teak" width="100%" height="100%" />
          </div>
        </div>
        <div class="product__info">
          <div class="title">
            <h1>Teak</h1><br>
            <span>COD: 3201</span>
          </div>

          <div class="description">
            <div class="jq1">
              <h3>BENEFITS <i class="fas fa-caret-right"></i></h3><br>
            </div>
            <div class="jq11">
              <ul>
                <li>Teak is one of the best quality wood for commercial purpose</li>
                <li>
                  Teak's oils make it useful in exposed locations, and make the timber
                  termite- and pest-resistant.
                </li>
                <li>
                  Timber cut from old teak trees was believed to be more durable
                  and harder
                </li>
              </ul>
            </div>
          </div>
          <div class="price">Rs<span> 15000/piece</span></div>
          <button class="buy--btn">No Of Pieces</button>
          <div class="wrapper">
            <div class="input-data">
              <input type="number" id="teak" min="1" max="999" />
            </div>
          </div>
        </div>
    </div>
    </section>
    <section class="product" id="">
      <div class="product__photo">
        <div class="photo-container">
          <img src="images/Silver oak.jpg" alt="Silver oak" width="100%" height="100%" />
        </div>
      </div>
      <div class="product__info">
        <div class="title">
          <h1>Silver Oak</h1><br>
          <span>COD: 3210</span>
        </div>
        <div class="price">
          <span>Rs 10000/piece</span>
        </div>

        <div class="description">
          <div class="jq2">
            <h3>BENEFITS <i class="fas fa-caret-right"></i></h3><br>
          </div>
          <div class="jq22">
            <ul>
              <li>
                Silver Oak is a fast-growing evergreen tree with a single main trunk
              </li>
              <li>
                It's timber is widely used for external window joinery, as it is
                resistant to wood rot.
              </li>
              <li>
                It has been used in the manufacture of furniture, cabinetry, and
                fences
              </li>
            </ul>
          </div>
        </div>
        <button class="buy--btn">No Of Pieces</button>
        <div class="wrapper">
          <div class="input-data">
            <input type="number" id="silver" min="1" maxlength="3" />
          </div>
        </div>
      </div>
    </section>
    <section class="product">
      <div class="product__photo">
        <div class="photo-container">
          <img src="images/Sandalwood.jpg" alt="Sandalwood" width="100%" height="100%" />
        </div>
      </div>
      <div class="product__info">
        <div class="title">
          <h1>Sandalwood</h1><br>
          <span>COD: 4599</span>
        </div>
        <div class="price">
          <span>Rs 50000/piece</span>
        </div>
        <div class="description">
          <div class="jq3">
            <h3>BENEFITS <i class="fas fa-caret-right"></i></h3><br>
          </div>
          <div class="jq33">
            <ul>
              <li>Sandalwood is the costliest wood in the world</li>
              <li>
                It is found mainly in Karnataka,India and used in herbal
                medicines,furniture,making perfumes.
              </li>
            </ul>
          </div>
        </div>
        <button class="buy--btn">No Of Pieces</button>
        <div class="wrapper">
          <div class="input-data">
            <input type="number" id="sandal" min="1" maxlength="3" />
          </div>
        </div>
      </div>
    </section>
    <section class="product">
      <div class="product__photo">
        <div class="photo-container">
          <img src="images/Pink.jpg" alt="Pink" width="100%" height="100%" />
        </div>
      </div>
      <div class="product__info">
        <div class="title">
          <h1>Pink ivory</h1><br>
          <span>COD: 3500</span>
        </div>
        <div class="price">
          <span>Rs 30000/piece</span>
        </div>
        <div class="description">
          <div class="jq4">
            <h3>BENEFITS <i class="fas fa-caret-right"></i></h3><br>
          </div>
          <div class="jq44">
            <ul>
              <li>It is used for making design formated furnitures</li>
              <li>
                It's branches are used for making delicious foods in many parts of
                Africa like Senegal,Mauritania
              </li>
              <li>It is the 2nd costliest wood in Africa</li>
            </ul>
          </div>
        </div>
        <button class="buy--btn">No Of Pieces</button>
        <div class="wrapper">
          <div class="input-data">
            <input type="number" id="pink" min="1" maxlength="3" />
          </div>
        </div>
    </section>
    <section class="product">
      <div class="product__photo">
        <div class="photo-container">
          <img src="images/Black.jpg" alt="Blackwood" width="100%" height="100%" />
        </div>
      </div>
      <div class="product__info">
        <div class="title">
          <h1>Blackwood</h1><br>
          <span>COD: 3200</span>
        </div>
        <div class="price">
          <span>Rs 38000/piece</span>
        </div>
        <div class="description">
          <div class="jq5">
            <h3>BENEFITS <i class="fas fa-caret-right"></i></h3><br>
          </div>
          <div class="jq55">
            <ul>
              <li>It is the 2nd costliest wood in the world next to Sandalwood</li>
              <li>
                It's stems are very hard and has resistance to all sorts of rain.It is
                grown only in Marshy areas wildlife
              </li>
            </ul>
          </div>
        </div>
        <button class="buy--btn">No Of Pieces</button>
        <div class="wrapper">
          <div class="input-data">
            <input type="number" id="black" min="1" maxlength="3" />
          </div>
        </div>
    </section>
    <section class="product">
      <div class="product__photo">
        <div class="photo-container">
          <img src="images/Neem.jpg" alt="Neem" width="100%" height="100%" />
        </div>
      </div>
      <div class="product__info">
        <div class="title">
          <h1>Neem</h1><br>
          <span>COD: 4900</span>
        </div>
        <div class="price">
          <span>Rs 10000/piece</span>
        </div>
        <div class="description">
          <div class="jq6">
            <h3>BENEFITS <i class="fas fa-caret-right"></i></h3><br>
          </div>
          <div class="jq66">
            <ul>
              <li>
                It is one of commonly found tree in the world.It is used in herbal
                medicine.t is found mainly in Asia
              </li>
            </ul>
          </div>
        </div>
        <button class="buy--btn">No Of Pieces</button>
        <div class="wrapper">
          <div class="input-data">
            <input type="number" id="neem" min="1" maxlength="3" />
          </div>
        </div>
    </section>
    <section class="product">
      <div class="product__photo">
        <div class="photo-container">
          <img src="images/Bamboo.jpg" alt="Bamboo" width="100%" height="100%" />
        </div>
      </div>
      <div class="product__info">
        <div class="title">
          <h1>Bamboo</h1><br>
          <span>COD: 5001</span>
        </div>
        <div class="price">
          <span>Rs 13000/piece</span>
        </div>
        <div class="description">
          <div class="jq7">
            <h3>BENEFITS <i class="fas fa-caret-right"></i></h3><br>
          </div>
          <div class="jq77">
            <ul>
              <li>One of best options with less cost for furniture is bamboo</li>
              <li>
                It is used to make utensils in East Asia and Indo-china.It was
                practised as tradition in ancient time
              </li>
            </ul>
          </div>
        </div>
        <button class="buy--btn">No Of Pieces</button>
        <div class="wrapper">
          <div class="input-data">
            <input type="number" id="bamboo" min="1" maxlength="3" />
          </div>
        </div>
    </section>
    <section class="product">
      <div class="product__photo">
        <div class="photo-container">
          <img src="images/Red cotton silk.jpg" alt="Red cotton silk" width="100%" height="100%" />
        </div>
      </div>
      <div class="product__info">
        <div class="title">
          <h1>Red cotton silk</h1><br>
          <span>COD: 1100</span>
        </div>
        <div class="price">
          <span>Rs 10000/piece</span>
        </div>
        <div class="description">
          <div class="jq8">
            <h3>BENEFITS <i class="fas fa-caret-right"></i></h3><br>
          </div>
          <div class="jq88">
            <ul>
              <li>
                It's leaves are used to make perfumes .It is used for making fences
                .It is very resistance to tarnishing
              </li>
            </ul>
            <div></div>
          </div>
          <button class="buy--btn">No Of Pieces</button>
          <div class="wrapper">
            <div class="input-data">
              <input type="number" id="red" min="1" maxlength="3" />
            </div>
    </section>
    <div class="proceedd">
      <button class="proceed" style="margin-left: 200px;"><a href="#home" class="pro"
          style="color: black;">Home</button></a>
      <input type="submit" value="Proceed" class="proceed"
        style="margin-left: 550px;border-radius: 5%;font-weight: 5000;" onclick="handle()" />
    </div>
    </div>
    <div class="tc" id="t&c">
      <h1 class="h1">Terms & Conditions</h1>
      <h3 class="h3">This agreement is between you/entity you represent and Karnataka Forest Dept. <br /> If you are
        entering into this Agreement on behalf of an entity under given T&C , you represent that you have the legal
        authority to question over.<br /> Related to the deleveries and loading formats we are not responsible.<br />
        Payments are done only through the Nationalised Banks. <br />Return of the Products are allowed only within 2
        days.<br />Dealing is limited to Karnataka state.</h3>
    </div>
    <footer class="white-section" id="contactus">
      <div class="container-fluid"></div>
      <a href="https://www.facebook.com/"><i class="social-icon fab fa-facebook-f"></i></a>
      <a href="https://www.twitter.com/" color="white"><i class="social-icon fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/"><i class="social-icon fab fa-instagram"></i></a>
      <a href="https://www.gmail.com/"><i class="social-icon fas fa-envelope"></i></a>
      <p>© Copyright 2021</p>
      </div>
    </footer>
  </form>
  <script src="js1.js"></script>
</body>

</html>