
@extends('layouts/contentNavbarLayout')

@section('title', 'Edit   -Table')

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
        <form method="POST" action="{{url ('resgister_table', $find_table->id)}}">
        @csrf
        @method('PUT')
          <div class="mb-3">
            <label class="form-label" for="">Nom de la table</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"></span>
              <input name="name_table" type="text" class="form-control" id="" value="{{$find_table->name_table}}"  aria-describedby="basic-icon-default-fullname2" />
            </div>
        </div>
            <div class="mb-3">
            <label class="form-label" for="">No table</label>
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"></span>
                <input name="no_table" type="text" class="form-control" id="" value="{{$find_table->no_table}}"  aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="">Emplacement table</label>
              <select name="emplacement_table" id="emplacement_table" class="form-select form-select-lg">
                <option value="{{$find_table->emplacement_table}}"> {{$find_table->emplacement_table}}</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
              </select>
          </div>
         

         
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
			
@endsection