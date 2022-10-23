<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
</head>

<body>
  <div class="todo">
        <form action="/create" method="post" class="flex between mb-30">
          @csrf
          <input type="text" class="input-add" name="content">
          <input class="button-add" type="submit" value="追加">
        </form>
        <table>
          <tbody><tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          <tr>
            
                  </tbody></table>
      </div>
</body>

</html>