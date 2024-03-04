<div class="flex-wrap mb-5 breadcrumb-content d-flex align-items-center justify-content-between">
    <div class="media media-card align-items-center">
        <div class="rounded-full media-img media--img media-img-md">
            <img class="rounded-full" src="{{ asset(auth()->user()->photo) }}" alt="Student thumbnail image">
        </div>
        <div class="media-body">
            <h2 class="section__title fs-30">Howdy, {{ Str::title(auth()->user()->name) }}</h2>
            <div class="pt-2 rating-wrap d-flex align-items-center">
                <div class="review-stars">
                    <span class="rating-number">4.4</span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star-o"></span>
                </div>
                <span class="pl-1 rating-total">(20,230)</span>
            </div><!-- end rating-wrap -->
        </div><!-- end media-body -->
    </div><!-- end media -->
    <div class="file-upload-wrap file-upload-wrap-2 file--upload-wrap">
        <input type="file" name="files[]" class="multi file-upload-input">
        <span class="file-upload-text"><i class="mr-2 la la-upload"></i>Upload a course</span>
    </div><!-- file-upload-wrap -->
</div><!-- end breadcrumb-content -->
<div class="mb-5 section-block"></div>
<div class="mb-5 dashboard-heading">
    <h3 class="fs-22 font-weight-semi-bold">@yield('title')</h3>
</div>