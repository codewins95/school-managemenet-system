<!-- jquery-->
<script src="{{ static_asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- Plugins js -->
<script src="{{ static_asset('assets/js/plugins.js') }}"></script>
<!-- Popper js -->
<script src="{{ static_asset('assets/js/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ static_asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Counterup Js -->
<script src="{{ static_asset('assets/js/jquery.counterup.min.js') }}"></script>
<!-- Moment Js -->
<script src="{{ static_asset('assets/js/moment.min.js') }}"></script>
<!-- Waypoints Js -->
<script src="{{ static_asset('assets/js/jquery.waypoints.min.js') }}"></script>
<!-- Scroll Up Js -->
<script src="{{ static_asset('assets/js/jquery.scrollUp.min.js') }}"></script>
<!-- Full Calender Js -->
<script src="{{ static_asset('assets/js/fullcalendar.min.js') }}"></script>
<!-- Chart Js -->
<script src="{{ static_asset('assets/js/Chart.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ static_asset('assets/js/main.js') }}"></script>

@include('partials._message')
@stack('post_script')
</body>

</html>
