
@extends('layouts/contentNavbarLayout')

@section('title', 'Cards basic   - UI elements')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection


@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Enregistrement des tables</h5>
        <small class="text-muted float-end">Merged input group</small>
      </div>
      <div class="card-body">
        <form method="POST" action="{{url ('resgister_table')}}">
        @csrf
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">Nom de la table</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"></span>
              <input name="name_table" type="text" class="form-control" id="basic-icon-default-fullname" placeholder="" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">numero de table</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text"></span>
              <input name="no_table" type="number" id="basic-icon-default-company" class="form-control" placeholder="" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">Emplacement de la table</label>
            <select name="emplacement_table" id="emplacement_table" class="form-select form-select-lg">
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
            </select>
          </div>
         
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap Table with Header - Dark -->
<div class="card">
  <h5 class="card-header"> Table </h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>No ID</th>
          <th>Nom de la table</th>
          <th>numero de table</th>
          <th>Emplacement de la table</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      @foreach($list_table as $table)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$table->id}}</strong></td>
          <td>{{$table->name_table}}</td>
        
          <td><span class="badge bg-label-primary me-1">{{$table->no_table}}</span></td>
          <td><span class="badge bg-label-primary me-1">{{$table->emplacement_table}}</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('resgister_table.edit', $table->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <form action="{{ route('resgister_table.destroy', $table->id)}}" method="POST">
                @csrf 
                @method('DELETE')
                  <button class="dropdown-item" type="submit"><i class="bx bx-trash me-1"></i> Delete</button>
                </form>
                <a class="dropdown-item" href="{{-- {{ route('resgister_table.edit', $table->id)}} --}}"><i class="bx bx-printer me-1"></i> Imprimer</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>




			
@endsection