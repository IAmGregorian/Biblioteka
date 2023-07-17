@extends('_layout.cork')
        
@section('content')

        <h1>Welcomeus to bookus listus</h1>
        <ul>
            <div class="faq container">
            @foreach ($books as $book)
            

<div class="faq container">

    <div class="faq-layouting layout-spacing">

        <div class="kb-widget-section">

            <div class="row justify-content-center">

                <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-icon mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            </div>
                        <h5 class="card-title mb-0"><a href="{{ route('kniga.prikazi',['bookId' => $book->id]) }}">{{ $book->title }} </a></h5>
                    </div>
                </div>
            </div>
        
    </div>
            
            @endforeach
        </div>
        <ul>

@endsection