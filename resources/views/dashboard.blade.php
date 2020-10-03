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
            <p> 
        <!-- ovaj $loop->index ima svaki loop a strelicu koristimo zato 
        sto je loop object a ne array nem pojma sha to znaci -->
        Student: Broj{{$loop->index}} {{$student['name']}} - Grade:{{$student['grade']}}
        
                <!-- ovo vazi samo za prvog u loop (span btw znaci da ostajemo u liniji)-->
                @if($loop->first)
                    <span>
                    ovo je prvi u loop
                    </span>
                @endif
                <!-- ovo vazi samo za zadnjeg u loop (span btw znaci da ostajemo u liniji)-->
                @if($loop->last)
                    <span>
                    ovo je zadnji u loop
                    </span>
                @endif
            </p>
        @endforeach    
    </div
</div>

@endsection
            


 