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
    <div class="wrapper student-details">    
        <h1><b>Student:</b> {{$student->name}}</h1>
        <p class="used"><b>Used comments so far:</b> {{$student->used_comments}}</p>
        <p class="about_student"><b>about:</b> {{$student->about_student}}</p>
        <p class="categories"><b>Categories</b></p>
        <ul>
            @foreach($student->categories as $category)
                <li>{{$category}}</li>
            @endforeach
        
        </ul>


        <p class="date"><b>created at(m.d.Y):</b> {{($my_var = date("m.d.Y",strtotime($student->created_at)))}}</p>
        <a href="/students" class="btnStack">Back to all students</a><br>
        <a href="/students"><button>&lt; &lt; Back to all students</button></a>            
    </div>   
    
    
</div>

@endsection
            


 