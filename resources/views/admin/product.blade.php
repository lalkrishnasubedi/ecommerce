<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ganash fashion training</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="div_center">
<h2 class="h2_font">Add Product</h2>
<form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div>
<label class="div_design">Product Title:</label>
<input  class="input_color"type="text" name="description" placeholder="write a title" required="">
</div>
<div class="div_design">
<label class="label_1">Product Description:</label>
<input  class="input_color"type="text" name="description" placeholder="write a discription" required="">
</div>
<div class="div_design">
<label>Product Price:</label>
<input  class="input_color"type="number" name="price" placeholder="write a price" required="">
</div>
<div class="div_design">
<label>Discount Price:</label>
<input  class="input_color"type="number" name="discount_price" placeholder="write a discount price">
</div>
<div class="div_design">
<label>Product Quantity:</label>
<input  class="input_color"type="number" name="quantity" placeholder="write a quqntity" required="">
</div>
<div class="div_design">
<label>Product Catagory:</label>

<select class="input_color" name="catagory" required="">
<option value="" selected="">Add A catagory here</option>

@foreach($catagories as $catagory)
    <option>{{$catagory->catagory_name}}</option>
    @endforeach
   
</select>
</div>

<div class="div_design" required="">
<label>Product Image Here:</label>
<input type="file" name="image">
</div>
<div class="div_design">

<input type="submit" value="Add Product"class="btn btn-primary">
</div>
</form>


</div>
</div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>