<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
    function index() {
        // method paginate(5) = ไว้แสดงข้อมูล 5 แถวต่อ 1 หน้า
        $blogs=DB::table('blogs')->paginate(5);
        return view('blog',compact('blogs'));
    }
    function about() {
        $name = 'KuyYai';
        $date = '32 October 2097';
        return view('about',compact('name', 'date'));
    }
    function create() {
        return view('form');
    }
    function insert(Request $request) {
        $request->validate([
            // required = ต้องใส่ห้ามเว้น',
            'title' => 'required|max:50',
            'content' => 'required',
        ],
        [
            'title.required' => 'กรุณาใส่ชื่อเรื่อง',
            'title.max' => 'ชื่อห้ามเกิน 50 ตัวอักษร',
            'content.required' => 'กรุณาใส่เนื้อหา'
        ],
    );
        $data = [
            // title, content = ชื่อฟิลด์ในฐานข้อมูล ต้องตรงกัน
            'title' => $request->title,
            'content' => $request->content,
        ];
        // การบันทึกข้อมูลลงฐานข้อมูล ใช้ method insert
        DB::table('blogs')->insert($data);
        return redirect('blog');

    }
    function delete($id) {
        DB::table('blogs')->where('id',$id)->delete();
        return redirect()->back();
    }
    function change($id) {
        // method first() = ดึงข้อมูลแค่ 1 แถว
        $blog = DB::table('blogs')->where('id',$id)->first();
        $data =[
            'status' => !$blog->status
        ];
        // method update() = อัพเดทข้อมูลในฐานข้อมูล
        $blog = DB::table('blogs')->where('id',$id)->update($data);
        return redirect('blog');
    }
    function edit($id) {
        $blog = DB::table('blogs')->where('id',$id)->first();
        return view('edit',compact('blog'));
    }
    function update(Request $request, $id) {
        $request->validate([
            // required = ต้องใส่ห้ามเว้น',
            'title' => 'required|max:50',
            'content' => 'required',
        ],
        [
            'title.required' => 'กรุณาใส่ชื่อเรื่อง',
            'title.max' => 'ชื่อห้ามเกิน 50 ตัวอักษร',
            'content.required' => 'กรุณาใส่เนื้อหา'
        ],
    );
        $data = [
            // title, content = ชื่อฟิลด์ในฐานข้อมูล ต้องตรงกัน
            'title' => $request->title,
            'content' => $request->content,
        ];
        // การบันทึกข้อมูลลงฐานข้อมูล ใช้ method insert
        DB::table('blogs')->where('id', $id)->update($data);
        return redirect('blog');

    }
}

