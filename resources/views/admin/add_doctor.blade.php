<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
        label{
            display:inline-block;

            width:200px;
        }
    </style >
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

        @include('admin.navbar')
       <!--  -->
     
        <!-- partial:partials/_navbar.html -->
        
        @include('admin.navheadd')
        <!-- partial -->
        <div class="main-panel">
            <h1>add doctor</h1>
           
           

            


            <div class="container" align="center" style="padding-top:100px">
            @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">
                        x
                    </button>

                    {{session()->get('message')}}

                </div>

                @endif


                <form action="{{('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    <div style="padding:15px">

                    @csrf
                        <label for="">Doctor Name</label>
                        <input type="text" name="name" style="color:black;" required>
                    </div>
                    <div style="padding:15px">
                        <label for="">Phone Number</label>
                        <input type="text" name="phone" style="color:black;" required>
                    </div>
                    <div style="padding:15px; ">
                        <label for="">Specialty</label>
                        <select name="Specialty" style="color:black;  width:200px" required>
                        <option value="">--Select--</option>
                        <option value="skin">skin</option>
                        <option value="kidney">kidney</option>
                        <option value="liver">liver</option>
                        <option value="cancer">cancer</option>
                        </select>
                        
                    </div>
                    <div style="padding:15px">
                        <label for="">Room No</label>
                        <input type="text" name="room" style="color:black;" required>
                    </div>
                    <div style="padding:15px">
                        <label for="">Doctor Image</label>
                        <input type="file" name="file" style="color:black;" required>
                    </div>

                    <div style="padding:15px">
                        
                        <input type="Submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>

     
    <!-- container-scroller -->
    @include('admin.script')
  </body>