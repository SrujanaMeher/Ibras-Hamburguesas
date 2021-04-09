@php
            $data=DB::select('SELECT * FROM items');
          //echo count($data);  
//for ($x = 0; $x <= count($data)-1; $x++) {

//$a=array();

   // foreach ($data[$x] as $key => $val) {
            //echo "$val";
      //      array_push($a,$val);
      //     }
      //     echo $a[0] . "--" . $a[1]. "--" . $a[2] . "/n";
//}
         
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <title>Ibras</title>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
  <link rel="stylesheet" href="{{ asset('css/ibras.css') }}">
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
    var taxRate = 0.05;
    var shippingRate = 15.00;
    var fadeTime = 300;


    $('.product-quantity input').change(function() {
      updateQuantity(this);
    });

    $('.product-removal button').click(function() {
      removeItem(this);
    });


    /* Recalculate cart */
    function recalculateCart() {
      var subtotal = 0;

      /* Sum up row totals */
      $('.product').each(function() {
        subtotal += parseFloat($(this).children('.product-line-price').text());
      });

      /* Calculate totals */
      var tax = subtotal * taxRate;
      var shipping = (subtotal > 0 ? shippingRate : 0);
      var total = subtotal + tax + shipping;

      /* Update totals display */
      $('.totals-value').fadeOut(fadeTime, function() {
        $('#cart-subtotal').html(subtotal.toFixed(2));
        $('#cart-tax').html(tax.toFixed(2));
        $('#cart-shipping').html(shipping.toFixed(2));
        $('#cart-total').html(total.toFixed(2));
        if (total == 0) {
          $('.checkout').fadeOut(fadeTime);
        } else {
          $('.checkout').fadeIn(fadeTime);
        }
        $('.totals-value').fadeIn(fadeTime);
      });
    }


    /* Update quantity */
    function updateQuantity(quantityInput) {
      /* Calculate line price */
      var productRow = $(quantityInput).parent().parent();
      var price = parseFloat(productRow.children('.product-price').text());
      var quantity = $(quantityInput).val();
      var linePrice = price * quantity;

      /* Update line price display and recalc cart totals */
      productRow.children('.product-line-price').each(function() {
        $(this).fadeOut(fadeTime, function() {
          $(this).text(linePrice.toFixed(2));
          recalculateCart();
          $(this).fadeIn(fadeTime);
        });
      });
    }


    /* Remove item from cart */
    function removeItem(removeButton) {
      /* Remove row from DOM and recalc cart total */
      var productRow = $(removeButton).parent().parent();
      productRow.slideUp(fadeTime, function() {
        productRow.remove();
        recalculateCart();
      });
    }
  </script>
</head>

<body id="user-page-background">
  <div class="image-shader-main-user">
    <!-- <div class="image-shader-user zig-zag-bottom-user">
      </div> -->
    <div class="menu-ibras-user">
      <ul>
        <li><a>Welcome, {{ session()->get('uname') }}</a></li>

        <li><a href="logout.php" id='active_Link'>LOGOUT</a></li>

      </ul>
    </div>
  </div>




  <body id="user-page-background">
    <div class="image-shader-main-user">
      <!-- <div class="image-shader-user zig-zag-bottom-user">
        </div> -->
      <div class="menu-ibras-user">
        <ul>
            <li><a>Welcome, {{ session()->get('uname') }}</a></li>

          <li><a href="logout.php" id='active_Link'>LOGOUT</a></li>

        </ul>
      </div>

    </div>
    <br><br><br>
    <div class="tab">
      <button class="tablinks" onclick="openTab(event, 'Favourites')" id="defaultOpen">Favourites</button>
      <button class="tablinks" onclick="openTab(event, 'MyOrders')">My Orders</button>
      <button class="tablinks" onclick="openTab(event, 'Cart')">Cart</button>
    </div>

    <div id="Favourites" class="tabcontent">
      <h2 style="color:red">Favourites</h2>

      <div class="column-labels">
        <label class="product-image">Image</label>
        <label class="product-details">Product</label>
        <label class="product-quantity">Quantity</label>
        <label class="product-line-price">Action</label>
      </div>

  
@php
            $data=DB::select('SELECT * FROM items');
         // echo count($data);  
for ($x = 0; $x <= count($data)-1; $x++) {

$a=array();

    foreach ($data[$x] as $key => $val) {
            //echo "$val";
            array_push($a,$val);
           }

          
      echo "<div class='list-type2'><ol><li><a href='#'><div class='product'><div class='product-image'>";
      echo "<img src='images/".$a[7]."'></div>";
      echo "<div class='product-details'><div class='product-title'>".$a[3]."</div></div>";
      echo "<div class='product-price'>12.99</div>";
      echo "<div class='product-quantity'><input type='number' value='".$a[2]."'></div>";
      echo "<div class='product-removal'><button class='remove-product'>Re-Order</button></div>";
      echo "</div></a></li></ol></div>";
    }
    @endphp



    </div>

    <div id="MyOrders" class="tabcontent">
   <div class="shopping-cart">
    <main id="main-tabbed">
      <input id="radio1" type="radio" name="css-tabs" checked>
     <!--  <input id="radio2" type="radio" name="css-tabs">
      <input id="radio3" type="radio" name="css-tabs"> -->
      <input id="radio4" type="radio" name="css-tabs">
      <div id="tabs-user">
        <label id="tab1-user" for="radio1">Cart</label>
       <!--  <label id="tab2-user" for="radio2">Favourites</label>
        <label id="tab3-user" for="radio3">My Account</label> -->
        <label id="tab4-user" for="radio4">Past Orders</label>
      </div>



      <div id="content-user">
        <section id="content1-user">

          <div class="column-labels">
            <label class="product-image">Image</label>
            <label class="product-details">Product</label>
            <label class="product-price">Price</label>
            <label class="product-quantity">Quantity</label>
            <label class="product-removal">Remove</label>
            <label class="product-line-price">Total</label>
          </div>




@php
            $data=DB::select('SELECT * FROM items');
         // echo count($data);  
for ($x = 0; $x <= count($data)-1; $x++) {

$a=array();

    foreach ($data[$x] as $key => $val) {
            //echo "$val";
            array_push($a,$val);
           }

          
      echo "<div class='product'><div class='product-image'>";
      echo "<img src='images/".$a[7]."' alt='hamburguer'></div>";
      echo "<div class='product-details'><div class='product-title'>$a[3]</div>";
      echo "<p class='product-description'>$a[4] </div>";
      echo "<div class='product-price'>$a[0]</div>";
      echo "<div class='product-quantity'><input type='number' value='".$a[2]."' min='1'></div>";
      echo "<div class='product-removal'><button class='remove-product'>Remove</button></div>";
      echo "<div class='product-line-price'>$a[4]</div></div>";
    }
    @endphp




          <!-- <div class="product">
            <div class="product-image">
              <img src="images/burguer2.png" alt="hamburguer">
            </div>
            <div class="product-details">
              <div class="product-title">Carne Hamburguesa</div>
              <p class="product-description">Este plato, está cocinado con una hamburguesa. Por regla general se consume, principalmente, durante Todo el año, y se suele servir a los comensales como Primer plato.</p>
            </div>
            <div class="product-price">45.99</div>
            <div class="product-quantity">
              <input type="number" value="1" min="1">
            </div>
            <div class="product-removal">
              <button class="remove-product">
                Remove
              </button>
            </div>
            <div class="product-line-price">45.99</div>
          </div> -->

          <div class="totals">
            <div class="totals-item">
              <label>Subtotal</label>
              <div class="totals-value" id="cart-subtotal">71.97</div>
            </div>
            <div class="totals-item">
              <label>Tax (5%)</label>
              <div class="totals-value" id="cart-tax">3.60</div>
            </div>
            <div class="totals-item">
              <label>Shipping</label>
              <div class="totals-value" id="cart-shipping">15.00</div>
            </div>
            <div class="totals-item totals-item-total">
              <label>Grand Total</label>
              <div class="totals-value" id="cart-total">90.57</div>
            </div>
          </div>

          <button class="checkout">Checkout</button>


      </section>

      <section id="content4-user">
        <div class="column-labels">
          <label class="product-image">Image</label>
          <label class="product-details">Product</label>
          <label class="product-price">Price</label>
          <label class="product-quantity">Quantity</label>
          <label class="product-removal">Re-Order</label>
          <label class="product-line-price">Total</label>
        </div>

        <div class="product">
          <div class="product-image">
            <img src="images/burguer3.png" alt="hamburguer">
          </div>
          <div class="product-details">
            <div class="product-title">Pollo Hamburguesa</div>

          </div>
          <div class="product-price">12.99</div>
          <div class="product-quantity">
            <input type="number" value="2" min="1">
          </div>
          <div class="product-removal">
            <button class="remove-product">
              Re-Order
            </button>
          </div>
          <div class="product-line-price"><button class="reorder-product">
            Print Invoice
          </button></div>
        </div>

        <div class="product">
          <div class="product-image">
            <img src="images/burguer2.png" alt="hamburguer">
          </div>
          <div class="product-details">
            <div class="product-title">Mixita Hamburguesa</div>

          </div>
          <div class="product-price">12.99</div>
          <div class="product-quantity">
            <input type="number" value="2" min="1">
          </div>
          <div class="product-removal">
            <button class="remove-product">
              Re-Order
            </button>
          </div>
          <div class="product-line-price"><button class="reorder-product">
            Print Invoice
          </button></div>
        </div>
        <div class="product">
          <div class="product-image">
            <img src="images/burguer1.png" alt="hamburguer">
          </div>
          <div class="product-details">
            <div class="product-title">Carne Hamburguesa</div>

          </div>
          <div class="product-price">12.99</div>
          <div class="product-quantity">
            <input type="number" value="2" min="1">
          </div>
          <div class="product-removal">
            <button class="remove-product">
              Re-Order
            </button>
          </div>
          <div class="product-line-price"><button class="reorder-product">
            Print Invoice
          </button></div>
        </div>
        <div class="product">
          <div class="product-image">
            <img src="images/burguer4.png" alt="hamburguer">
          </div>
          <div class="product-details">
            <div class="product-title">Pollo Hamburguesa</div>

          </div>
          <div class="product-price">12.99</div>
          <div class="product-quantity">
            <input type="number" value="2" min="1">
          </div>
          <div class="product-removal">
            <button class="remove-product">
              Re-Order
            </button>
          </div>
          <div class="product-line-price"><button class="reorder-product">
            Print Invoice
          </button></div>
        </div>

        </div>


    <div id="OrderStatistics" class="tabcontent">
      <h3 style="color:red">Order Statistics</h3>
      <div id="chart_div"></div>
    </div>




    <script type="text/javascript">
    function openTab(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>

  </body>


 

  </section>
  <section id="content3-user">

  </section>

  <section id="content2-user">
    <div class="list-type2">
    <ol>
    <li><a href="#">        <div class="product">
              <div class="product-image">
                <img src="images/burguer2.png" alt="hamburguer">
              </div>
              <div class="product-details">
                <div class="product-title">Mixita Hamburguesa</div>

              </div>
              <div class="product-price">12.99</div>
              <div class="product-quantity">
                <input type="number" value="2" min="1">
              </div>

              <div class="product-line-price"><button class="reorder-product">
                Reorder Product
              </button></div>
            </div></a></li>
    <li><a href="#"><div class="product">
              <div class="product-image">
                <img src="images/burguer1.png" alt="hamburguer">
              </div>
              <div class="product-details">
                <div class="product-title">Mixita Hamburguesa</div>

              </div>
              <div class="product-price">12.99</div>
              <div class="product-quantity">
                <input type="number" value="2" min="1">
              </div>

              <div class="product-line-price"><button class="reorder-product">
                Reorder Product
              </button></div>
            </div></a></li>
    <li><a href="#"><div class="product">
              <div class="product-image">
                <img src="images/burguer4.png" alt="hamburguer">
              </div>
              <div class="product-details">
                <div class="product-title">Mixita Hamburguesa</div>
              </div>
              <div class="product-price">12.99</div>
              <div class="product-quantity">
                <input type="number" value="2" min="1">
              </div>

              <div class="product-line-price"><button class="reorder-product">
                Reorder Product
              </button></div>
            </div></a></li>
    </ol>
    </div>
  </section>
  </div>



  </div> 
  </main>
  </div>

  <!-- End of Tabbed View for USER PAGE -->
</body>
</html>
