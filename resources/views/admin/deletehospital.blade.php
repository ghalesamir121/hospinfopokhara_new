
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
                     <th style="padding: 15px;">image</th>
                     <th style="padding: 15px;">Delete</th>
                 </tr>

                 @foreach ($hospital as $users)
                 <tr align="center" style="background-color: skyblue";>
                     <td>{{ $users->name }}</td>
                     <td>{{ $users->email }}</td>
                     <td>{{ $users->number }}</td>
                     <td>{{ $users->address }}</td>
                     <td>{{ $users->usertype }}</td>
                     <td>{{ $users->image }}</td>
                     <td>
                         <a class="btn btn-danger" href="/click_delete/{{ $users->id }}">Delete</a>
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
