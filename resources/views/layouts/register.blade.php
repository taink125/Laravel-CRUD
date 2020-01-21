<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng ký thành viên</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
</head>

<body class="bg-info">
    <div class="container">
        <div class="text-center">
            <h1>Thêm Thành Viên</h1>
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
                        <form action="{{ route('main.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Họ tên :</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh :</label>
                                <input type="date" name="date" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Giới tính :</label>
                                <select class="form-control" name="gender" required="required">
                                    <option>Nam</option>
                                    <option>Nữ</option>
                                    <option>Khác</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Email :</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Điện thoại :</label>
                                <input type="text" name="phone" class="form-control" />
                            </div>
                            <br/>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Thêm</button>&nbsp;
                                <a href="{{ route('main.index') }}" class="btn btn-danger">Hủy Bỏ</a>
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
