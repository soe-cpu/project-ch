@extends('frontendtemplate')
@section('content')

  {{-- main --}}
    <section class="main">
      <div class="container">
        <div class="row">
          <div class="col-md-8 py-1 car">
            <div class="row">
              <div class="col-md-12 ">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="{{asset('frontend_asset/image/s.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('frontend_asset/image/s.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('frontend_asset/image/s.jpg')}}" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>          
            </div>            
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12 py-1">
                <div class="bg-success">
                  <h3 class="py-3 text-center text-light">
                    ဓမ္မသီချင်းများ
                  </h3>
                </div>
                <ul class="list-unstyled side bg-light">
                  @foreach($vid as $row)
                  <li class="media py-1">
                    <img class="mr-3" src="{{$row->photo}}" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1">{{$row->title}}</h5>
                      <p style="width: 200px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{$row->description}}</p>
                    </div>
                  </li>
                  @endforeach
                </ul>
            </div>
          </div>
        </div>
      </div>
      <hr>  
      <div class="row mx-1 bg-success py-2">
        <div class="col-md-12">
          <h2 class="text-light">ဓမ္မဗီဒီယိုများ</h2>
        </div>          
      </div>
      <div class="row my-2">
        @foreach($blog as $row)
        <div class="col-md-6 py-1">
          <img src="{{asset($row->photo)}}" width="100%" height="350" class="rounded">
        </div>
        <div class="col-md-6 py-1">
          <h3>{{$row->title}}</h3>
          <p class="scro1">{{$row->description}}</p>
        </div>
        <div class="col-md-12 offset-5 py-2">
          <a href="" class="btn btn-outline-success align-center">Read More</a>
        </div>
        @endforeach
      </div>
      <hr>  
    </section>
  <!-- Video -->
    <section class="main">
      <div class="container">
        <div class="row mx-1 bg-success py-2">
          <div class="col-md-12">
            <h2 class="text-light">ဓမ္မဗီဒီယိုများ</h2>
          </div>          
        </div>
        <div class="owl-carousel owl-theme my-4">
          @foreach($video as $row)
          <div class="col-md-12 col-sm-6 py-2">
            <div class="card h-100 shadow" id="rcorners2">
              <div class="card_img1">
                <img class="image card-img-top" src="{{$row->photo}}" alt="">
                <div class="top-right">
                </div>
                <div class="add_button">
                  <a href="{{route('videodetail',$row->id)}}" class="btn btn-outline-success px-3">
                    <i class="fas fa-play"></i>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="container-float">
                  <div class="row">
                    <div class="col-12">
                      <p class="card-title">
                        <b class="pr-2">{{$row->title}}</b>
                        <span class="bg-secondary rounded text-light">{{$row->artist}}</span>
                      </p>
                      <p>ငြိမ်းချမ်းရေးလုပ်ငန်းစဉ်နှင်ပတ်သက်၍ မြောက်ပိုင်းမဟာမိတ်အဖွဲ့များအကြား...</p>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </div> 
          {{-- <img class="image card-img-top" src="{{$row->photo}}" alt=""> --}}
          @endforeach
        </div>
      </div>
    </section>
    
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function (argument) {
      var owl = $('.owl-carousel').owlCarousel({
        loop:true,
        // nav:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        autoHeight:true,
        responsiveClass:true,
        responsive:{
          0:{
            items:1,
          },
          600:{
            items:4,
            nav:false
          }
        }
      });
      $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[3000])
      })
      $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
      })

    })
  </script>
@endsection