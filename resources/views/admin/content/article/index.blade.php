@extends('admin.dashboard')

@section('content')
    <h4>View All</h4>
    <hr>
    <div class="float-right mb-5">
        <a href="{{ route('article.create') }}">
            <button class="btn bg-sidebar text-white">+ Add New Content</button>
        </a>
    </div>
    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Tag</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($articles as $article)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{!! $article->title !!}</td>
                <td>{!! \Illuminate\Support\Str::limit($article->content, 20, '...') !!}</td>
                <td><img src="{{ asset('/storage/'.$article->image) }}" alt="" style="width: 100px"></td>
                <td>{!! $article->tag !!}</td>

                <td><a href="{{ route('article.edit',$article->id) }}" class="btn bg-sidebar text-white">Update</a></td>
                <td>
                    <form action="{{ route('article.destroy',$article->id) }}" method="post">
                        {{ csrf_field() }}
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
