
<!DOCTYPE html>
<html lang="en">
  
  @include('admin.css') 

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
     @include('admin.navbar')



    @include('admin.script')
  </body>
</html>