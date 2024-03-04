@extends('user.layouts.userLayouts')

@section('title', 'Dashboard')

@section('css')
    
@endsection

@section('user')
<div class="container-fluid">
    @include('user.layouts.welcomeSection')


    @include('user.layouts.footer')

</div><!-- end container-fluid -->
@endsection

@section('js')
    
@endsection