
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
    @include('admin.css')
  </head>
  <body>
     <div class="container-scroller">
      @include('admin.sidebar')
@include('admin.navbar')

<div class="container-fluid page-body-wrapper">
<div class="container" align="left" style="padding-top:100px">

    
@if (session()->has('message'))
<div class="alert alert-success">
<button type="button " class="close" data-dismiss="alert">x</button>
{{ session()->get('message') }}

</div>
    
@endif

 <form action="{{ url('register_hospital') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <div style="padding: 10px;"> 
         <label>Hospital Name</label>
         <input type="text" style="color:black;" name="name" placeholder="Write Hospital Name" required="">
     </div>

     <div style="padding: 10px;"> 
        <label>Hospital Email</label>
        <input type="text" style="color:black;" name="email" placeholder="Write Hospital Email" required="">
    </div>

        <div style="padding: 10px;" > 
            <label>Hospital number</label>
            <input type="number" style="color:black;" name="number" placeholder="Write Hospital phone number" required="">
        </div>
        
        <div style="padding: 10px;" > 
          <label>Hospital Address</label>
          <input type="text" style="color:black;" name="address" placeholder="Write Hospital Address " required="">
      </div>
  
      <div style="padding: 10px;" > 
        <label>Hospital Password</label>
        <input type="text" style="color:black;" name="password" placeholder="Write Hospital Password" required="">
    </div>
    
        <div style="padding: 10px;"> 
            <label>Hospital Image</label>
          <input type="file" name="file" required="" >
        </div>

        <div style="padding: 10px;"> 
          <input type="submit" class="btn btn-success" >
        </div>
    
 </form>

</div>
</div> 
    @inculde('admin.script')
   
  </body>
</html>