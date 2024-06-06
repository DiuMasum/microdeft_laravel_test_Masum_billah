@extends('admin.layouts.template')
@section('page_title')
    blood group
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>blood group</h4>
        <div class="card">
            <h5 class="card-header">Available blood group Information</h5>
            @if (session()->has('message'))
                <div class="alert alret-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-light">
                  <tr>
                    <th>Id</th>
                    <th>Blood Group</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($bloods as $blood)
                    <tr>
                        <td>{{ $blood->id }}</td>
                        <td>{{ $blood->group }}</td>
                        <td>
                            <a href="{{ route('editblood', $blood->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('deleteblood', $blood->id) }}" class="btn btn-warning">Delete</a>
                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
          <!-- Bootstrap Table with Header - Light -->
    </div>
@endsection
