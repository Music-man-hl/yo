@extends('layouts.app')
@section('css')

@endsection


@section('content')
    <div class="backgroundimg" style="background-image: url('http://on0u30sv0.bkt.clouddn.com/005.jpg')">
    </div>
    <div class="wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="btn-group">
                            <button type="button" class="btn btn-info">{{ $type }}</button>
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/pictures?type=Action">Action</a></li>
                                <li><a href="/pictures?type=Iron Man">Iron Man</a></li>
                                <li><a href="/pictures?type=Captain America">Captain America</a></li>
                                <li class="divider"></li>
                                <li><a href="/pictures?type=Other">Other</a></li>
                            </ul>
                        </div>

                        <div class="btn-group pull-right">
                            <form id="picture1" action="/pictures" enctype="multipart/form-data"
                                  method="post"
                                  onsubmit="return upload(this)">
                                {{ csrf_field() }}
                                <input type="file" name="picture" style="display: none;">
                                <input type="hidden" name="type" value="{{ $type }}">
                                <button class="put_img btn btn-info">上传</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="masonry" class="container-fluid">
                    @foreach($pics as $pic)
                        <div class="box box-widget">
                            <div class="box-header with-border" style="padding: 5px;">
                                <div class="box-title"></div>
                                <div class="box-tools" style="top: 2px;">
                                    <button type="button" class="btn btn-sm btn-box-tool" data-widget="collapse"><i
                                                class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-box-tool remove" data-widget="remove"
                                            datasrc="{{ $pic->source_url }}"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <img class="img-responsive" src="{{ $domain.$pic->source_url }}" alt="Photo">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>

    </div>
@endsection

@section('js')

    <script>
        var upload = function (_form) {
            // language=JQuery-CSS
            $("[name=picture]").click().change(function () {
//                var form = new FormData(document.getElementById("picture"));
//                $.ajax({
//                    url: "uploadpictures",
//                    type: "post",
//                    data: form,
//                    cache: true,
//                    processData: false,
//                    contentType: false,
//                    success: function (data) {
//                        location.reload()
//                    },
//                    error: function (e) {
//                        alert("网络错误，请重试！！");
//                    }
//                });
                _form.submit()
            });
            return false
        };

        $('.remove').click(function () {
            var _this = $(this);
            $.post('/pictures/' + _this.attr('datasrc'), {_method: 'delete'})
        });

    </script>

@endsection