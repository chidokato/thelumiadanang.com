@extends('admin.layout.main')

@section('content')
@include('admin.layout.header')
@include('admin.alert')
<div class="d-sm-flex align-items-center justify-content-between mb-3 flex">
    <h2 class="h3 mb-0 text-gray-800 line-1 size-1-3-rem">Quản lý slider</h2>
    <a class="add-iteam" href="{{route('slider.create')}}"><button class="btn-success form-control" type="button"><i class="fa fa-plus" aria-hidden="true"></i> {{__('lang.add')}}</button></a>
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ul class="nav nav-pills">
                    <li><a data-toggle="tab" class="nav-link active" href="#tab1">{{__('lang.all')}}</a></li>
                    <!-- <li><a data-toggle="tab" class="nav-link " href="#tab2">Hiển thị</a></li> -->
                    <!-- <li><a data-toggle="tab" class="nav-link" href="#tab3">Ẩn</a></li> -->
                </ul>
            </div>
            <div class="tab-content overflow">
                <div class="tab-pane active" id="tab2">
                    @if(count($data) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Hình ảnh slider</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $val)
                            <tr>
                                <td class="thumb-slider"><a href="{{route('slider.edit',[$val->id])}}" class="mr-2"><img src="data/images/{{$val->img}}"></a></td>
                                <td>
                                    <div><a href="{{route('slider.edit',[$val->id])}}" class="mr-2">{{$val->name}}</a></div>
                                    <div>{{$val->content}}</div>
                                    <div>User: {{$val->User->yourname}}</div>
                                    <div>Date: {{$val->updated_at}}</div>
                                </td>
                                <td>
                                    <a href="{{route('slider.edit',[$val->id])}}" class="mr-2"><i class="fas fa-edit" aria-hidden="true"></i></a>
                                    <form action="{{route('slider.destroy', [$val->id])}}" method="POST">
                                      @method('DELETE')
                                      @csrf
                                      <button style="padding: 0" class="button_none" onclick="return confirm('Bạn muốn xóa bản ghi ?')"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </form>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .thumb-slider img{ height:150px }
</style>

@endsection