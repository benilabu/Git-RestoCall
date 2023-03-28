
@extends('layouts/contentNavbarLayout')

@section('title', 'Cards basic   - UI elements')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

<style type="text/css">
		h1 {
			color:green;
		}
		.xyz {
			background-size: auto;
			text-align: center;
			padding-top: 100px;
		}
		.btn-circle.btn-sm {
			width: 30px;
			height: 30px;
			padding: 6px 0px;
			border-radius: 15px;
			font-size: 8px;
			text-align: center;
		}
		.btn-circle.btn-md {
			width: 50px;
			height: 50px;
			padding: 7px 10px;
			border-radius: 25px;
			font-size: 10px;
			text-align: center;
		}
		.btn-circle.btn-xl {
			width: 70px;
			height: 70px;
			padding: 10px 16px;
			border-radius: 35px;
			font-size: 12px;
			text-align: center;
		}
	</style>

@section('content')

<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Enregistrement Serveur</h5>
      
      </div>
      <div class="card-body">
        <form action="{{url ('/serveur/resgister_server')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">Nom</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input name="name_serveur" type="text" class="form-control" id="basic-icon-default-fullname" placeholder="" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">Prenom</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input name="firstname" type="text" id="basic-icon-default-company" class="form-control" placeholder="" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-email">Email</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
              <input name="email" type="text" id="basic-icon-default-email" class="form-control" placeholder="" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
              <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
            </div>
            <div class="form-text"> You can use letters, numbers & periods </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-phone">No Serveur</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-phone2" class="input-group-text"></i></span>
              <input name="no_serveur" type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="" aria-label="" aria-describedby="basic-icon-default-phone2" />
            </div>
          </div>
         
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>

<div class="xyz">
	<h4>Grand Buttons de Notification</h4>
	<button type="button" onclick="" class="btn btn-primary btn-circle btn-xl">Blue</button>
</div>


			
@endsection