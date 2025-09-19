@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/news.css" />
@endsection

@section('content')


<section class="py-3 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">TIN TỨC</h1>
        <p>
          <a href="{{ asset('') }}" class="btn btn-primary my-2 bg072450">Trang chủ</a>
        </p>
      </div>
    </div>
  </section>



  <div class="album py-5 bg-light news">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($posts as $val)
        <div class="col">
          <div class="card shadow-sm">
            <div class="img"><a href="{{ $val->category->slug }}/{{ $val->slug }}"> <img src="data/images/{{ $val->img }}"> </a> </div>
            <div class="card-body">
              <h2 class="card-text"><a href="{{ $val->category->slug }}/{{ $val->slug }}">{{ $val->name }}</a></h2>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ $val->category->slug }}/{{ $val->slug }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>
                <small class="text-muted">{{date_format($val->updated_at,"d/m/Y")}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </div>



@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection