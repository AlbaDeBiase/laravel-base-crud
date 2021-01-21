@extends('layouts.app')

@section('content')

    <div class="form">
        <h1>New House</h1>
      <form method="POST" action="{{route('houses.store')}}">
          @csrf

          @method('POST')
          <!--
          <label>id</label>
          <input type="text"  name="id" placeholder="">
      -->

        <label>Type</label>
        <input type="text"  name="type" placeholder="">

        <label>Mq</label>
        <input type="text" name="mq" placeholder="">

        <label>Price</label>
        <input type="text" name="price" placeholder="">

        <label>Garden</label>
        <input type="text" name="garden" placeholder="">

        <button type="submit" name="button">Submit</button>
      </form>
    </div>


@endsection
