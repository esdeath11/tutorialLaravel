@extends('header')

@section('content')

<br>
<div class="container">
    
<form action="{{ route('update',request()->segment(count(request()->segments()))) }}" method="post">
    @csrf
        <div class="form-group">
            <label for="">Title</label>
        <input type="text" class="form-control" value="{{$all['title']}}" name="title" id="" aria-describedby="helpId" placeholder="">
            <br>
            <label for="">Author</label>
        <input type="text" class="form-control" value="{{$all['author']}}" name="author" id="" aria-describedby="helpId" placeholder="">

        </div>
        <div class="form-group">
          <label for="">Text</label>
        <textarea class="form-control" name="text" id="" rows="3">{{$all['text']}}</textarea>
        </div>
        Image Url<br>
    <input value="{{$all['image']}}" type="text" name="image">
        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a name="" id="" class="btn btn-primary" style="background-color: red" href="{{route('index')}}" role="button">Kembali</a>
    </form>

    


    
</div>
@endsection
