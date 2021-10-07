<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auction edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>求人更新フォーム</h1>
    <form action="/recruits/{{ $recruit->id }}" method="post">
        @csrf

        @method('PATCH')
        <p>
            <label for="name">会社名</label>
            <input type="text" name="name" value="{{ $recruit->name }}">
        </p>
        <p>
            <label for="address">住所</label>
            <input type="text" name="address" value="{{ $recruit->address }}">
        </p>
        <p>
            <label for="phone">電話番号</label>
            <input type="text" name="phone" value="{{ $recruit->phone }}">
        </p>
        <p>
            <label for="recruitoment">募集職種</label>
            <input type="text" name="recruitoment" value="{{ $recruit->recruitoment }}">
        </p>
        <p>
            <label for="workplace">勤務地</label>
            <input type="text" name="email" value="{{ $recruit->workplace }}">
        </p>
        <p>
            <label for="salary">給与</label>
            <input type="text" name="salary" value="{{ $recruit->salary }}">
        </p>
        <p>
            <label for="note">会社概要</label>
            <input type="text" name="note" value="{{ $recruit->note }}">
        </p>
        <p>
            <label for="image_url">画像URL</label>
            <input type="text" name="image_url" value="{{ $recruit->image_url }}">
        </p>

        <input type="submit" value="更新">
    </form>
    <input type="button" value="戻る" onclick="location.href='/recruits/{{ $recruit->id }}'" class="btn btn-primary">
</body>
</html>