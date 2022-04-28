
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
         <div align="center" style="padding-top: 80px;">
            @if (session()->has('message'))
            <div class="alert alert-success">
            <button type="button " class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}
            
            </div>
            @endif
             <table>
                 <tr style="background-color: black;">
                     <th style="padding: 15px;">Doctor Name</th>
                     <th style="padding: 15px;">phone</th>
                     <th style="padding: 15px;">speciality</th>
                     <th style="padding: 15px;">work</th>
                     <th style="padding: 15px;">image</th>
                     <th style="padding: 15px;">status</th>
                     <th style="padding: 15px;">Delete</th>
                 </tr>

                 @foreach ($data as $doctors)
                 <tr align="center" style="background-color: skyblue";>
                     <td>{{ $doctors->name }}</td>
                     <td>{{ $doctors->phone }}</td>
                     <td>{{ $doctors->speciality }}</td>
                     <td>{{ $doctors->work }}</td>
                     <td>{{ $doctors->image }}</td>
                     <td>{{ $doctors->status }}</td>
                     <td>
                         <a class="btn btn-danger" href="/delete/{{ $doctors->id }}">Delete</a>
                     </td>
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
