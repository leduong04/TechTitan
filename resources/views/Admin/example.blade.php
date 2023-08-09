@extends('ADMIN.templates.tpl_default', ['pageId'=>'example'])

@section('css')
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- CSS -->

<link rel="stylesheet" href="{{ asset('assets/css/css_admin/admin.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/css_admin/navbar.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/css_admin/sidebar.css')}}">

@endsection

@section('content')

<main>
    <h1>LÊ ĐOÀN DƯƠNG</h1>
</main>

@endsection


@section('js')
<script src="{{ asset('assets/js/js_admin/navbar_sidebar.js')}}"></script>
@endsection