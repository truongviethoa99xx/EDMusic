@extends('layout.index')
@section('content')
<div id="home-main-layout" class="home-main-layout">
    @include('layout.slider')
</div>
@endsection
@push('scripts')
{{--    <!-- <script type="text/javascript" src="{{ asset('js\dashboard\index.js')}}"></script> -->--}}
@endpush
