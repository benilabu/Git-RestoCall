@extends('layouts/contentNavbarLayout')

@section('title', 'Cards basic   - UI elements')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')

<div class=""></div>
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Menu /</span> Cards Menu</h4>
   
    <div class="nav-align-top mb-4">
      <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true"><i class="tf-icons bx bx-home"></i> Entrée <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger">3</span></button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false"><i class="tf-icons bx bx-user"></i> Plat de Resistance</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-messages" aria-controls="navs-pills-justified-messages" aria-selected="false"><i class="tf-icons bx bx-message-square"></i> Desserts </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-test" aria-controls="navs-pills-justified-test" aria-selected="false"><i class="tf-icons bx bx-message-square"></i> Bonjours </button>
        </li>
      </ul>



      <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">

      
<!-- Grid Card -->
<h6 class="pb-1 mb-4 text-muted">Entrée</h6>
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
  @foreach($liste_menu as $menu)

  <div class="col">
    <div class="card h-100">
    <div class="card-body">
        <h5 class="card-title">{{$menu->name_plat}}</h5>
        <h6 class="card-subtitle text-muted">{{$menu->prix_plat}}$</h6>
        <img class="img-fluid d-flex mx-auto my-4" src='{{asset("public/assets/img/$menu->photo_plat")}} ' alt="Card image cap" />
        <p class="card-text">{{$menu->description_plat}}.</p>
        <a href="javascript:void(0);" class="card-link">Commander</a>
        <a href="javascript:void(0);" class="card-link">Voir Plus</a>
      </div>
      
    </div>
  </div>
  @endforeach

</div>
</div>

        <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
<!-- Grid Card -->
<h6 class="pb-1 mb-4 text-muted">Plat de Resistance</h6>
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
  <div class="col">
    <div class="card h-100">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
        <img class="img-fluid d-flex mx-auto my-4" src="{{asset('assets/img/elements/2.jpg')}}" alt="Card image cap" />
        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
        <a href="javascript:void(0);" class="card-link">Card link</a>
        <a href="javascript:void(0);" class="card-link">Another link</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
        <img class="img-fluid d-flex mx-auto my-4" src="{{asset('assets/img/elements/13.jpg')}}" alt="Card image cap" />
        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
        <a href="javascript:void(0);" class="card-link">Card link</a>
        <a href="javascript:void(0);" class="card-link">Another link</a>
      </div>
    </div>
  </div>
 <div class="col">
  <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
        <img class="img-fluid d-flex mx-auto my-4" src="{{asset('assets/img/elements/17.jpg')}}" alt="Card image cap" />
        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
        <a href="javascript:void(0);" class="card-link">Card link</a>
        <a href="javascript:void(0);" class="card-link">Another link</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
        <img class="img-fluid d-flex mx-auto my-4" src="{{asset('assets/img/elements/18.jpg')}}" alt="Card image cap" />
        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
        <a href="javascript:void(0);" class="card-link">Card link</a>
        <a href="javascript:void(0);" class="card-link">Another link</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
        <img class="img-fluid d-flex mx-auto my-4" src="{{asset('assets/img/elements/19.jpg')}}" alt="Card image cap" />
        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
        <a href="javascript:void(0);" class="card-link">Card link</a>
        <a href="javascript:void(0);" class="card-link">Another link</a>
      </div>
    </div>
  </div>
</div>
        </div>
        <div class="tab-pane fade" id="navs-pills-justified-messages" role="tabpanel">
          <p>
            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
            bears
            cake chocolate.
          </p>
          <p class="mb-0">
            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
            sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
            jelly.
          </p>
        </div>
      </div>
    </div>
  </div>





<!-- Masonry -->

<!--/ Card layout -->
@endsection
