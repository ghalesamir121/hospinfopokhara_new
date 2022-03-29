
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
      label{
          display: inline-block;
          width: 150px;
      }
      </style>
    @include('subadmin.css')
  </head>
  <body>
     <div class="container-scroller">
      @include('subadmin.sidebar')
      @include('subadmin.navbar')
     <div class="container-fluid page-body-wrapper">
         <div align="center" style="padding-top: 80px;">
          @if (session()->has('message'))
<div class="alert alert-success">
<button type="button " class="close" data-dismiss="alert">x</button>
{{ session()->get('message') }}

</div>

@endif
       <form action="{{ url('edit',$value->id) }}" method="POST" enctype="multipart/form-data">
        @csrf              
  <div style="padding: 10px;">
      <label>Total Bed:</label>
      <input type="number" style="color:black;" name="totalbed" value="{{  $value->total_bed}}">
  </div>
  <div style="padding: 10px;">
      <label>Available Bed:</label>
      <input type="number" style="color:black;" name="availablebed" value="{{  $value->available_bed}}">
  </div>

  <div style="padding: 10px;">
      <label>Total ICU:</label>
      <input type="number" style="color:black;" name="totalicu" value="{{  $value->total_icu}}">
  </div>

  <div style="padding: 10px;">
      <label>Available ICU:</label>
      <input type="number" style="color:black;" name="availableicu" value="{{  $value->available_icu}}">
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
