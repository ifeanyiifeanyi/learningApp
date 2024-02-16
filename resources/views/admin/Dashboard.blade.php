@extends('admin.layouts.admin')

@section('title', 'Admin Dashboard')

@section('css')
    
@endsection

@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">Dashboard</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>

        </div>
        
    </div>
</div>
@endsection


@section('js')
    
@endsection