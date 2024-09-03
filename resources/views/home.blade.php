@include('layouts/header')
    <div class="container-scroller">
        @include('layouts/navbar')
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->

            <!-- partial -->
            @include('layouts/sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                    @yield('content')
                    </div>
                </div>
                <!-- content-wrapper ends -->
@include('layouts/footer')