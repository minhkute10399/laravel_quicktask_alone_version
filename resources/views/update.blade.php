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
                        <a href="{{ route('post.index') }}">Home</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('post.create') }}">Create Post</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('tag.index') }}">Tag List</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <form action="{{ route('post.update', $item->id) }}" method="POST" class="main-content-create">
                        @csrf
                        @method('PUT')
                        <h2>Post name</h2>
                        <input type="text" placeholder="Post name ..." name="name" value="{{ $item->name }}">
                        <h2>Description</h2>
                        <textarea name="description" id="description" cols="30" rows="10"> {{ $item->description }}</textarea>
                        <h2>Tag</h2>
                       <div class="select-tag">
                        <select name="tag_id" id="tag_id">
                            @foreach ($tag as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                       </div>
                       <div class="btn-create">
                            <button  type="submit">Update</button>
                       </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
