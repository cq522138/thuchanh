<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Resource_;


class BlogController extends Controller
{
    public function index()
    {
        $posts = post::paginate(3);
//        $posts = post::all();
        return view('list', compact('posts'));
    }

    public function destroy($id)
    {
        $post = post::findOrFail($id)->delete();
        Session::flash('success', 'Xóa 1 blog thành công');
        return redirect()->route('blogs.index');
    }

    //hien thi thong tin cho nguoi dung
    public function create()
    {
        return view('create');
    }

    //lay du lieu sau khi nguoi dung nhap vao
    public function store(Request $request)
    {
        $post = new post();
        $post->title = $request->input('title');
        $post->teaser = $request->input('teaser');
        $post->content = $request->input('content');
        $post->created = $request->input('created');
        $post->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới blog thành công');
        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('blogs.index');
    }

    public function edit($id)
    {
        $post = post::findOrFail($id);

//        return view('edit', ['post' => $post]);
        return view('edit', compact('post'));
    }

    public function update(Request $request,$id)
    {
        $post = post::findOrFail($id);
        $post->title = $request->input('title');
        $post->teaser = $request->input('teaser');
        $post->content = $request->input('content');
        $post->created = $request->input('created');
        $post->save();
        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật khách hàng thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('index');
    }

    public function search()
    {
        
    }
}
