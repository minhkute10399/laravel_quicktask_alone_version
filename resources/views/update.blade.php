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
                        <a href="{{ route('post.index') }}">{{ trans('message.home') }}</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('post.create') }}">{{ trans('message.create_post') }}</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('tag.index') }}">{{ trans('message.tag_list') }}</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('change-languages', ['language' => 'en']) }}">{{ trans('message.english') }}</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('change-languages', ['language' => 'vi']) }}">{{ trans('message.vietnam') }}</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <form action="{{ route('post.update', $item->id) }}" method="POST" class="main-content-create">
                        @csrf
                        @method('PUT')
                        <h2>{{ trans('message.post_name') }}</h2>
                        <input type="text" placeholder="Post name ..." name="name" value="{{ $item->name }}">
                        <h2>{{ trans('message.description') }}</h2>
                        <textarea name="description" id="description" cols="30" rows="10"> {{ $item->description }}</textarea>
                        <h2>{{ trans('message.tag') }}</h2>
                       <div class="select-tag">
                        <select name="tag_id" id="tag_id">
                            @foreach ($tag as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                       </div>
                       <div class="btn-create">
                            <button  type="submit">{{ trans('message.update') }}</button>
                       </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
