@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2xl">Add review for {{ $book->title }}</h1>
    <form method="POST" action="{{ route('books.reviews.store', $book) }}">
        @csrf
        <label for="review">Review</label>
        <textarea name="review" id="review" cols="30" rows="10" required class="input mb-4"></textarea>
        <label for="rating">Rating</label>
        <select name="rating" id="rating" required class="input mb-4" required>
            <option value="" disabled>Select rating</option>
            <option value="1">1 - Poor</option>
            <option value="2">2 - Fair</option>
            <option value="3">3 - Good</option>
            <option value="4">4 - Very Good</option>
            <option value="5">5 - Excellent</option>
        </select>
        <button type="submit" class="btn">Add review</button>
    </form>
@endsection
