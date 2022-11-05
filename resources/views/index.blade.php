@extends('layouts.main')

@section('container')

 {{-- alert for success/failed to upload & delete notif --}}


    <div class="row" data-masonry='{"percentPosition": true }'>
       
          {{-- using looping to get / show image after image been uploading --}}
          @foreach ($photos as $photo)
              
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="card">
              {{-- <svg class="bd-placeholder-img card-img" width="100%" height="260" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Card image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Card image</text></svg> --}}
              <img src="{{ $photo->photo_url }}" alt="Images Placeholder" class="card-img img-content img-rounded" role="img">
              <div class="overlay">
                
                <h5 class="text-pic">{{ $photo->label }}</h5>
                
              </div>

              <div class="delete-button">
                <form action="/delete/{{ $photo->id }}" method="post">
                  @csrf
                  <button type="submit" class=" bt-delete btn btn-outline-danger" onclick="return confirm('Are you sure ?')">delete</button>
                </form>
                {{-- <button type="button" class="btn btn-outline-danger bt-delete" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="pass_id_to_modal({{ $photo->id }})">delete</button> --}}
              </div>

            </div>
          </div>

          @endforeach


          
        
    </div>
@endsection