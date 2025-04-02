@extends('layouts.app')
@section('title', 'เกี่ยวกับเรา')

@section('content')
    <h1 class="text text-center py-2">เกี่ยวกับเรา</h1>
    <hr>
    <p>ผู้พัฒนา: {{$name}}</p>
    <p>วันที่เริ่มพัฒนา: {{$date}}</p>
    <p>ติดตามผลงานได้ที่ Instagram: bluentpji</>
@endsection
