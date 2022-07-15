<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>@yield('title')</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   </head>
   <body>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <a class="navbar-brand" href="{{ route('home') }}">Home</a>
           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                   <a class="nav-item nav-link" href="{{ route('employees.index') }}">Employee</a>
               </div>
           </div>
           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                   <a class="nav-item nav-link" href="{{ route('orders.index') }}">Orders</a>
               </div>
           </div>
           </div>
           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                   <a class="nav-item nav-link" href="{{ route('products.index') }}">Products</a>
               </div>
           </div>
           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                   <a class="nav-item nav-link" href="{{ route('product-consignments.index') }}">
                    Product Consignment</a>
               </div>
           </div>
           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                   <a class="nav-item nav-link" href="{{ route('farms.index') }}">Farms</a>
               </div>
           </div>
       </nav>
      @yield('content')
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
   </body>
</html>
