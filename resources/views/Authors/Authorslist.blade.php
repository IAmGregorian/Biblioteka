@extends('_layout.cork')
        
@section('content')
        <h1>Welcomeus to authorus listus</h1>
        <ul>
            @foreach ($authors as $author)
              <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="card-icon mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </div>
                    <li> <a href="{{ route('avtor.prikazi',['authorId' => $author->id]) }}"><h5 class="card-title mb-0">{{ $author->name }}</h5></a> </li>              
                  </div>
                </div>
              </div>
            @endforeach
        <ul>
@endsection