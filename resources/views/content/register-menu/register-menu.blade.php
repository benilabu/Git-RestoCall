@extends('layouts/contentNavbarLayout')

@section('title', ' Vertical Layouts - Forms')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection
{{-- @section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection --}}


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

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Menu resto</h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"> Enregistrement menu </h5> <small class="text-muted float-end"> menu </small>
      </div>
      <div class="card-body">
        <form method="post" action="{{url ('resgister_menu')}}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nom du plat</label>
            <input name="name_plat" type="text" class="form-control" id="basic-default-fullname" placeholder="" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-company">numéro du plat</label>
            <input name="no_plat" type="text" class="form-control" id="basic-default-company" placeholder="" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-email">Prix</label>
            <div class="input-group input-group-merge">
              <input name="prix_plat" type="number" id="" class="form-control"  />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-phone">Temps de cuisson</label>
            <input name="time_cuisson" type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="" />
          </div>
          <div class="mb-3">
          <label for="exampleFormControlSelect1" class="form-label">Categorie</label>
          <select name="categorie_plat" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
          <option selected>Open this select menu</option>  
          @foreach($liste_categorie as $categorie)
            <option value="{{$categorie->id}}">{{$categorie->name_categorie}}</option>
            @endforeach
          </select>

        </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-message">Description</label>
            <textarea name="description_plat" id="basic-default-message" class="form-control" placeholder=""></textarea>
          </div>
          <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
          <div class="button-wrapper">
            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
              <span class="d-none d-sm-block">Upload new photo</span>
              <i class="bx bx-upload d-block d-sm-none"></i>
              <input required name="photo_plat" type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
            </label>
            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
              <i class="bx bx-reset d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Reset</span>
            </button>

            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
          </div>
        </div>
      </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
