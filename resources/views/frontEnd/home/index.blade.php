@extends('frontEnd/layout/baseClient')
@section('css')
<style type="text/css">
        .Ads-cao{
            position: fixed;
            top: 85px;
            right: 0;
        }
        .Ads-animation-close{
            --webkit-animation: myclose 2s infinite;
            --moz-animation: myclose 2s infinite;
            animation: myclose 2s;

        }
        @keyframes myclose {
            from { right: 0px }
            to { right: -500px }
        }
        @-webkit-keyframes myclose{
            from { right: 0px }
            to { right: -500px }
        }
        .Ads-close{
            position: relative;
            top: 20px;
            left: 5px;
            color: #E4F1FE;
        }
    </style>
@endsection
@section('title', 'Home')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($dsslide as $key => $slide)
                        @if ($slide->hienthi == 1)
                            <li data-target="#carousel-example-generic" data-slide-to="{{ $key  }}" @if($key == 0) {{'class="active"' }} @endif></li>
                        @endif
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($dsslide as $key => $slide)
                        @if ($slide->hienthi == 1)
                            <div class="item @if($key == 0) {{ 'active' }} @endif">
                                <img src="upload/slide/{{ $slide->hinhanh }}" alt="{{ $slide->hinhanh }}" >
                            </div>
                        @endif
                    @endforeach

                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                </a>
            </div>
            <!-- Content Header (Page header) -->

            <div id="tinDauTrang">
                <div class="row">
                    <div class="col-md-8 col-sm-12" id="tinMoi">
                        <div class="block">
                            <div class="block-header">
                                <span class="block-title">Tin mới</span>
                            </div>
                            <div class="block-body">
                                <div class="block-content row nomargin">
                                    <div class="content-img col-sm-4  nomargin nopadding center">
                                        <img id="tinmoi" src="upload/hinhanh/{{ $baivietmoinhat[0]->hinhanh }}" alt="{{ $baivietmoinhat[0]->hinhanh }}" >
                                    </div>
                                    <div class="content-text col-sm-8 nomargin nopadding">
                                        <div class="content-title">
                                            <a href="/baiviet/{{ $baivietmoinhat[0]->id }}">{{ $baivietmoinhat[0]->tenbaiviet }}</a>
                                        </div>
                                        <div class="content-tomtat">
                                            {{ $baivietmoinhat[0]->tomtat }}
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul>
                                        @foreach($dsbaighim as $baighim)
                                            <li><i class="fa fa-thumb-tack" aria-hidden="true"></i>@if($baighim->trangthai == 0) <a href="/baiviet/{{ $baighim->BaiViet->slug}}">{{$baighim->tenbaighim}}</a>  @else <a href="{{$baighim->url}}">{{ $baighim->tenbaighim }}</a> @endif</li>
                                        @endforeach
                                        @foreach($dsbaiviet as $baiviet)
                                            <li><i class="fa fa-newspaper-o" aria-hidden="true"></i><a href="/baiviet/{{ $baiviet->slug }}">{{ $baiviet->tenbaiviet }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4" id="duAnNoiBat">
                        <div class=" block">
                            <div class="block-header">
                                <span class="block-title">Dự án nội bật</span>
                            </div>
                            <div class="block-body" id="slimScrollDiv">
                                <div class="block-content">
                                    <div class="row nomargin nopadding" >
                                        @foreach($dsduan  as $duan)
                                            @if($duan->noibat == 1)
                                                <div class="col-sm-3 col-xm-3 col-md-6 duan-item">
                                                    <div class="duan-item-img">
                                                        <img src="upload/hinhanh/{{ $duan->hinhanh  }}" class="duannoibat"/>
                                                    </div>
                                                    <div class="duan-item-name text-center">
                                                        <a href="/duan/{{ $duan->id }}">{{ $duan->tenthuongmai  }}</a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="duAnTrongTam">
                <div class="row">
                    <div class="center">
                        <img class="diver" src="upload/devider.png">
                    </div>
                    <div class="col-sm-12 col-md-12 duan-tieude center">
                        <h1 class="tenDuAnTrongTam">{{ $duantrongtam[0]->tenchude }}</h1>
                    </div>
                    <div class="col-sm-12 col-md-12 duan-hinhanh" >
                        <img src="upload/hinhanh/{{ $duantrongtam[0]->hinhanh }}">
                    </div>

                    {{--Tiện ích dự án--}}
                    <div class="col-sm-12 col-md-12 duan-tongquat">
                        <?php $block = $duantrongtam[0]->BlockContent ?>
                        <div class="blockcontent row nomargin bg-dark">
                            <div class="blockcontent-header">
                                <span class="title-content">{{ $block[0]->LoaiBlock->ten }}</span>
                                <div class="row" style="margin-left: 0px; margin-right: 0px;">
                                    <div class="col-sm-12">

                                    </div>
                                </div>
                            </div>
                            @if($block[0]->noidung == 'null')
                                <div class="col-sm-12 nomargin nopadding body-img">
                                    @foreach($block[0]->HinhAnh as $hinhanh)
                                        <img src="upload/hinhanh/{{ $hinhanh->url  }}" alt="{{ $block[0]->tenblock }}">
                                    @endforeach
                                </div>
                            @else
                                <div class="bg-dark col-sm-5 nomargin ">
                                    <div class="body-text" >
                                        {!! $block[0]->noidung !!}
                                    </div>
                                </div>
                                <div class="col-sm-7 nomargin body-img">
                                    @if(count($block[0]->HinhAnh)>1)
                                        <div id="carousel-example-genericabc" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                @for($i = 0; $i < count($block[0]->HinhAnh); $i++)
                                                    <li data-target="#carousel-example-genericabc" data-slide-to="{{ $i  }}" @if($i == 0) {{'class="active"' }} @endif></li>
                                                @endfor
                                            </ol>
                                            <div class="carousel-inner">
                                                @for($i = 0; $i < count($block[0]->HinhAnh); $i++)
                                                    <div class="item @if($i == 0) {{ 'active' }} @endif">
                                                        <img src="upload/hinhanh/{{ $block[0]->HinhAnh[$i]->url  }}" alt="{{ $block[0]->tenblock }}">
                                                    </div>
                                                @endfor

                                            </div>
                                            <a class="left carousel-control" href="#carousel-example-genericabc" data-slide="prev">
                                                <span class="fa fa-angle-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-example-genericabc" data-slide="next">
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                        </div>
                                    @elseif(count($block[0]->HinhAnh)==1)
                                        <img src="upload/hinhanh/{{ $block[0]->HinhAnh[0]->url  }}" alt="{{ $block[0]->tenblock }}">
                                    @endif
                                </div>
                            @endif
                        </div>
                        {{--Tiện ích dự án--}}

                        <div class="blockcontent row nomargin bg-orange-n">
                            <div class="blockcontent-header">
                                <span class="title-content">{{ $block[4]->LoaiBlock->ten }}</span>
                                <div class="row" style="margin-left: 0px; margin-right: 0px;">
                                    <div class="col-sm-12">

                                    </div>
                                </div>
                            </div>
                            @if($block[4]->noidung == 'null')
                                <div class="col-sm-12 nomargin body-img">
                                    @foreach($block[4]->HinhAnh as $hinhanh)
                                        <img src="upload/hinhanh/{{ $hinhanh->url  }}" alt="{{ $block[4]->tenblock }}">
                                    @endforeach
                                </div>
                            @else
                                <div class="col-sm-5 nomargin ">
                                    <div class="body-text" >
                                        {!! $block[4]->noidung !!}
                                    </div>
                                </div>
                                <div class="col-sm-7 nomargin body-img">
                                    @if(count($block[4]->HinhAnh)>1)
                                        <div id="carousel-example-genericabc4" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                @for($i = 0; $i < count($block[4]->HinhAnh); $i++)
                                                    <li data-target="#carousel-example-genericabc4" data-slide-to="{{ $i  }}" @if($i == 0) {{'class="active"' }} @endif></li>
                                                @endfor
                                            </ol>
                                            <div class="carousel-inner">
                                                @for($i = 0; $i < count($block[4]->HinhAnh); $i++)
                                                    <div class="item @if($i == 0) {{ 'active' }} @endif">
                                                        <img src="upload/hinhanh/{{ $block[4]->HinhAnh[$i]->url  }}" alt="{{ $block[4]->tenblock }}">
                                                    </div>
                                                @endfor

                                            </div>
                                            <a class="left carousel-control" href="#carousel-example-genericabc4" data-slide="prev">
                                                <span class="fa fa-angle-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-example-genericabc4" data-slide="next">
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                        </div>
                                    @elseif(count($block[4]->HinhAnh)==1)
                                        <img src="upload/hinhanh/{{ $block[4]->HinhAnh[0]->url  }}" alt="{{ $block[4]->tenblock }}">
                                    @endif
                                </div>
                            @endif
                        </div>

                            <div class="row nomargin" style="padding-top: 10px;">
                                <div class="center">
                                    <a href="/duan/{{ $duantrongtam[0]->id }}" class="btn btn-primary btn-lg">Xem thêm</a>
                                </div>

                            </div>

                    </div>
                </div>
            </div>

            @include('frontEnd/layout/dangKyEmail')
        </div>



        <!-- /.content -->
    </div>
    <div class="Ads-cao">
        <a class="Ads-close" href="javascript:void(0)" onclick="close_ads()"><i class="fa fa-times" aria-hidden="true"></i></a>
        <a href=""><img src="http://groupthelife.com/upload/hinhanh/p8cM_anh-baner-sun-grand-city-jpg.jpg"></a>
    </div>

        <script type="text/javascript">
        $(document).ready(function() {

            function animation_close(time) {
                $(".Ads-cao").addClass("Ads-animation-close");
                setTimeout(function(){
                    $(".Ads-cao").css("display", "none");
                }, time);
            }

            setTimeout(function() {
                animation_close(2000);
            }, 8000);


        });
        function close_ads() {
            $(".Ads-cao").removeClass("Ads-animation-close");
            $(".Ads-cao").css("display", "none");

        }

           
        </script>
@endsection
@section("js")
    <script>

        var mss = '<?php if(isset($mss)) echo $mss ?>';
        if (mss.status) {
            $.notify(mss.message, "success");
        }

    </script>
@endsection