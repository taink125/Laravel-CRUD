<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sửa thành viên</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
</head>

<body class="bg-info">
    <div class="container">
        <div class="text-center text-white text-uppercase mt-3">
            <h1>Sửa thông tin thành viên</h1>
            <hr/>
        </div>
        <div class="row">
            <div class="col-sm-8 col-md-5 col-12 m-auto">
                <div class="panel panel-warning">
                    <div class="panel-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-group">
                                    @foreach($errors->all() as $error)
                                        <li class="list-group-item">
                                            {{ $error }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/{{ $cruds->id }}/update-crud" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Họ tên :</label>
                                <input type="text" name="name" class="form-control" value="{{ $cruds->name }}" />
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh :</label>
                                <input type="date" name="date" class="form-control" value="{{ $cruds->date }}" />
                            </div>
                            <div class="form-group">
                                <label>Giới tính :</label>
                                <select class="form-control" value="{{ $cruds->gender }}" name="gender" required="required">
                                    <option>Nam</option>
                                    <option>Nữ</option>
                                    <option>Khác</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Email :</label>
                                <input type="text" name="email" class="form-control" value="{{ $cruds->email }}" />
                            </div>
                            <div class="form-group">
                                <label>Điện thoại :</label>
                                <input type="text" name="phone" class="form-control" value="{{ $cruds->phone }}" />
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning">Cập nhật</button>&nbsp;
                                <a href="/" class="btn btn-danger">Hủy Bỏ</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
