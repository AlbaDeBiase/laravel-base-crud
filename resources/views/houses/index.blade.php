@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Houses For Sale</h1>
        <a href="{{route('houses.create')}}">Inserisci</a>
        <div class="table">
            <div class="menu_table">
                <table>
                    <tr>
                        <th>id</th>
                        <th>type</th>
                        <th>mq</th>
                        <th>price</th>
                        <th>garden</th>
                        <th>more</th>
                    </tr>
                </table>
            </div>
            @foreach ($houses as $house)
                <table>
                    <tr>
                        <th>{{$house->id}}</th>
                        <th>{{$house->type}}</th>
                        <th>{{$house->mq}}</th>
                        <th>{{$house->price . ' '.'€'}}</th>
                        <th>{{$house->garden}}</th>
                        <th><button type="button" name="button"> <a href="{{route('houses.show',['house'=>$house->id])}}">See More</a></button></th>
                    </tr>
                </table>
            @endforeach
        </div>
    </div>
@endsection
