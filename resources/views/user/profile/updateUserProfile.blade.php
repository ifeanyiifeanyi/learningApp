@extends('user.layouts.userLayouts')

@section('title', 'Update Profile')

@section('css')
    
@endsection

@section('user')
<div class="container-fluid">
    @include('user.layouts.welcomeSection')

    <ul class="nav nav-tabs generic-tab pb-30px" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="edit-profile-tab" data-toggle="tab" href="#edit-profile" role="tab" aria-controls="edit-profile" aria-selected="false">
                Profile
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="true">
                Password
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false">
                Account
            </a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
            <div class="setting-body">
                <h3 class="fs-17 font-weight-semi-bold pb-4">Edit Profile</h3>
                <div class="media media-card align-items-center">
                    <div class="media-img media-img-lg mr-4 bg-gray">
                        <img class="mr-3" src="{{ asset(auth()->user()->photo) }}" alt="avatar image">
                    </div>
                    <div class="media-body">
                        <div class="file-upload-wrap file-upload-wrap-2">
                            <input type="file" name="files[]" class="multi file-upload-input with-preview" multiple>
                            <span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload a Photo</span>
                        </div><!-- file-upload-wrap -->
                        <p class="fs-14">Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p>
                    </div>
                </div><!-- end media -->
                <form method="post" class="row pt-40px">
                    <div class="input-box col-lg-6">
                        <label class="label-text">First Name</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" value="Alex">
                            <span class="la la-user input-icon"></span>
                        </div>
                    </div><!-- end input-box -->
                    <div class="input-box col-lg-6">
                        <label class="label-text">Last Name</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" value="Smith">
                            <span class="la la-user input-icon"></span>
                        </div>
                    </div><!-- end input-box -->
                    <div class="input-box col-lg-6">
                        <label class="label-text">User Name</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" value="alex-admin">
                            <span class="la la-user input-icon"></span>
                        </div>
                    </div><!-- end input-box -->
                    <div class="input-box col-lg-6">
                        <label class="label-text">Email Address</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="email" name="email" value="alexsmith@gmail.com">
                            <span class="la la-envelope input-icon"></span>
                        </div>
                    </div><!-- end input-box -->
                    <div class="input-box col-lg-12">
                        <label class="label-text">Phone Number</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" value="(91) 7547 622250">
                            <span class="la la-phone input-icon"></span>
                        </div>
                    </div><!-- end input-box -->
                    <div class="input-box col-lg-12">
                        <label class="label-text">Bio</label>
                        <div class="form-group">
                            <textarea class="form-control form--control user-text-editor pl-3" name="message">Hello! I am Alex Smith Washington area graphic designer with over 6 years of graphic design experience. I specialize in designing infographics, icons, brochures, and flyers</textarea>
                        </div>
                    </div><!-- end input-box -->
                    <div class="input-box col-lg-12 py-2">
                        <button class="btn theme-btn">Save Changes</button>
                    </div><!-- end input-box -->
                </form>
            </div><!-- end setting-body -->
        </div><!-- end tab-pane -->

        
        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
            <div class="setting-body">
                <h3 class="fs-17 font-weight-semi-bold pb-4">Change Password</h3>
                <form method="post" class="row">
                    <div class="input-box col-lg-4">
                        <label class="label-text">Old Password</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" placeholder="Old Password">
                            <span class="la la-lock input-icon"></span>
                        </div>
                    </div><!-- end input-box -->
                    <div class="input-box col-lg-4">
                        <label class="label-text">New Password</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" placeholder="New Password">
                            <span class="la la-lock input-icon"></span>
                        </div>
                    </div><!-- end input-box -->
                    <div class="input-box col-lg-4">
                        <label class="label-text">Confirm New Password</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" placeholder="Confirm New Password">
                            <span class="la la-lock input-icon"></span>
                        </div>
                    </div><!-- end input-box -->
                    <div class="input-box col-lg-12 py-2">
                        <button class="btn theme-btn">Change Password</button>
                    </div><!-- end input-box -->
                </form>
                <form method="post" class="pt-5 mt-5 border-top border-top-gray">
                    <h3 class="fs-17 font-weight-semi-bold pb-1">Forgot Password then Recover Password</h3>
                    <p class="pb-4">Enter the email of your account to reset password. Then you will receive a link to email
                        to reset the password. If you have any issue about reset password
                        <a href="contact.html" class="text-color">contact us</a></p>
                    <div class="input-box">
                        <label class="label-text">Email Address</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="email" name="email" placeholder="Enter email address">
                            <span class="la la-envelope input-icon"></span>
                        </div>
                    </div><!-- end input-box -->
                    <div class="input-box py-2">
                        <button class="btn theme-btn">Recover Password</button>
                    </div><!-- end input-box -->
                </form>
            </div><!-- end setting-body -->
        </div><!-- end tab-pane -->
        <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
            <div class="setting-body">
                <h3 class="fs-17 font-weight-semi-bold pb-4">My Account</h3>
                <form method="post" class="mb-40px">
                    <div class="custom-control-wrap d-flex flex-wrap align-items-center">
                        <div class="custom-control custom-radio pl-0 flex-shrink-0 mr-3 mb-2">
                            <input type="radio" class="custom-control-input" id="deactivateAccount" name="radio-stacked" required>
                            <label class="custom-control-label custom--control-label custom--control-label-boxed" for="deactivateAccount">
                                <span class="font-weight-semi-bold text-black">Deactivate Account</span>
                            </label>
                        </div>
                        <button class="btn theme-btn mb-2">Deactivate</button>
                    </div><!-- end custom-control-wrap -->
                </form>
                <div class="section-block"></div>
                <div class="danger-zone pt-40px">
                    <h4 class="fs-17 font-weight-semi-bold text-danger">Delete Account Permanently</h4>
                    <p class="pt-1 pb-4"><span class="text-warning">Warning: </span>Once you delete your account, there is no going back. Please be certain.</p>
                    <button class="btn theme-btn" data-toggle="modal" data-target="#deleteModal">Delete my account</button>
                </div>
            </div><!-- end setting-body -->
        </div><!-- end tab-pane -->
    </div><!-- end tab-content -->

    @include('user.layouts.footer')

</div><!-- end container-fluid -->
@endsection

@section('js')
    
@endsection