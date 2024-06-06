@extends('admin.layouts.template')
@section('page_title')
    blood group
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>donar list</h4>
        <div class="card">
            <h5 class="card-header">Available Information</h5>
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
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($bloods as $blood)
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
          <!-- Bootstrap Table with Header - Light -->
    </div>
@endsection
