{{--  子レイアウト  --}}
@extends('layout.helloapp')

@section('title','Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <P>ここが本文のコンテンツです</P>
    <table>
        @foreach ($data as $item)
            <tr>
                <th>{{$item['name']}}</th>
                <td>{{$item['mail']}}</td>
            </tr>
        @endforeach
    </table>

    {{--  @each('components.item', $data, 'item',)  --}}
    
    {{--  <P>必要なだけ記述します</P>

    @component('components.massage')
        @slot('msg_title')
            CAUTION
        @endslot

        @slot('msg_content')
            これはメッセージの表示です。
        @endslot
    @endcomponent  --}}



@endsection


@section('footer')
    copyright 2020 misaki
@endsection

