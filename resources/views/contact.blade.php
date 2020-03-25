@extends('layout/app')

@section('contact')



    <h1>Fruits list :</h1> <br>
    <ol>
        
    @if( count($fruits) ) 


        @foreach ( $fruits as $fruit )
            <li>{{ $fruit }}</li>
        @endforeach


    @endif

    </ol>



@stop


{{-- @section('js')

    <script>
        alert("'this page is for you!!'");
    </script>
    
@stop --}}