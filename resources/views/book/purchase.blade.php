@extends('templates.master')

@section('content')
    <!-- Content -->
    <h1 class="display-1">{{ $book->title }}</h1>
    <h6 class="display-6">{{ $book->author }}</h6>
    <h6 class="display-6">Rp. {{ $book->detail->price }},00</h6>
    <h6 class="display-6">Stock: {{ $book->detail->stock }}</h6>

    <form action="{{ route('update_stock', ['id' => $book->id ]) }}" method="POST">
        @csrf
        @method('PATCH')
        @if ($book->detail->stock > 0)
            <input type="submit" name="submit" value="Buy" class="btn btn-success">
        @else
            <input type="submit" value="Not available" class="btn btn-danger" disabled>
        @endif
    </form>
@endsection
