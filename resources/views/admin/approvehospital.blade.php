
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
                     <th style="padding: 15px;">Email</th>
                     <th style="padding: 15px;">Number</th>
                     <th style="padding: 15px;">Address</th>
                     <th style="padding: 15px;">Image</th>
                     <th style="padding: 15px;">Status</th>
                     <th style="padding: 15px;">Action</th>
                 </tr>

                 @foreach ($hospital as $users)
                 <tr align="center" style="background-color: skyblue";>
                     <td>{{ $users->name }}</td>
                     <td>{{ $users->email }}</td>
                     <td>{{ $users->number }}</td>
                     <td>{{ $users->address }}</td>
                     <td>{{ $users->image }}</td>
                     {{-- <td>@if($users->status==0)Inactive @else Active @endif<td>
                     <td><a href="{{ route('status',['id'=>$users->id]) }}">@if($users->status==1)Inactive @else Active @endif</a></td>  --}}
                     <td>@if($users->usertype==0)Inactive @else Active @endif<td>
                      <td><a href="{{ route('usertype',['id'=>$users->id]) }}">@if($users->usertype==1)Inactive @else Active @endif</a></td> 
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
