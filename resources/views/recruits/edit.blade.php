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

        <div>
            <label for="name">会社名</label>
            <input type="text" name="name" id="name" value="{{ old('name', $recruit->name) }}">
        </div>
        <div>
            <label for="address">住所</label>
            <input type="text" name="address" id="address" value="{{ old('address', $recruit->address) }}">
        </div>
        <div>
            <label for="phone">電話番号</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone', $recruit->phone) }}">
        </div>
        <div>
            <label for="recruitoment">募集職種</label>
            <input type="text" name="recruitoment" id="recruitoment" value="{{ old('recruitoment', $recruit->recruitoment) }}">
        </div>
        <div>
            <label for="workplace">勤務地</label>
            <input type="text" name="workplace" id="workplace" value="{{ old('workplace', $recruit->workplace) }}">
        </div>
        <div>
            <label for="salary">給与</label>
            <input type="text" name="salary" id="salary" value="{{ old('salary', $recruit->salary) }}">
        </div>
        <div>
            <label for="note">会社概要</label>
            <input type="text" name="note" id="note" value="{{ old('note', $recruit->note) }}">
        </div>
        <div>
            <label for="image_url">画像URL</label>
            <input type="text" name="image_url" id="image_url" value="{{ old('image_url', $recruit->image_url) }}">
        </p>

        <input type="submit" value="更新">
    </form>
    <input type="button" value="戻る" onclick="location.href='/recruits/{{ $recruit->id }}'" class="btn btn-primary">
</body>
</html>