@extends('frontEnd/layout/baseClient')
@section('description', $duan->description)
@section('keywords', $duan->keyword)
@section('title', $duan->tenchude)
@section('content')
    <div class="content-wrapper" >
        <div class="main-duan">
            <div class="center">
                <img class="diver" src="upload/devider.png">
                <h2 class="nomargin duan-title">Dự án {{ $duan->tenchude }}</h2>
                <div class="duan-hinhanh">
                    <img src="upload/hinhanh/{{$duan->hinhanh}}">
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
                        @if($block->noidung == 'null' || $block->noidung == '<p>null</p>')
                            <div class="col-sm-12 nomargin  body-img">
                                @foreach($block->HinhAnh as $hinhanh)
                                    <img src="upload/hinhanh/{{ $hinhanh->url  }}" alt="{{ $block->tenblock }}">
                                @endforeach
                            </div>
                        @else
                            <div class="col-sm-5 nomargin  ">
                                <div class="body-text" >
                                    {!! $block->noidung !!}
                                </div>
                            </div>
                            <div class="col-sm-7 nomargin  body-img">
                                @if(count($block->HinhAnh) > 1)
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
                                @elseif(count($block->HinhAnh) == 1)
                                    <img src="upload/hinhanh/{{ $block->HinhAnh[0]->url  }}" alt="{{ $block->tenblock }}">
                                @endif
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
                        @if($block->noidung == 'null'  || $block->noidung == '<p>null</p>')
                            <div class="col-sm-12 nomargin  body-img">
                                @foreach($block->HinhAnh as $hinhanh)
                                    <img src="upload/hinhanh/{{ $hinhanh->url  }}" alt="{{ $block->tenblock }}">
                                @endforeach
                            </div>
                        @else
                            <div class="col-sm-7 nomargin  body-img">
                                @if(count($block->HinhAnh) > 1)
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
                                @elseif(count($block->HinhAnh) == 1)
                                    <img src="upload/hinhanh/{{ $block->HinhAnh[0]->url  }}" alt="{{ $block->tenblock }}">
                                @endif
                            </div>
                            <div class="col-sm-5 nomargin  ">
                                <div class="body-text" >
                                    {!! $block->noidung !!}
                                </div>
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
            <div class="blockcontent row nomargin">
                <div class="blockcontent-header">
                    <div class="row" style="margin-left: 0px; margin-right: 0px;">
                        <div class="col-sm-12">
                            <h1>Tài liệu dự án</h1>
                        </div>
                    </div>
                </div>

                @if(count($duan->TaiLieuDuAn) > 0)
                <div class="col-sm-12 nomargin ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên tài liệu</th>
                                <th>Ngày cập nhật</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($duan->TaiLieuDuAn as $key => $tailieu)
                                    <tr>
                                        <td>{{ $key+1  }}</td>
                                    <td>
                                        <a href="upload/tailieu/{{ $tailieu->url }}">{{ $tailieu->tentailieu }}</a>
                                    </td>
                                    <td>
                                        {{ $tailieu->updated_at }}
                                    </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection