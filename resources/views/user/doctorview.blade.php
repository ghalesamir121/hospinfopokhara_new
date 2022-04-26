<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp" align="center" style="font-size:4vw;color:#000000">Popular Doctors in Nepal</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <br>
        <br>



        @foreach ($doctor as $doctors )

        <div class="item" align="center">
          <div class="card-doctor">
            <div class="header">
              <img height="300 px" src="doctorimage/{{ $doctors->image }}" alt="">
            </div>
            <br>
            <div class="body" align="center">
              <span class="text-sm text-grey" style="font-size:2.5vw;color: lightgreen";>Name: Dr  {{ $doctors->name }}</span><br>
              <span class="text-sm text-grey" style="font-size:2vw">Phone: {{ $doctors->phone }}</span><br>
              <span class="text-sm text-grey" style="font-size:2vw">Speciality: {{$doctors->speciality }}</span><br>
              <span class="text-sm text-grey" style="font-size:2vw">Work: {{ $doctors->work }}</span>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>

        @endforeach
    </div>
      </div>
    </div>
  </div>

  <script src="../public/assets/css/css1.css"></script>




