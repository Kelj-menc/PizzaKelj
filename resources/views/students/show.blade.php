@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    
    
    <!-- ja pobriso defoult gluposti i dodao samo ovo -->
    <div class="wrapper student-details">    
        <h1><b>Student:</b> {{$student->name}}</h1>
        <p class="used"><b>Used comments so far:</b> {{$student->used_comments}}</p>
        <p class="about_student"><b>about:</b> {{$student->about_student}}</p>
        <p class="gender"><b>gender:</b> {{$student->gender}}</p>
        <p class="categories"><b>Categories</b></p>
        <ul>          
            @if(!$student->categories)
                <p>Nemash kategorije selected kako mislis da napravish comment???</p>  
                @else
                    @foreach($student->categories as $category)
                        <li>{{$category}}</li>
                    @endforeach     
            @endif   
        </ul>
        
        <p class="date"><b>created at(m.d.Y):</b> {{($my_var = date("m.d.Y",strtotime($student->created_at)))}}</p>
        <!-- delete student button -->
        <!-- oldd:        <form action="/students/{{ $student->id}}" method="POST">       -->
        <form action="{{ route('students.destroy', $student->id)}}" method="POST">
        @csrf 
        @method('DELETE')
        <button>delete student</button>
        </form>
        <br />
        <!-- back button -->
        <a href="/students" class="btnStack">Back to all students</a><br>
        <a href="/students"><button>&lt; &lt; Back to all students</button></a>            
    </div>   
    
    
</div>

@endsection
            


 