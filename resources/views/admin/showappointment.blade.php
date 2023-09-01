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
            <div class="container" align="center" style="padding-top:100px">
            <h1 style="font-size:30px; padding:10px">Your Appointment</h1>
                <div>
                    <table>
                        <tr style="background-color:orange">
                            <th  style="padding-left:10px ">Customer Name</th>
                            <th  style="padding-left:30px ">Email</th>
                            <th  style="padding-left:30px ">Phone</th>
                            <th  style="padding-left:30px ">Doctor Name</th>
                            <th  style="padding-left:30px ">Date</th>
                            <th  style="padding-left:30px ">Message</th>
                            <th  style="padding-left:30px; " ">Status</th>
                            <th  style="padding-left:30px; " ">Accept</th>
                            <th  style="padding-left:30px; padding-right:10px" ">Reject</th>
                        </tr>

                        @foreach($data as $appoint)
                        <tr >
                            <td  style="padding-left:10px ">{{$appoint->name}}</td>
                            <td  style="padding-left:20px ">{{$appoint->email}}</td>
                            <td  style="padding-left:20px ">{{$appoint->number}}</td>
                            <td  style="padding-left:20px ">{{$appoint->department}}</td>
                            <td  style="padding-left:20px ">{{$appoint->date}}</td>
                            <td  style="padding-left:20px ">{{$appoint->message}}</td>
                            <td  style="padding-left:20px; padding-right:10px" ">{{$appoint->status}}</th>
                            <td >
                                <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                            </td>
                            <td >
                                <a class="btn btn-danger" href="{{url('cancaled',$appoint->id)}}">Canceled</a>
                        </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div
        </div>

     
    <!-- container-scroller -->
    @include('admin.script')
  </body>