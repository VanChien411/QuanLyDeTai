@extends('layouts.app')
@section('title')
    <title>Đề tài</title>
@endsection
@section('content')
<div class="card text-start p-2 mt-2 k ">
    <div class="row">
        <div class="col ">
            <h1 class="text-danger text-center m-3">Nguyên cứu khoa học</h1>
            <div class="table-responsive">
              
                <table class="table table-primary  table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Chuyên viên hướng dẫn</th>
                            <th scope="col">Sinh viên</th>
                            <th scope="col">Tiến độ</th>
                            <th scope="col">kết quả</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row">
                             
                                Cô Mai Trang
                            </td>
                            <td>
                                Lê Văn Chiến<br>
                                Thanh Hà
                            </td>
                            <td>Hoàn thành</td>
                            <td>Tốt</td>
                        </tr>
                       
                    </tbody>
                </table>
                <div class="card text-start"  >
                    <div class="" style="height: 100;">
                        <div class="col-3">
                            <img class="card-img-top" src={{ asset('storage/image/j8DreLcvUDpw6wmzh14519Mf1thv8jVHlvxph3jy.jpg
                            ') }} alt="Title">
                        </div>
                        <div class="col">
                            <div class="card-body " >
                                <h4 class="card-title">NHOM PHA HOAI</h4>
                             <div class="row">
                                <div class="col-8">
                                    <p class="card-text " >CAC NOI DUNG NGUYEN CUU</p>
                                    <div>Phan chia nhiem vu</div>
                                </div>
                                <div class="col-4">
                                    Tinh trang <br>
                                    <input type="checkbox" value="">
                                </div>
                             </div>
                            </div>
                        </div>
                     </div>
                    
                   
                </div>
            </div>

            

        </div>

    </div>
</div>
@endsection
