

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

        @include('admin.navbar')
       <!--  -->
     
        <!-- partial:partials/_navbar.html -->
        
        @include('admin.navheadd')
        <!-- partial -->

        <!-- main-panel -->

        @include('admin.mainPannel')
        <!-- main-panel ends -->


     
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>