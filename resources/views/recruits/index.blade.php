@extends('layouts.main')

@section('title', '会社一覧')

@section('content')
    @if (!empty($recruits))
        <ul>
            @foreach ($recruits as $recruit)
                <li class="list-unstyled border mb-5 pl-3 shadow">
                    @include('partial.recruit')
                </li>
            @endforeach
        </ul>
    @endif
    <div class="d-flex justify-content-center">
        {{ $recruits->links() }}
    </div>
    <a href="/recruits/create">求人登録</a>
    @endsection