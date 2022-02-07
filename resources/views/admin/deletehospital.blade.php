
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
             <table>
                 <tr style="background-color: black;">
                     <th style="padding: 15px;">Name</th>
                     <th style="padding: 15px;">email</th>
                     <th style="padding: 15px;">number</th>
                     <th style="padding: 15px;">address</th>
                     <th style="padding: 15px;">usertype</th>
                     <th style="padding: 15px;">password</th>
                     <th style="padding: 15px;">image</th>
                     <th style="padding: 15px;">Delete</th>
                 </tr>

                 @foreach ($hospital as $admins)
                 <tr align="center" style="background-color: skyblue";>
                     <td>{{ $admins->name }}</td>
                     <td>{{ $admins->email }}</td>
                     <td>{{ $admins->number }}</td>
                     <td>{{ $admins->address }}</td>
                     <td>{{ $admins->usertype }}</td>
                     <td>{{ $admins->password }}</td>
                     <td>{{ $admins->image }}</td>
                     <td>
                         <a class="btn btn-danger" href="/click_delete/{{ $admins->id }}">Delete</a>
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
