<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
</head>

<body >
  <div class="container">
    <div class="card">
      <p class="title mb-15">Todo List</p>
        <form action="/create" method="post" class="flex between mb-30">
          @csrf
          <input type="text" class="input-add" name="todo">
          <input class="button-add" type="submit" value="追加">
        </form>
        @error('todo')
            <div class="mt-3">
              <p class="text-red-500">
                {{ $message }}
              </p>
            </div>
        @enderror
        <table>
          <tbody><tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          @foreach($todos as $todo)
          @csrf
          <tr>
            {{--作成日--}}
            <td>{{$todo-> created_at}}</td>
             {{--タスク--}}
             <td>
              <form action="/update" method="post" class="flex between mb-30">
                <input type="text" class="input-add" name="todo" value="{{$todo-> todo }}"></input>
              </form>
            </td>
            {{--更新--}}
            <td>
              <input class="button-add color_orange" type="submit" value="更新"></input>
            </td>
            {{--削除--}}
            <td>
             <form action="/delete/{{ $todo->id }}" method="post" name="todo">
              @csrf
             <button class="button-add color_green">削除</button>
              </form>
            </td>
          </tr>
          @endforeach
          </tbody>
        </table>

      

    </div>
  </div>
</body>

</html>


