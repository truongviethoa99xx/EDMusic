<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
<div id="isLoading"></div>
<div id="toast"></div>
<!-- Pre-loader start -->
@include('layout.loading')
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <div class="navbar-header-pin">
            @include('layout.navbar')
{{--            @include('layout.navbar_second')--}}
        </div>
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @yield('content')
            </div>
        </div>
    </div>
</div>
@include('layout.script')
</body>
</html>
