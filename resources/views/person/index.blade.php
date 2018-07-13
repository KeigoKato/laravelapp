@extends("layouts.helloapp")

@section("title", "Person.index")

@section("menubar")
  @parent
  インデックスページ
@endsection

@section("content")
<table>
    <tr>
        <th>Person</th>
        <th>Board</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>
            {{$item->getdata()}}
        </td>
        <td>
            @if ($item->board != null)
            {{$item->board->getdata()}}
            @endif
        </td>
    </tr>
    @endforeach
</table>
@endsection

@section("footer")
copyright 2017 tuyano.
@endsection