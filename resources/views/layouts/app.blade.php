@include('backend.inc.head')
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('backend.inc.header')
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('backend.inc.sidebar')
        <!-- Sidebar Area End Here -->
        <!-- Content Area Start Here -->
        <div class="dashboard-content-one">
            @yield('content')
            <!-- Footer Area Start Here -->
            <footer class="footer-wrap-layout1">
                <div class="copyright">© Copyrights <a href="#">School</a> 2019. All rights reserved. Designed by <a
                        href="#">CodeWins technologies</a></div>
            </footer>
            <!-- Footer Area End Here -->
        </div>
        <!-- Content Area End Here -->

    </div>
    <!-- Page Area End Here -->
</div>
@include('backend.inc.footer')
