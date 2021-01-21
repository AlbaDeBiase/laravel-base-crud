@extends('layouts.app')

@section('content')

    <div class="form">
        <h1>New House</h1>
      <form method="POST "action="{{route('houses.store')}}">
          @csrf
        <label>Type</label>
        <input type="text"  name="type" placeholder="">

        <label>Mq</label>
        <input type="text" name="mq" placeholder="">

        <label>Price</label>
        <input type="text" name="mq" placeholder="">

        <label>Garden</label>
        <input type="text" name="garden" placeholder="">

        <button type="submit" name="button">Submit</button>
      </form>
    </div>


@endsection
