@extends('welcome')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới blogs</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('blogs.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>tieu de</label>
                        <input type="text" class="form-control" name="title"  placeholder="Enter title" required>
                    </div>
                    <div class="form-group">
                        <label>gioi thieu</label>
                        <input type="text" class="form-control" name="teaser"  placeholder="Enter title" required>
                    </div>
                    <div class="form-group">
                        <label>noi dung</label>
                        <input type="text" class="form-control" name="content"  placeholder="Enter title" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày tao</label>
                        <input type="date" class="form-control" name="created" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection