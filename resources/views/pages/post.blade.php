@extends('layout.index')

@section('title'){{$post->title ? $post->title : $post->name}}@endsection
@section('description'){{$post->description ? $post->description : $post->name.$post->name}}@endsection
@section('robots'){{'index, follow'}}@endsection
@section('url'){{asset('')}}{{$post->category->slug}}/{{$post->slug}}@endsection
@section('img'){{asset('')}}data/images/{{$post->img}}@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/news.css" />
@endsection

@section('content')

<section class="py-3 text-center container">
<div class="row py-lg-5">
  <div class="col-lg-6 col-md-8 mx-auto">
    <p class="fw-light">CHI TIẾT</p>
    <p>
      <a href="{{ asset('') }}" class="btn btn-primary my-2 bg072450">Trang chủ</a>
      <a href="{{ asset('') }}tin-tuc" class="btn btn-primary my-2 bg072450">Tin tức</a>
    </p>
  </div>
</div>
</section>

<div class="album py-5 bg-light news">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="content-news">
                    <h1>{{ $post->name }}</h1>
                    <p class="detail">{!! $post->detail !!}</p>
                    {!! $post->content !!}
                </div>
            </div>
            <div class="col-md-4">
                @foreach($related_post as $val)
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
</div>

<footer>
    
    ádads

</footer>


@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection