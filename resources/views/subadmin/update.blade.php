
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('subadmin.css')
  </head>
  <body>
     <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->

      <!-- partial -->
      @include('subadmin.sidebar')
@include('subadmin.navbar')
        <!-- partial -->
       
     <div class="container-fluid page-body-wrapper">
         <div align="center" style="padding-top: 80px;">
             <table>
                 <tr style="background-color: black;">
                    <th style="padding: 15px;">Hospital</th>
                     <th style="padding: 15px;">Total Bed</th>
                     <th style="padding: 15px;">Available Bed</th>
                     <th style="padding: 15px;">Total ICU</th>
                     <th style="padding: 15px;">Available ICU</th>
                     <th style="padding: 15px;">Update</th>
                 </tr>
                 @foreach ($data as $add_bed)
                 <tr align="center" style="background-color: skyblue";>
                    <td>{{ $add_bed->hospital }}</td>
                     <td>{{ $add_bed->total_bed }}</td>
                     <td>{{ $add_bed->available_bed }}</td>
                     <td>{{ $add_bed->total_icu }}</td>
                     <td>{{ $add_bed->available_icu }}</td>
                     <td>
                         <a class="btn btn-primary" href="/click_update/{{ $add_bed->id }}">Update</a>
                     </td>
                 </tr>
                 @endforeach
                
             </table>
         </div>


     </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  
    @include('subadmin.script')
    <!-- End custom js for this page -->
  </body>
</html>
