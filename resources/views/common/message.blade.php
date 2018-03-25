<!--  成功提示框 -->
@if(\Illuminate\Support\Facades\Session::has('success'))
    <script>alert("{{ \Illuminate\Support\Facades\Session::pull('success') }}")</script>
@endif


<!--  失败提示框 -->
@if(\Illuminate\Support\Facades\Session::has('error'))
    <script>alert("{{ \Illuminate\Support\Facades\Session::pull('error') }}")</script>
@endif