
<!DOCTYPE html>
<html lang="en">
  <head>
      <style type="text/css">
      label{
          display: inline-block;
          width: 150px;
      }
      </style>
    <!-- Required meta tags -->
    @include('subadmin.css')
  </head>
  <body>
     <div class="container-scroller">
      @include('subadmin.sidebar')
@include('subadmin.navbar')

<div class="container-fluid page-body-wrapper">
<div class="container" align="left" style="padding-top:100px">

    
@if (session()->has('message'))
<div class="alert alert-success">
<button type="button " class="close" data-dismiss="alert">x</button>
{{ session()->get('message') }}

</div>
    
@endif

 <form action="{{ url('add_bed') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <div style="padding: 10px;"> 
        <label>Total Bed:</label>
        <input type="number" style="color:black;" name="totalbed" placeholder="Enter Total Bed" required="">
    </div>
    <div style="padding: 10px;"> 
        <label>Available Bed:</label>
        <input type="number" style="color:black;" name="availablebed" placeholder="Enter Available Bed" required="">
    </div>
    <div style="padding: 10px;"> 
        <label>Total ICU:</label>
        <input type="number" style="color:black;" name="totalicu" placeholder="Enter Total ICU" required="">
    </div>
    <div style="padding: 10px;"> 
        <label>Available ICU:</label>
        <input type="number" style="color:black;" name="availableicu" placeholder="Enter Available ICU" required="">
    </div>
    
        <div style="padding: 10px;"> 
          <input type="submit" class="btn btn-success" >
        </div>
    
 </form>

</div>
</div> 
    @inculde('subadmin.script')
   
  </body>
</html>