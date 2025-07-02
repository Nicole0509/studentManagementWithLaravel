@extends('layouts.app')

@section('content')
    <section>
        <h1>About us</h1>
        <p>This is a simple layout with a sidebar and main content area.</p>  
        
        <p>Student ID: {{ $id }}</p>
        <p>Student Name: {{ $name }}</p>
    </section>
@endsection

@section('scripts')
<script>
    alert('hello this is the page');
</script>
    
@endsection

