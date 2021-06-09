<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>

<body>
  <p>{{$txt}}</p>
  @if (count($errors) > 0)
  <p>入力に問題があります</p>
  @endif
  <form action="/hello" method="post">
    <table>
      @csrf
      @if($errors->has('txt'))
      <tr>
        <th>ERROR</th>
        <td>{{$errors->first('txt')}}</td>
      </tr>
      @enderror
      <tr>
        <th>txt:</th>
        <td>
          <input type="text" name="txt" value="{{ old('txt') }}">
        </td>
      </tr>
    </table>
    <input type="submit" value="送信">
  </form>
</body>

</html>