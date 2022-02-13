
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
     <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->

      <!-- partial -->
      @include('admin.sidebar')
@include('admin.navbar')
        <!-- partial -->
       
     <div class="container-fluid page-body-wrapper">
    <div class="container" align="left" style="padding-top:50px">
        @if (session()->has('message'))
        <div class="alert alert-success">
        <button type="button " class="close" data-dismiss="alert">x</button>
        {{ session()->get('message') }}
        
        </div>
        @endif
         {{-- <div align="center" style="padding-top: 80px;"> --}}
             <table>
                 <tr style="background-color: black;">
                     <th style="padding: 15px;">Name</th>
                     <th style="padding: 15px;">Number</th>
                     <th style="padding: 15px;">Speciality</th>
                     <th style="padding: 15px;">Work</th>
                     <th style="padding: 15px;">Image</th>
                     <th style="padding: 15px;">Status</th>
                     <th style="padding: 15px;">Action</th>
                 </tr>

                 @foreach ($doctor as $doctors)
                 <tr align="center" style="background-color: skyblue";>
                     <td>{{ $doctors->name }}</td>
                     <td>{{ $doctors->phone }}</td>
                     <td>{{ $doctors->speciality }}</td>
                     <td>{{ $doctors->work }}</td>
                     <td>{{ $doctors->image }}</td>
                     <td>@if($doctors->status==0)Inactive @else Active @endif<td>
                      <td><a href="{{ route('status',['id'=>$doctors->id]) }}">@if($doctors->status==1)Inactive @else Active @endif</a></td> 
                 </tr>
                 @endforeach
             </table>
         </div>


     </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
