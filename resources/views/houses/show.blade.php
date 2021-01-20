@extends('layouts.app')

@section('content')



<div class="container">
    <h1>House Detail</h1>
    <div class="table_detail">
        <div class="menu_table_detail">
            <table>
                <tr>
                    <th>id</th>
                    <th>type</th>
                    <th>mq</th>
                    <th>price</th>
                    <th>garden</th>
            
                </tr>
            </table>
        </div>
        <table>
            <tr>
                <th>{{$house->id}}</th>
                <th>{{$house->type}}</th>
                <th>{{$house->mq}}</th>
                <th>{{$house->price. ' '.'€'}}</th>
                <th>{{$house->garden}}</th>

            </tr>
        </table>
    </div>
</div>


@endsection
