@extends('admin.layouts.admin')

@section('title', 'Admin Profile')

@section('css')

@endsection

@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">User Profile</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center d-flex flex-column align-items-center">
                                    <img src="{{ $user->getPhotoUrlAttribute() }}"
                                        alt="Admin" class="p-1 rounded-circle bg-primary" width="110">
                                    <div class="mt-3">
                                        <h4>{{ Str::title($user->name)}} ({{ $user->username }})</h4>
                                        <p class="mb-1 text-secondary">{{ $user->address ?? 'N/A' }}</p>
                                        <p class="text-muted font-size-sm">{{ Str::lower($user->email) }}</p>
                                        <a href="{{ route('admin.updatePassword.view') }}" class="btn btn-primary">Update Password</a>
                                        <button class="btn btn-outline-primary">Message</button>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="flex-wrap list-group-item d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-globe me-2 icon-inline">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                                <path
                                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                </path>
                                            </svg>Role</h6>
                                        <span class="text-secondary">{{ $user->role }}</span>
                                    </li>
                                    <li
                                        class="flex-wrap list-group-item d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-globe me-2 icon-inline">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                                <path
                                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                </path>
                                            </svg>Phone number</h6>
                                        <span class="text-secondary">{{ $user->phone ?? 'N/A' }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <form action="{{ route('admin.profile.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" />
                                            @error('name')
                                             <span class="text-danger">{{ $message }}</span>   
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Username</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input name="username" type="text" class="form-control" value="{{ old('name', $user->username) }}" />
                                            @error('username')
                                            <span class="text-danger">{{ $message }}</span>   
                                           @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" />
                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>   
                                           @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Phone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input name="phone" type="tel" class="form-control" value="{{ old('phone', $user->phone ?? '') }}" />
                                            @error('phone')
                                            <span class="text-danger">{{ $message }}</span>   
                                           @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Address</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input name="address" type="text" class="form-control" value="{{ old('address', $user->address ?? '') }}" />
                                            @error('address')
                                            <span class="text-danger">{{ $message }}</span>   
                                           @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Profile Photo</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input name="photo" type="file" class="form-control"
                                                value="" onchange="previewImageFunction(this)" />
                                            @error('photo')
                                            <span class="text-danger">{{ $message }}</span>   
                                            @enderror
                                        </div>
                                        <div class="col-sm-4">
                                            <img id="previewImage" src="{{ $user->getPhotoUrlAttribute() }}" alt="profile photo" class="img-responsive w-50">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="px-4 btn btn-primary" value="Save Changes" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script>
    function previewImageFunction(input) {
        var preview = document.getElementById('previewImage');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection