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
                <div class="main-content">
                    <div class="title">
                    @foreach ($item as $value)

                           <div class="stt-baiviet">
                            <h2>STT</h2>
                            <td>{{$loop->index}}</td>
                           </div>
                           <div class="title-baiviet">
                            <h2>Name</h2>
                            <td>{{$value->name}}</td>
                           </div>
                           <div class="tag-baiviet">
                            <h2>Tag</h2>
                            <td>{{$value->tag->name}}</td>
                           </div>

                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
