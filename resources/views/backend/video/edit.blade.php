@extends('backendtemplate')
@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update Video</h1>
    <a href="{{route('videos.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-arrow-left"></i> Back</a>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-12">
        
      
        <main class="app-content">
          <div class="app-title">
            <div class="row">
              <div class="offset-md-2 col-md-8">
                <div class="tile">
                  <form action="{{route('videos.update',$video->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="title">Video Title</label>
                      <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="@error('title') {{old('title')}} @else {{$video->title}} @enderror" required>
                      @error('name')
                      <span  class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="artist">Artist Name</label>
                      <input type="text" name="artist" id="artist" class="form-control @error('artist') is-invalid @enderror" value="@error('artist') {{old('artist')}} @else {{$video->artist}} @enderror" required>
                      @error('artist')
                      <span  class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="photo">Photo</label>
                      <input type="file" name="photo" id="photo" class="form-control-file" accept="image/*" value="{{old('photo')}}" required>
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea name="description" id="description" class="form-control" height="400">@error('description') {{old('description')}} @else {{$video->description}} @enderror</textarea>
                    </div>
                    <div class="form-group">
                      <label for="link">Video Link</label>
                      <input type="text" name="link" id="link" class="form-control @error('title') is-invalid @enderror" value="@error('link') {{old('link')}} @else {{$video->link}} @enderror" required>
                      @error('link')
                      <span  class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <input type="submit" name="btnsubmit" value="Update" class="btn btn-success btn-block">
                  </form>
                </div>
              </div>
            </div>
          </main>

      </div>
    </div>
  </div>
</div>
  
@endsection