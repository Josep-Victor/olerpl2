    <div class="kolom-satu">        
        <div class="row mb-4 ">
                <div class="col">
                  <a href="{{ route ('hari1') }}">
                  <div class="card img-fluid" >
                  <img class="card-img-top day-preview" src="{{ asset('img/push-ups.jpg') }}" alt="card image" style="width: 100%; height: 100%; ">
                    <div class="card-img-overlay">
                        <p class="card-text text-center kalender-1-card-text">{{ $hari1 }}</p>
                    </div>
                  </div>
                  </a>
                </div>
              <div class="col">
                <a href="{{ route ('hari2') }}">
                  <div class="card img-fluid" >
                  <img class="card-img-top day-preview" src="{{ asset('img/sit-up.jpg') }}" alt="card image" style="width: 100%; height: 100%; ">
                    <div class="card-img-overlay">
                        <p class="card-text text-center kalender-1-card-text">{{ $hari2 }}</p>
                    </div>
                  </div>
                </a>
              </div>
            <div class="col">
              <a href="{{ route ('hari3') }}">
                  <div class="card img-fluid" >
                  <img class="card-img-top day-preview" src="{{ asset('img/squat.jpg') }}" alt="card image" style="width: 100%; height: 100%; ">
                    <div class="card-img-overlay">
                        <p class="card-text text-center kalender-1-card-text">{{ $hari3 }}</p>
                    </div>
                  </div>
              </a>
            </div>
            <div class="col">
              <a href="{{ route ('hari4') }}">
                  <div class="card img-fluid" >
                  <img class="card-img-top day-preview" src="{{ asset('img/Star Jump.jpg') }}" alt="card image" style="width: 100%; height: 100%; ">
                    <div class="card-img-overlay">
                        <p class="card-text text-center kalender-1-card-text">{{ $hari4 }}</p>
                    </div>
                  </div>
              </a>
            </div>
            <div class="col">
              <a href="{{ route ('hari5') }}">
                <div class="card img-fluid" >
                <img class="card-img-top day-preview" src="{{ asset('img/cobra stretch.jpg') }}" alt="card image" style="width: 100%; height: 100%; ">
                  <div class="card-img-overlay">
                      <p class="card-text text-center kalender-1-card-text">{{ $hari5 }}</p>
                  </div>
                </div>
              </a>
            </div>
        </div>
    </div>