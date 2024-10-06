@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quan ly sinh vien /div></h3>

                    </div>
                    <div class="col-md-6">
                        <a href="{{route('sinhvien,create')}}" class="btn btn-primary float-end">them moi </a>

                    </div>

                </div>

            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>MA Sinh Vien</th>
                            <th>HO TEn</th>
                            <th>NGay Sinh</th>
                            <th>gioi tinh</th>
                            <th>dia chi</th>
                            <th>SDT </th>
                            <th>Thao TAc </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $Sinhvien as $sv )
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$sv->MaSV}}</td>
                            <td>{{$sv->HoTen}}</td>
                            <td>{{$sv->NgaySinh}}</td>
                            <td>{{$sv->GioiTinh}}</td>
                            <td>{{$sv->DiaChi}}</td>
                            <td>{{$sv->sdt}}</td>
                            <td>
                                
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>

                </table>

            </div>

        </div>

    </div>

@endsection