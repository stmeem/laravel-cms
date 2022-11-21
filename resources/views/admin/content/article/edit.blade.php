@extends('admin.dashboard')

@section('content')
    <h4>Update Content</h4>
    <hr>

    <div>
        <form action="{{ route('article.update',$article->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <form>
                <div class="form-group">
                    <label for="">Enter Title</label>
                    <input type="text" id="" aria-describedby="" name="title"
                           class="form-control @error('title') is-invalid @enderror" value="{{ $article->title }}">
                </div>

                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="">Enter image</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                           id="" name="image">
                </div>

                @error('image')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="">Enter Content</label>
                    <textarea name="content" id="" cols="30" rows="10"
                              class="@error('content') is-invalid @enderror form-control">
                        {{ $article->content }}
                    </textarea>
                </div>

                @error('content')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="">Enter Tag</label>
                    <input type="text" id="" aria-describedby="" name="tag"
                           class="form-control @error('tag') is-invalid @enderror" value="{{ $article->tag }}">
                </div>

                @error('tag')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn bg-sidebar text-white" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
