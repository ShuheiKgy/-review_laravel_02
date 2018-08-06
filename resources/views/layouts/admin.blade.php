<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>管理者</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link type="text/css" rel="stylesheet" href="/css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<ul>
    <li><a href="/admin/user"></a>ユーザー一覧</li>
    <li><a href="/admin/message"></a>個別ユーザーへのメッセージ</li>
    <li><a href="{{ route('admin.logout') }}"></a>ログアウト</li>
</ul>

@yield('content')

</body>
</html>