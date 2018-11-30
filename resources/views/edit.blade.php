@extends('welcome')
@section('title', 'Chỉnh sửa khách hàng')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>Chỉnh sửa khách hàng</h1></div>
            <div class="col-12">
                <form method="post" action="{{ route('blogs.update',$post->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên tieu de</label>
                        <input type="text" class="form-control" name="title" value="{{ $post->title }}" required>
                    </div>
                    <div class="form-group">
                        <label>gioi thieu</label>
                        <input type="text" class="form-control" name="teaser" value="{{ $post->teaser }}" required>
                    </div>
                    <div class="form-group">
                        <label>noi dung</label>
                        <input type="text" class="form-control" name="content" value="{{ $post->content }}" required>
                    </div>
                    <div class="form-group">
                        <label>Ngày tao</label>
                        <input type="date" class="form-control" name="created" value="{{ $post->created }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection