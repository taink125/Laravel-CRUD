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
            @foreach ($cruds as $crud)
            <tr>
                <td class="text-center">{{ $crud->id }}</td>
                <td>{{ $crud->name }}</td>
                <td class="text-center">{{ $crud->date }}</td>
                <td class="text-center">{{ $crud->gender }}</td>
                <td class="text-center">{{ $crud->email }}</td>
                <td class="text-center">{{ $crud->phone }}</td>
                <td class="text-center">
                    <a type="button" href="{{ route('main.edit', $crud->id) }}" class="btn btn-warning">
                        <span class="far fa-edit mr-2"></span>Sửa
                    </a>
                    <form action="{{ route('main.destroy', $crud->id) }}" method="POST" accept-charset="utf-">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"><span class="fas fa-trash mr-2"></span>Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
