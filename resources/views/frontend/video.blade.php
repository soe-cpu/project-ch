@extends('frontendtemplate')
@section('content')
<section class="main">
  <div class="container">
    <div class="row">
      <div class="col-md-8 py-1">
        <div class="row">               
          @foreach($video as $row)
          <div class="col-md-4 col-sm-6 py-2">
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
      <div class="col-md-4 py-1">
        <div class="row">
          <div class="col-md-12 py-1">
            <div class="bg-success rounded">
              <h3 class="py-3 text-center text-light">
                ဓမ္မသီချင်းများ
              </h3>
            </div>
            <ul class="list-unstyled side bg-light scro1">
              <li class="media py-1">
                <img class="mr-3" src="image/s.jpg" alt="Generic placeholder image">
                <div class="media-body">
                  <h5 class="mt-0 mb-1">ဓမ္မသီချင်းများ</h5>
                  <p>ငြိမ်းချမ်းရေးလုပ်ငန်းစဉ်နှင်ပတ်သက်၍ မြောက်ပိုင်းမဟာမိတ်အဖွဲ့များအကြား...</p>
                </div>
              </li>
              <li class="media py-1">
                <img class="mr-3" src="image/s.jpg" alt="Generic placeholder image">
                <div class="media-body">
                  <h5 class="mt-0 mb-1">ဓမ္မသီချင်းများ</h5>
                  <p>ငြိမ်းချမ်းရေးလုပ်ငန်းစဉ်နှင်ပတ်သက်၍ မြောက်ပိုင်းမဟာမိတ်အဖွဲ့များအကြား...</p>
                </div>
              </li>
              <li class="media py-1">
                <img class="mr-3" src="image/s.jpg" alt="Generic placeholder image">
                <div class="media-body">
                  <h5 class="mt-0 mb-1">ဓမ္မသီချင်းများ</h5>
                  <p>ငြိမ်းချမ်းရေးလုပ်ငန်းစဉ်နှင်ပတ်သက်၍ မြောက်ပိုင်းမဟာမိတ်အဖွဲ့များအကြား...</p>
                </div>
              </li>
              <li class="media py-1">
                <img class="mr-3" src="image/s.jpg" alt="Generic placeholder image">
                <div class="media-body">
                  <h5 class="mt-0 mb-1">ဓမ္မသီချင်းများ</h5>
                  <p>ငြိမ်းချမ်းရေးလုပ်ငန်းစဉ်နှင်ပတ်သက်၍ မြောက်ပိုင်းမဟာမိတ်အဖွဲ့များအကြား...</p>
                </div>
              </li>
              <li class="media py-1">
                <img class="mr-3" src="image/s.jpg" alt="Generic placeholder image">
                <div class="media-body">
                  <h5 class="mt-0 mb-1">ဓမ္မသီချင်းများ</h5>
                  <p>ငြိမ်းချမ်းရေးလုပ်ငန်းစဉ်နှင်ပတ်သက်၍ မြောက်ပိုင်းမဟာမိတ်အဖွဲ့များအကြား...</p>
                </div>
              </li>
            </ul>
            </div>
            <div class="col-md-12 py-1">
              <img src="image/s1.jpg" width="100%" height="200px">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
