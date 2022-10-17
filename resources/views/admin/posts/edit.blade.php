@extends('layouts.app')
@section('content')

   <div class="container">
       <form method="POST" action="{{route('admin.posts.update', ['post' => $post->id])}}">
           @csrf 
           @method('PUT')

           <h2 class="mb-3">Edit post</h2>
           <div class="mb-3">
               <label for="title">Title</label>
               <input  name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{old('title', $post->title)}}" required >

               @error('title')
                   <div class="invalid-feedback">{{$message}}</div>
               @enderror

           </div>
           <div class="mb-3">
               <label for="content">Content</label>
               <textarea class="form-control @error('title') is-invalid @enderror" name="content" id="content" required>{{old('content', $post->content)v}}</textarea>
                
               @error('title')
                   <div class="invalid-feedback">{{$message}}</div>
               @enderror
           </div>
           
             <button type="submit" class="btn btn-primary mt-3">Update</button>
       </form>
   </div>

@endsection