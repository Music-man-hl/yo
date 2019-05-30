@extends('admin.master')
@section('css')
<link href="/plugins/fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
{{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">相册</h3>
		</div>
		<div class="box-body no-padding">
			<input id="picture" name="picture[]" type="file" multiple class="file">
		</div>
	</div>
  </section>
</div>

@endsection
@section("js")
<script src="/plugins/fileinput/js/fileinput.min.js"></script>
<script src="/plugins/fileinput/js/locales/zh.js"></script>
<script>
	$("#picture").fileinput({
                initialPreview: [ 
                	@foreach($list as $item)
                		'//on0u30sv0.bkt.clouddn.com/{{ $item }}',
                	@endforeach
                      ],
                initialPreviewAsData: true,
                initialPreviewConfig: [
                  
                ],
                deleteUrl: "/admin/pictures",
                overwriteInitial: true,
                uploadUrl:"/admin/pictures",
                uploadAsync: true,
                maxFileCount: 5,
                showBrowse: true,
                browseOnZoneClick: false,
                browseLabel: "选择照片",
                theme:"gly"
            });
</script>
@endsection
