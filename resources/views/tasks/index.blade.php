@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          {{-- @can('isAdmin') --}}
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">作成者</th>
                <th scope="col">内容</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tasks as $item)
              <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->todo}}</td>
                <td>
                  <form action="/tasks/delete/{{ $item->id }}" method="post">
                    @csrf
                    <input type="submit" value="削除" class="btn btn-danger">
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{-- @endcan --}}
        </div>
    </div>
</div>
@endsection
