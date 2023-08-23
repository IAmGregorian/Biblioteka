@extends('_layout.cork')
        
@section('content')
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<div class="fq-header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 align-self-center order-md-0 order-1">
                                <div class="faq-header-content">
                                    <h1 class="mb-4">Добродошли у библиотеку</h1>
                                    <div class="row">
                                        <div class="col-lg-5 mx-auto">
                                            <div class="autocomplete-btn">
                                                <input id="example2" class="form-control">
                                                <button class="btn btn-primary">Пребарај</button>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-4 mb-0">Пребарајте кроз информациите на библиотеката</p>
                                </div>
                            </div>
                        </div>
                    </div>
</div>

                <div class="faq container">

                    <div class="faq-layouting layout-spacing">

                        <div class="kb-widget-section">

                            <div class="row justify-content-center">

                                <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-icon mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                            </div>
                                            <h5 class="card-title mb-0"><a href="{{route('korisnik.lista')}}">Корисници</a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-icon mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                            </div>
                                            <a href="{{ route('avtor.lista') }} "><h5 class="card-title mb-0">Автори</h5></a>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-icon mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                            </div>
                                            <a href="{{ route('kniga.lista') }}"><h5 class="card-title mb-0">Книги</h5></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-icon mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                            </div>
                                            <h5 class="card-title mb-0">Зачленување</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
</body>
</html>
@endsection