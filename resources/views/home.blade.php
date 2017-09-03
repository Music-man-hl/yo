@extends('layouts.app')

@section('css')
    <style>
        .backimg{
            width: 100%;height: 100%;min-width: 1000px;min-height: 1100px; display: block;
            position:fixed;background-position: center 0;z-index: -10;
        }
    </style>
@endsection

@section('content')

    <div class="backimg" style="background-image: url('http://on0u30sv0.bkt.clouddn.com/iron_man_13-wallpaper-1920x1080.jpg')"></div>

@endsection

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

