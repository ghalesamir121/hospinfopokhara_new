
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

 <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <div style="padding: 10px;"> 
         <label>Doctor Name</label>
         <input type="text" style="color:black;" name="name" placeholder="Write Doctor Name" required="">
     </div>

     <div style="padding: 10px;"> 
        <label>Doctor Phone</label>
        <input type="number" style="color:black;" name="number" placeholder="Enter Doctor phone number" pattern="[0-9]{10}" title="Please Enter 10 Digit" required="">
    </div>

    <div style="padding: 10px;" > 
        <label>Doctor speciality</label>
        <select name="speciality" style="color: black" required="">
            <option value="">--select--</option>
            <option value="Eye">Eye</option>
            <option value="Skin">Skin</option>
            <option value="Nose">Nose</option>
            <option value="Heart">Heart</option>
        </select>
    </div>
        <div style="padding: 10px;" > 
            <label>Doctor work</label>
            <input type="text" style="color:black;" name="hospital" placeholder="Write Hospital Name" required="">
        </div>
    
        <div style="padding: 10px;"> 
            <label>Doctor Image</label>
          <input type="file" name="file" required="" >
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