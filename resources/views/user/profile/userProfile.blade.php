@extends('user.layouts.userLayouts')

@section('title', 'Profile')

@section('css')
    
@endsection

@section('user')
<div class="container-fluid">
    @include('user.layouts.welcomeSection')
    <div class="profile-detail mb-5">
        <marquee behavior="" direction=""><b>Location: </b>{{ $user->userCity }}, {{ $user->userCountry }}, {{ $user->userIp }}</marquee>
        <ul class="generic-list-item generic-list-item-flash">
            <li><span class="profile-name">Registration Date:</span><span class="profile-desc">{{ $user->created_at }}</span></li>
            <li><span class="profile-name">Name:</span><span class="profile-desc">{{ Str::title($user->name) }}</span></li>
            <li><span class="profile-name">User Name:</span><span class="profile-desc">{{ $user->username }}</span></li>
            <li><span class="profile-name">Email:</span><span class="profile-desc">{{ Str::lower($user->email) }}</span></li>
            <li><span class="profile-name">Phone Number:</span><span class="profile-desc">{{ $user->phone ?? 'N/A' }}</span></li>
            <li>
                <span class="profile-name">Address:</span>
                <span class="profile-desc">{{ $user->address  ?? 'N/A'}}</span>
            </li>
        </ul>
    </div>

    @include('user.layouts.footer')

</div><!-- end container-fluid -->
@endsection

@section('js')
    
@endsection