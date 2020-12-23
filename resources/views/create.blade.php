<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="menu">
                <ul class="list-menu">
                    <li class="li-menu">
                        <a href="{{ route('index.index') }}">Home</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('index.create') }}">Create Post</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('tag.index') }}">Tag List</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <div class="main-content-create">
                    <h2>Post name</h2>
                    <input type="text" placeholder="Post name ..." name="name">
                    <h2>Description</h2>
                    <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    <h2>Tag</h2>
                    <select name="tag" id=""></select>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
