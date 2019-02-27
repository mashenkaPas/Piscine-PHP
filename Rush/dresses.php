<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content=width=device-width, initial-scale=1">
	<link rel="stylesheet" href="top.css">
	<title>online_shop</title>
</head>
<body style="margin: 0;">
  <div class="main">
   <div class="wrapper">
    <div class="header" >
      <img class="mySlides" src="https://www.oui.com/neos/image/12/046936fe-dca9-4d71-8800-38522d7f8bac/1543922639"
                     style="width:100%" height="100%">
      <img class="mySlides" src="https://www.oui.com/neos/image/12/afeb23c3-48f5-4797-a39a-fdb3aba7cc47/1517577668"
                    style="width:100%" height=" 100%">
      <img class="mySlides" src="https://scontent-lhr3-1.cdninstagram.com/vp/57cd1aafbad06898d540160b622b000b/5C9C241E/t51.2885-15/e35/45799030_311708076349844_2746069087543877031_n.jpg?se=7&ig_cache_key=MTkyOTQ5MDc0MTYzNDAyMjA2MA%3D%3D.2"
                     style="width:100%" height="100%">
    </div>
    <div class="main-content">
      <div class="sidebar">
        <div class="sidebar-content">
          <div class="dropdown">
            <button class="dropbtn menu-button">ALL CATEGORIES</button>
            <div class="dropdown-content">
              <a href="swim.php">Swim</a>
              <a href="dresses.php">Dresses </a>
              <a href="t-shirts.php">T-shirts</a>
              <a href="coats.php">Coats</a>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class ="content-menu">
          <div class = "menu" >
            <div class="button-div">
              <a href="./index.php">
                <button class="menu-button">HOME</button>
              </a>
            </div>
            <div class="button-div">
              <a href="./cart.php">
                <button class="menu-button">CART</button>
              </a>
            </div>
            <div class="button-div">
              <button class="menu-button">ADMIN</button>
            </div>
            <div class ="log">
              <form action="create.php" method="post" >
                <div style="display:flex; justify-content: space-between;">
                  login:
                  <input type="text" name="login" value="">
                </div><br>
                <div style="display:flex; justify-content: space-between;">
                  passwd:
                  <input type="text" name="passwd" value="">
                </div><br>
                <input type="submit" value="OK" name="submit"/>
              </form>
            </div>
          </div>
          <div class="content-items" >
            <div class="content-row">
              <div class="swim">
                <p>Cost: $8</p>
                  <img class="category-img" src="./assets/dress_1.jpeg" >
                  <form action="./shop_cart.php" method="post">
                    Quantity:
                    <input type="number" name="count_dress_1"  min="1" max="100">
                    <button type="submit" name="buy" value="ok" onclick="alert('Item(s) added to the cart')">Add to Cart</button>
                  </form>
              </div>
              <div class="dresses">
                <p>Cost: $5</p>
                  <img class="category-img" src="./assets/dress_2.jpeg">
                  <form action="./shop_cart.php" method="post">
                    Quantity:
                    <input type="number" name="count_dress_2"  min="1" max="100">
                    <button type="submit" name="buy" value="ok" onclick="alert('Item(s) added to the cart')">Add to Cart</button>
                  </form>
              </div>
            </div>
            <div class="content-row">
              <div class="t-shirts">
                <p>Cost: $7</p>
                  <img class="category-img" src="./assets/dress_3.jpeg">
                  <form action="./shop_cart.php" method="post">
                    Quantity:
                    <input type="number" name="count_dress_3"  min="1" max="100">
                    <button type="submit" name="buy" value="ok" onclick="alert('Item(s) added to the cart')">Add to Cart</button>
                  </form>
              </div>
              <div class="coats">
                <p>Cost: $10</p>
                  <img class="category-img" src="./assets/dress_4.jpeg">
                  <form action="./shop_cart.php" method="post">
                    Quantity:
                    <input type="number" name="count_dress_4"  min="1" max="100">
                    <button type="submit" name="buy" value="ok" onclick="alert('Item(s) added to the cart')">Add to Cart</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
  </div>
</div>
</body>
	<script>
    // Automatic Slideshow - change image every 3 seconds
    var myIndex = 0;
    carousel();
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 3000);
    }
  </script>
</php>
