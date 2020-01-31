<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Danh sách thành viên</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="text-center text-white mt-3">
            <h1>Quản Lý Thành Viên</h1>
            <hr />
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row mt-15 mb-3">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 d-flex">
                        <div class="w-50">
                            <a href="{{ route('main.create') }}" class="btn btn-primary bg-primary">Thêm thành viên</a>
                        </div>
                    </div>
                </div>
                <div class="row mt-15">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
