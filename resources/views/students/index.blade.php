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
    <div class="content">
        <div class="title mx-auto ">
        <b><h2>Students</h2></b>
        </div>          
              

        @foreach($students as $student)     
      <div>
            Name:{{$student->name}} - grade:{{$student->grade}} - note:{{$student->note}} - used:{{$student->used}}
      
      </div>
        @endforeach    
    </div
</div>

@endsection
            


 