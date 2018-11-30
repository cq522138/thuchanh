@extends('welcome')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>Danh Sách blog</h1></div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tieu de</th>
                    <th scope="col">gioi thieu</th>
                    <th scope="col">noi dung</th>
                    <th scope="col">ngay tao</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                {{ $posts->links() }}
                @if(count($posts) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($posts as $key => $post)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->teaser }}</td>
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->created }}</td>
                            <td><a href="{{route('blogs.edit',$post->id)}}">sửa</a></td>
                            <td><a href="{{route('blogs.destroy',$post->id)}}" class="text-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{route('blogs.create')}}">Thêm mới</a>
        </div>


        <div class="col-6">

            <form class="navbar-form navbar-left" action="">

                @csrf

                <div class="row">

                    <div class="col-8">

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Search">

                        </div>

                    </div>

                    <div class="col-4">

                        <button type="submit" class="btn btn-default">Tìm kiếm</button>

                    </div>

                </div>

            </form>

        </div>
    </div>
@endsection