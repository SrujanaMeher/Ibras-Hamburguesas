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
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawBasic);

  function drawBasic() {

        var data = google.visualization.arrayToDataTable([
          ['City', 'Burgers Sold',],
          ['New York City, NY', 8175],
          ['Los Angeles, CA', 3792],
          ['Chicago, IL', 2695],
          ['Houston, TX', 2099],
          ['Philadelphia, PA', 1520]
        ]);

        var options = {
          title: 'Hamburguesas Sales',
          chartArea: {width: '50%'},
          hAxis: {
            title: 'Items Sold',
            minValue: 0
          },
          vAxis: {
            title: 'City'
          }
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

        chart.draw(data, options);
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
  <br><br><br>
  <div class="tab">
    <button class="tablinks" onclick="openTab(event, 'AddItems')" id="defaultOpen">Add Items</button>
    <button class="tablinks" onclick="openTab(event, 'ViewMenu')">View Menu</button>
    <button class="tablinks" onclick="openTab(event, 'OrderStatistics')">Order Statistics</button>
  </div>

  <div id="AddItems" class="tabcontent">
    <h2 style="color:red">Add Items</h2>

    <form action="{{URL::to('additems')}}" id="update-menu" method="POST" enctype="multipart/form-data">
       {{ csrf_field() }}
    <div class="row">
      <div class="col-25">
        <label for="fname">Upload Item Image</label>
      </div>
      <div class="col-75">
        <input type="file" id="image" name="image" placeholder="Item name" required/>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Item Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" placeholder="Item Name" required/>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="qty">Item Quantity</label>
      </div>
      <div class="col-75">

          <input type="number" id="qty" name="qty" min="1" max="5" required/>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Item Description</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something about the Item" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="upload" value="Add Item"/>
    </div>
    </form>
  </div>

  <div id="ViewMenu" class="tabcontent">
<h2 style="color:red">View Menu</h2>
    <div class="column-labels">
      <label class="product-image">Image</label>
      <label class="product-details">Product</label>
      <label class="product-quantity">Quantity</label>
      <!-- <label class="product-line-price">Action</label> -->
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
            echo "<img src='images/".$a[7]."'></div>";
            echo "<div class='product-details'><div class='product-title'>".$a[4]."</div></div>";
          echo "<div class='product-quantity'><input type='number' value='".$a[2]."'></div>";
         // echo "<div class='product-removal'><button class='remove-product'>Update</button></div>
          //";
          echo "</div>";

           //echo $a[0] . "--" . $a[1]. "--" . $a[2] . "/n";
}
         
@endphp



                 
          
         
 
      


      </div> 
    <!-- <div class="product">
      <div class="product-image">
        <img src='images/burguer3.png' alt='hamburguer'>
      </div>
      <div class='product-details'><div class='product-title'>Pollo Hamburguesa</div></div>
      <div class='product-price'>12.99</div>
      <div class='product-quantity'><input type='number'></div>
      <div class='product-removal'><button class='remove-product'>Re-Order</button></div>
      <div class='product-line-price'><button class='reorder-product'>Print Invoice</button></div>
    </div>
  </div> -->

  <div id="OrderStatistics" class="tabcontent">
    <h3 style="color:red">Order Statistics</h3>
    <div id="chart_div"></div>
  </div>



<!--
    <main id="main-tabbed">
      <input id="radio1" type="radio" name="css-tabs" checked>
      <input id="radio2" type="radio" name="css-tabs">
      <input id="radio3" type="radio" name="css-tabs">
      <input id="radio4" type="radio" name="css-tabs">
      <div id="tabs-admin">
        <label id="tab1-admin" for="radio1">Add Items</label>
        <label id="tab2-admin" for="radio2">Edit Menu</label>
        <label id="tab3-admin" for="radio3">Order Statistics</label>
        <label id="tab4-admin" for="radio4">Past Orders</label>
      </div>



      <div id="content-admin">
        <section id="content1-admin">
      <div class="card">

        <div class="container-admin">
  <form action="update.php" id="update-menu">
  <div class="row">
    <div class="col-25">
      <label for="fname">Upload Item Image</label>
    </div>
    <div class="col-75">
      <input type="file" id="fname" name="firstname" placeholder="Item name"/>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Item Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Item Name"/>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">Item Quantity</label>
    </div>
    <div class="col-75">

        <input type="number" id="country" name="country" min="1" max="5"/>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Item Description</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something about the Item" style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit"/>
  </div>
  </form>
</div>
      </div>

      </section>

      <section id="content4-admin">
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
        >
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

  </section>
  <section id="content3-user">

  </section>

  <section id="content2-user">
    <div class="list-type2">
    <ol>
    <li><a>        <div class="product">
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
    <li><a><div class="product">
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
    <li><a><div class="product">
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
  </main>-->
  <!-- End of Tabbed View for USER PAGE -->

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

</html>