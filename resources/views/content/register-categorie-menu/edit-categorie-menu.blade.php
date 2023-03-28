
@extends('layouts/contentNavbarLayout')

@section('title', 'Cards basic   - UI elements')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
<script src="{{asset('assets/js/ui-modals.js')}}"></script>
@endsection


@section('content')


<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Editer categorie menu</h5>
        <small class="text-muted float-end">Merged input group</small>
      </div>
      <div class="card-body">
        <form method="POST" action="{{url ('register_categorie_menu', $find_categorie->id)}}">
        @csrf
        @method('PUT')
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">Nom de la categorie</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"></span>
              <input name="name_categorie" type="text" class="form-control" id="basic-icon-default-fullname" value="{{$find_categorie->name_categorie}}"  aria-describedby="basic-icon-default-fullname2" />
            </div>
          </div>

         
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
			
@endsection