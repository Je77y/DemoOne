@extends('frontEnd/layout/baseClient')
@section('description', $duan->description)
@section('keywords', $duan->keyword)
@section('title', $duan->tenchude)
@section('content')
    <div class="content-wrapper" >
        <div class="main-duan">
            <div class="center">
                <img src="upload/devider.png">
                <h2 class="nomargin duan-title">Dự án {{ $duan->tenchude }}</h2>
                <div class="duan-hinhanh">
                    <img src="upload/{{$duan->hinhanh}}">
                </div>
            </div>
            @foreach($duan->BlockContent as $key => $block)
                @if($key % 2 == 0 && $block->hienthi == 1)
                    <div class="blockcontent row nomargin">
                        <div class="blockcontent-header">
                            <div class="row" style="margin-left: 0px; margin-right: 0px;">
                                <div class="col-sm-12">
                                    <h1>{{ $block->LoaiBlock->ten }}</h1>
                                </div>
                            </div>
                        </div>
                        @if($block->noidung == 'null')
                            <div class="col-sm-12 nomargin nopadding body-img">
                                @foreach($block->HinhAnh as $hinhanh)
                                    <img src="upload/hinhanh/{{ $hinhanh->url  }}" alt="{{ $block->tenblock }}">
                                @endforeach
                            </div>
                        @else
                            <div class="col-sm-5 nomargin nopadding ">
                                <div class="body-text" >
                                    {!! $block->noidung !!}
                                </div>
                            </div>
                            <div class="col-sm-7 nomargin nopadding body-img">
                                <div id="carousel-example-generic{{$key}}" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @for($i = 0; $i < count($block->HinhAnh); $i++)
                                            <li data-target="#carousel-example-generic{{$key}}" data-slide-to="{{ $i  }}" @if($i == 0) {{'class="active"' }} @endif></li>
                                        @endfor
                                    </ol>
                                    <div class="carousel-inner">
                                        @for($i = 0; $i < count($block->HinhAnh); $i++)
                                            <div class="item @if($i == 0) {{ 'active' }} @endif">
                                                <img src="upload/hinhanh/{{ $block->HinhAnh[$i]->url  }}" alt="{{ $block->tenblock }}">
                                            </div>
                                        @endfor

                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-generic{{$key}}" data-slide="prev">
                                        <span class="fa fa-angle-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic{{$key}}" data-slide="next">
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                @elseif ($block->hienthi == 1)
                    <div class="blockcontent row nomargin">
                        <div class="blockcontent-header">
                            <div class="row" style="margin-left: 0px; margin-right: 0px;">
                                <div class="col-sm-12">
                                    <h1>{{ $block->LoaiBlock->ten }}</h1>
                                </div>
                            </div>
                        </div>
                        @if($block->noidung == 'null')
                            <div class="col-sm-12 nomargin nopadding body-img">
                                @foreach($block->HinhAnh as $hinhanh)
                                    <img src="upload/hinhanh/{{ $hinhanh->url  }}" alt="{{ $block->tenblock }}">
                                @endforeach
                            </div>
                        @else
                            <div class="col-sm-7 nomargin nopadding body-img">
                                <div id="carousel-example-generic{{$key}}" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @for($i = 0; $i < count($block->HinhAnh); $i++)
                                            <li data-target="#carousel-example-generic{{$key}}" data-slide-to="{{ $i  }}" @if($i == 0) {{'class="active"' }} @endif></li>
                                        @endfor
                                    </ol>
                                    <div class="carousel-inner">
                                        @for($i = 0; $i < count($block->HinhAnh); $i++)
                                            <div class="item @if($i == 0) {{ 'active' }} @endif">
                                                <img src="upload/hinhanh/{{ $block->HinhAnh[$i]->url  }}" alt="{{ $block->tenblock }}">
                                            </div>
                                        @endfor
                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-generic{{$key}}" data-slide="prev">
                                        <span class="fa fa-angle-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic{{$key}}" data-slide="next">
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-5 nomargin nopadding ">
                                <div class="body-text" >
                                    {!! $block->noidung !!}
                                </div>
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection