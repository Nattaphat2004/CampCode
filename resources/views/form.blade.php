@extends('layouts.app')

{{-- ใช้ extends เพื่อเรียกใช้ layout --}}
{{-- ใช้ section เพื่อกำหนด title --}}
@section('title', 'บทความ')

@section('content')
    <h2 class="text text-center py-2">เขียนบทความใหม่</h2>
    {{-- ซ่อนข้อมูลระหว่างส่ง --}}
    <form method="POST" action="/insert">
        @csrf
        <div class="form-group">
            <label for="title">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control">
        </div>
        @error('title')
            <div class="my-2">
                <span class="text-danger">{{ $message }}</span>
            </div>
        @enderror
        <br>
        <div>
            <label for="content">เนื้อหาบทความ</label>
            <textarea name="content" id="" cols="30" rows="8" class="form-control "></textarea>
        </div>
        @error('content')
            <div class="my-2">
                <span class="text-danger">{{ $message }}</span>
            </div>
        @enderror
        <br>
        <input type="submit" value="บันทึก" class="btn btn-primary">
        <a href="/blog" class="btn btn-success">บทความทั้งหมด</a>
    </form>
@endsection
