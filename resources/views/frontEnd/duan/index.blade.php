@extends('frontEnd/layout/baseClient')
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
            <div class="blockcontent row nomargin">
                <div class="blockcontent-header">
                    <div class="row" style="margin-left: 0px; margin-right: 0px;">
                        <div class="col-sm-4">
                            <h1>TỔNG QUAN DỰ ÁN</h1>
                        </div>
                        <div class="col-sm-8">
                            <h2>SUNGROUP ĐỊA TRUNG HẢI</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 nomargin nopadding ">
                   <div class="body-text" >
                       Sungroup Địa Trung Hải - Khu tổ hợp Thương mại Dịch vụ và Du lịch ven biển phía Tây Nam đảo Phú Quốc, nơi được sinh ra để trở thành Địa Trung Hải của Việt Nam, mang hình dáng, phong cách và văn hóa của Địa Trung Hải đương đại về thổi hồn thêm hương sắc cho Đảo Ngọc Phú Quốc! Mang trong mình những tâm huyết và khát khao của Tập đoàn Sungroup trong việc xây dựng và phát triển quê hương, mang những tinh hoa văn hóa và kiến trúc nhân loại về đến quê nhà, Sungroup Địa Trung Hải dự kiến sẽ trở thành một thị trấn ven biển đông đúc nhất tại Phú Quốc, thu hút đông đảo dân cư và
                   </div>
                </div>
                <div class="col-sm-7 nomargin nopadding body-img">
                    <img src="upload/86vS_anh-3d-du-an-sunhome-phu-quoc.jpg">
                </div>
            </div>

            <div class="blockcontent row nomargin">
                <div class="blockcontent-header">
                    <div class="row" style="margin-left: 0px; margin-right: 0px;">
                        <div class="col-sm-4">
                            <h1>TỔNG QUAN DỰ ÁN</h1>
                        </div>
                        <div class="col-sm-8">
                            <h2>SUNGROUP ĐỊA TRUNG HẢI</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 nomargin nopadding body-img">
                    <img src="upload/86vS_anh-3d-du-an-sunhome-phu-quoc.jpg">
                </div>
                <div class="col-sm-5 nomargin nopadding ">
                    <div class="body-text" >
                        Sungroup Địa Trung Hải - Khu tổ hợp Thương mại Dịch vụ và Du lịch ven biển phía Tây Nam đảo Phú Quốc, nơi được sinh ra để trở thành Địa Trung Hải của Việt Nam, mang hình dáng, phong cách và văn hóa của Địa Trung Hải đương đại về thổi hồn thêm hương sắc cho Đảo Ngọc Phú Quốc! Mang trong mình những tâm huyết và khát khao của Tập đoàn Sungroup trong việc xây dựng và phát triển quê hương, mang những tinh hoa văn hóa và kiến trúc nhân loại về đến quê nhà, Sungroup Địa Trung Hải dự kiến sẽ trở thành một thị trấn ven biển đông đúc nhất tại Phú Quốc, thu hút đông đảo dân cư và
                    </div>
                </div>

            </div>
        </div>


    </div>

@endsection