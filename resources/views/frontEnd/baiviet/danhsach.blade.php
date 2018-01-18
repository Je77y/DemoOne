@extends('frontEnd/layout/baseClient')
@section('description', $chude->description)
@section('keywords', $chude->keyword)
@section('title', 'Danh sách bài viết')
@section('content')
    <div class="content-wrapper" >
        <div class="container">
            <div class="row mainbox">
                <div class="col-sm-9">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <div class="baiviet-chude" id="chu_de">
                                <span>Chủ đề </span><a href="/chude/{{ $chude->id  }}">{{$chude->tenchude}}</a>
                            </div>

                            <div class="baiviet-content" id="baiviet_chude">
                                @foreach($dsbaiviet as $baiviet)
                                <div class="block-content row nomargin">
                                    <div class="content-img col-sm-4  nomargin nopadding center">
                                        <img src="upload/hinhanh/{{ $baiviet->hinhanh }}" alt="{{ $baiviet->hinhanh }}" >
                                    </div>
                                    <div class="content-text col-sm-8 nomargin nopadding">
                                        <div class="content-title">
                                            <a href="/baiviet/{{ $baiviet->slug }}">{{ $baiviet->tenbaiviet }}</a>
                                        </div>
                                        <div class="content-tomtat">
                                            {{ $baiviet->tomtat }}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="row">
                            <div class="center">
                                <a href="/chude/{{ $chude->id  }}/{{ $soluong + 1  }}" class="btn btn-sm btn-primary">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="container-common">
                        <div class="fb-page" data-href="https://www.facebook.com/duanhothanoi/?modal=admin_todo_tour" data-width="260" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/duanhothanoi/?modal=admin_todo_tour" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/duanhothanoi/?modal=admin_todo_tour">Bất Động Sản The Life Group</a>
                            </blockquote>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection
@section('js')
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

@endsection
