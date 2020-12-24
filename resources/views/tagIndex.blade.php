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
                        <a href="{{ route('tag.create') }}">Create Tag</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <div class="main-content">
                    <table class="table-content">
                        <tr>
                          <th>STT</th>
                          <th>Tag Name</th>
                          <th>Action</th>
                        </tr>
                        @foreach ($item as $value)
                        <tr>
                            <td>{{ $loop->index }}</td>
                            <td>{{ $value->name }}</td>
                            <td class="btn">
                                <a href="{{ route('tag.edit', $value->id) }}">
                                    <img src="{{ asset('images/edit.png') }}" alt="">
                                </a>
                                <form action="{{ route('tag.destroy', $value->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn-delete" onclick="return confirm('Want to delete ??')">
                                            <img src="{{ asset('images/trash.png') }}" alt="">
                                        </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                      </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
