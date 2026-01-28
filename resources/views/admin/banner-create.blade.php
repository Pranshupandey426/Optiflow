@extends('layouts.app')

@section('title', 'Upload Banner')

@section('content')
<div style="max-width:600px;margin:120px auto;padding:30px;background:#111;border-radius:16px">

    <h2 style="margin-bottom:20px">Upload Hero Banner Video</h2>

    @if(session('success'))
        <p style="color:#a3ff12">{{ session('success') }}</p>
    @endif

    <form action="/admin/banner/store" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="title" placeholder="Banner Title" required><br><br>

        <input type="text" name="subtitle" placeholder="Banner Subtitle"><br><br>

        <input type="file" name="video" accept="video/*" required><br><br>

        <button type="submit">Upload Banner</button>
    </form>
</div>
@endsection
