@extends('layouts.index')

@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <table class="table table-sm table-striped table-hover bg-light">
            <tr class="thead-dark">
                <th class="text-center">ID</th>
                <th class="text-center">Họ tên</th>
                <th class="text-center">Ngày sinh</th>
                <th class="text-center">Giới tính</th>
                <th class="text-center">Email</th>
                <th class="text-center">Điện thoại</th>
                <th class="text-center">Hành động</th>
            </tr>
            @foreach ($cruds as $col)
            <tr>
                <td class="text-center">{{ $col->id }}</td>
                <td>{{ $col->name }}</td>
                <td class="text-center">{{ $col->date }}</td>
                <td class="text-center">{{ $col->gender }}</td>
                <td class="text-center">{{ $col->email }}</td>
                <td class="text-center">{{ $col->phone }}</td>
                <td class="text-center">
                    <a type="button" href="/{{ $col->id }}/edit" class="btn btn-warning">
                        <span class="far fa-edit mr-2"></span>Sửa
                    </a>
                    &nbsp;
                    <a href="/{{ $col->id }}/delete" type="button" class="btn btn-danger">
                        <span class="fas fa-trash mr-2"></span>Xóa
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
