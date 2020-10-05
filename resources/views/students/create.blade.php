@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endif
        </div>
    @endif
    
    <!-- ja pobriso defoult gluposti i dodao samo ovo -->
    <div class="wrapper create-students">
    
    <h1>Create new student</h1>
    <form action="/students" method="POST">
        <!-- name of the student -->
        <label for="name">Student name:</label>
        <input type="text" id="name" name="name"></input>
        <br>
        <!-- grade ovde bi mi lepshe pasao slider ... -->
        <label for="grade">Student grade in your opinion (1-10):</label>
        <select name="grade" id="grade">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <!-- about student - note -->
        <label for="note">Note about this student(optional):</label>
        <input type="text" id="note" name="note"></input>
        <br>
        <!-- submit button -->
        <input type="submit" value="Submit new student">
    </form>
    






    </div>






</div>

@endsection
            


 