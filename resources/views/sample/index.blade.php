@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="" method="get">
            <div class="row">
              <div class="form-group">
                <input type="text" name="keyword" id="keyword" class="form-control">
              </div>
              <button id="s" type="submit" class="btn btn-primary btn-block font-weight-bold">Search</button>
            </div>
          </form>
          <a href="{{ route('sample.export', ['keyword' => $keyword]) }}" class="btn btn-primary">送信</a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Title</th>
                <th>Content</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($samples as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->content }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
