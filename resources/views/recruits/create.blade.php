<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recruit create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>求人登録フォーム</h1>
    <form action="/recruits" method="post">
        @csrf
        <p>
            <label for="name">会社名</label>
            <input type="text" name="name">
        </p>
        <p>
            <label for="address">住所</label>
            <input type="text" name="address">
        </p>
        <p>
            <label for="phone">電話番号</label>
            <input type="text" name="phone">
        </p>
        <p>
            <label for="recruitoment">募集職種</label>
            <input type="text" name="recruitoment">
        </p>
        <p>
            <label for="workplace">勤務地</label>
            <input type="text" name="workplace">
        </p>
        <p>
            <label for="salary">給与</label>
            <input type="text" name="salary">
        </p>
        <p>
            <label for="note">会社概要</label>
            <input type="text" name="note">
        </p>
        <p>
            <label for="image_url">画像URL</label>
            <input type="text" name="image_url">
        </p>

        <input type="submit" value="登録">
        
    </form>
    <a href="{{ route('recruits.index') }}">戻る</a>
    
</body>

</html>
