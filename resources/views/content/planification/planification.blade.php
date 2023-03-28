@extends('layouts/contentNavbarLayout')

@section('title', 'Cards basic   - UI elements')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection


@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-body">
            <form method="POST" action="">
                @csrf
            <small class="text-light fw-semibold">Planification</small>
                <!-- Start partie nom de serveur -->
            <div class="mt-2 mb-3">
              <label for="largeSelect" class="form-label">Nom du serveur</label>
              <select id="largeSelect" class="form-select form-select-lg">
@foreach($list_user_serveur as $serveur)
                <option value="{{$serveur->id}}">{{$serveur->name}}</option>
@endforeach
              </select>
            </div>
          <!-- End partie nom de serveur -->
          <!-- Start partie checkoxes -->
          @foreach($list_table as $table)
           <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" value="{{$table->id}}"/>
              <label class="form-check-label" for="defaultCheck1">
                {{$table->name_table}}
                {{$table->no_table}}
              </label>
            </div>
          @endforeach
             <!--  End partie checkoxes -->
             <br>
             <button type="submit" class="btn btn-primary">Save</button>
            </form>
          </div>
        </div>
      </div>

   
</div>

@endsection

