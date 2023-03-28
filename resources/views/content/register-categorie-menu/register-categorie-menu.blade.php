
@extends('layouts/contentNavbarLayout')

@section('title', 'Cards basic   - UI elements')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
<script src="{{asset('assets/js/ui-modals.js')}}"></script>
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
        <h5 class="mb-0">Enregistrement categorie menu</h5>
        <small class="text-muted float-end">Merged input group</small>
      </div>
      <div class="card-body">
        <form method="POST" action="{{url ('register_categorie_menu')}}">
        @csrf
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">Nom de la categorie</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"></span>
              <input name="name_categorie" type="text" class="form-control" id="basic-icon-default-fullname" placeholder="" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
            </div>
          </div>

         
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>

  <h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Liste /</span> Categorie
</h4>

<!-- Basic Bootstrap Table -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categorieModal">
            Launch modal
          </button>

            <!-- Modal -->
            <div class="modal fade" id="categorieModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBasic" class="form-label">Name</label>
                      <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailBasic" class="form-label">Email</label>
                      <input type="text" id="emailBasic" class="form-control" placeholder="xxxx@xxx.xx">
                    </div>
                    <div class="col mb-0">
                      <label for="dobBasic" class="form-label">DOB</label>
                      <input type="text" id="dobBasic" class="form-control" placeholder="DD / MM / YY">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

<!--/ Basic Bootstrap Table -->







<!-- Bootstrap Table with Header - Dark -->
<div class="card">
  <h5 class="card-header"> Table </h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>No ID</th>
          <th>Nom Categorie</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      @foreach($list_categorie as $categorie)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$categorie->id}}</strong></td>
          <td>{{$categorie->name_categorie}}</td>
        
          <td><span class="badge bg-label-primary me-1">Serveur</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('register_categorie_menu.edit', $categorie->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <form action="{{ route('register_categorie_menu.destroy', $categorie->id)}}" method="POST">
                @csrf 
                @method('DELETE')
                 
                  <button class="dropdown-item" type="submit"><i class="bx bx-trash me-1"></i> Delete</button>
                 
                </form>
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