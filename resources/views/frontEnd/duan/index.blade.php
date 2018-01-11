@extends('frontEnd/layout/baseClient')
@section('title', $duan->tenchude)
@section('content')
    <div class="content-wrapper" >
        <div class="main-duan">
            <div class="center">
                <img src="upload/devider.png">
                <h2 class="nomargin duan-title">Dự án {{ $duan->tenchude }}</h2>
                <div class="duan-hinhanh">
                    <img src="upload/hinhanh/{{$duan->hinhanh}}">
                </div>
            </div>
            @foreach($duan->BlockContent as $block)
                <div class="blockcontent row nomargin">
                    <div class="blockcontent-header">
                        <div class="row" style="margin-left: 0px; margin-right: 0px;">
                            <div class="col-sm-4">
                                <h1>{{ $block->LoaiBlock->ten }}</h1>
                            </div>
                            <div class="col-sm-8">
                                <h2>{{ $block->tenblock }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 nomargin nopadding ">
                       <div class="body-text" >
                           <?php echo $block->noidung; ?>
                       </div>
                    </div>
                    <div class="col-sm-7 nomargin nopadding body-img">
                        <img src="upload/hinhanh/QJ9j-sf.jpg">
                    </div>
                </div>
            @endforeach
        </div>


    </div>

@endsection