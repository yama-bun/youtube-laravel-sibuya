@extends('layout')

@section('title', 'ブログ記事一覧')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ブログ記事一覧</h2>
        <table class="table table-striped">
            <tr>
                <th>記事番号</th>
                <th>日付</th>
                <th>タイトル</th>
                <th></th>
            </tr>
            <tr>
                <td>1</td>
                <td>2021/01/17</td>
                <td>テスト1</td>
                <td></td>
            </tr>
        </table>
    </div>
</div>
@endsection
