<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
</head>
<body>
    <div>
        Admin Dashboard
        @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
            
        @endif
        @if (session('error'))
            <div>
                {{ session('error') }}
            </div>
            
        @endif
        @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
            
        @endif


            <a href={{ route('admin.logout') }} class="btn btn-danger">Logout </a>
    </div>
</body>
</html>