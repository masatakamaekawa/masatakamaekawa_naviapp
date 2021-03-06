@extends('layouts.main')

@section('title', '詳細画面')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@section('content')
    @include('partial.recruit')
    <table class="table-bordered mb-5 mt-3">
        <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>会社名</th>
                <td>
                    <p>{{ $recruit->name }}</p>
                </td>
            </tr>
            <tr>
                <th>住所</th>
                <td>{{ $recruit->address }}</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>{{ $recruit->phone }}</td>
            </tr>
            <tr>
                <th>募集職種</th>
                <td>{{ $recruit->recruitoment->name }}</td>
            </tr>
            <tr>
                <th>勤務地</th>
                <td>{{ $recruit->workplace }}</td>
            </tr>
            <tr>
                <th>給与</th>
                <td>{{ $recruit->salary }}</td>
            </tr>
            <tr>
                <th>会社概要</th>
                <td>{{ $recruit->note }}</td>
            </tr>
            <tr>
            <img src="{{ $recruit->image_url }}">
            </tr>
        </tbody>
    </table>
    <div id="map" style="height: 30vh"></div>
    <a href="{{ route('recruits.index')}}">戻る</a>
@endsection

@section('script')
    @include('partial.map')
    <script>
        L.marker([{{ $recruit->latitude }},{{ $recruit->longitude }}])
            .bindPopup("{{ $recruit->name }}", {closeButton: false})
            .addTo(map);
    </script>
    <div class="button-group">
        <input type="button" value="編集" onclick="location.href='/recruits/{{ $recruit->id }}/edit'" class="btn btn-success">
        <form action="/recruits/{{ $recruit->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="if(!confirm('削除しますか?')){return false}" class="btn btn-danger">削除</button>
        </form>
    </div>
</body>
@endsection