
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('subadmin.css')
  </head>
  <body>
     <div class="container-scroller">
      @include('subadmin.sidebar')
      @include('subadmin.navbar')
     <div class="container-fluid page-body-wrapper">
         <div align="center" style="padding-top: 80px;">
       <form action="">              
  <div style="padding: 10px;">
      <label>Total Bed:</label>
      <input type="number" style="color:black;" name="totalbed">
  </div>
  <div style="padding: 10px;">
      <label>Available Bed:</label>
      <input type="number" style="color:black;" name="availablebed">
  </div>

  <div style="padding: 10px;">
      <label>Total ICU:</label>
      <input type="number" style="color:black;" name="totalicu">
  </div>

  <div style="padding: 10px;">
      <label>Available ICU:</label>
      <input type="number" style="color:black;" name="availableicu" value="{{  $data->available_icu}}">
  </div>
      <div style="padding: 10px;">
        <input type="Submit" class="btn btn-success" >
      </div>

             </form>
         </div>
     </div>
    @include('subadmin.script')
  </body>
</html>
