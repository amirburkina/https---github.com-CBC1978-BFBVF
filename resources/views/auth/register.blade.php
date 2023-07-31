<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="msapplication-TileColor" content="#0E0E0E">
<meta name="template-color" content="#0E0E0E">
<link rel="manifest" href="manifest.json" crossorigin>
<meta name="msapplication-config" content="browserconfig.xml">
<meta name="description" content="Index page">
<meta name="keywords" content="index, page">
<meta name="author" content="">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard/imgs/template/favicon.svg') }}">
<link href="{{ asset('css/style.css?version=4.1') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  
</head>
<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
          <div class="preloader-inner position-relative">
            <div class="text-center"><img src="assets/imgs/template/loading.gif" alt="jobBox"></div>
          </div>
        </div>
      </div>
     
      <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
      <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
          <div class="mobile-header-content-area">
            <div class="perfect-scroll">
              <div class="mobile-search mobile-header-border mb-30">
                <form action="#">
                  <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
                </form>
              </div>
              <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start-->
                
              </div>
             
             
            </div>
          </div>
        </div>
      </div>
      <main class="main">
       
        <div class="box-content">
         
          <div class="row"> 
            <div class="col-lg-12"> 
              <div class="section-box">
                <div class="container"> 
                  <div class="panel-white mb-10">
                    <div class="box-padding">               
                      <div class="login-register"> 
                        <div class="row login-register-cover pb-250">
                          <div class="col-lg-6 col-md-4 col-sm-12 mx-auto">
                            <div class="form-login-cover">
                              <div class="text-center">
                                <p class="font-sm text-brand-2">Bienvenu </p>
                                <h2 class="mt-10 mb-5 text-brand-1">INSCRIPTION</h2>
                                <p class="font-sm text-muted mb-30">Creer un compte facilement et rapidement</p>
                               
                        <form class="login-register text-start mt-20" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label class="form-label" for="name">Nom *</label>
                                <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" required="" name="name" value="{{ old('name') }}" placeholder="Steven Job">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="first_name">Prenom *</label>
                                <input class="form-control @error('first_name') is-invalid @enderror" id="first_name" type="text" required="" name="first_name" value="{{ old('first_name') }}" placeholder="Steven Job">
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="user_phone">Telephone *</label>
                                <input class="form-control @error('user_phone') is-invalid @enderror" id="user_phone" type="text" required="" name="user_phone" value="{{ old('user_phone') }}" placeholder="Steven Job">
                                @error('user_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Email *</label>
                                <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" required="" name="email" value="{{ old('email') }}" placeholder="stevenjob@gmail.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="username">Nom d'utilisateur*</label>
                                <input class="form-control @error('username') is-invalid @enderror" id="username" type="text" required="" name="username" value="{{ old('username') }}" placeholder="Steven Job">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">Mot de passe *</label>
                                <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" required="" name="password" placeholder="************">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password_confirmation">Confirmer le mot de passe *</label>
                                <input class="form-control" id="password_confirmation" type="password" required="" name="password_confirmation" placeholder="************">
                            </div>
                            <div class="form-group">
                                <select class="form-select @error('role') is-invalid @enderror" aria-label="Default select example" name="role" required>
                                    <option selected></option>
                                    <option value="chargeur" {{ old('role') == 'chargeur' ? 'selected' : '' }}>Chargeur</option>
                                    <option value="transporteur" {{ old('role') == 'transporteur' ? 'selected' : '' }}>Transporteur</option>
                                </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="login_footer form-group d-flex justify-content-between">
                                <label class="cb-container">
                                    <input type="checkbox"><span class="text-small"> les politiques de confidentialité</span><span class="checkmark"></span>
                                </label>
                                <a class="text-muted" href="#">En savoir plus</a>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login"> S'inscrire</button>
                            </div>
                            <div class="text-muted text-center">Avez vous deja un compte? <a href="{{ route('login') }}">Connexion</a></div>
                        </form>
                    </div>
                    <div class="img-2"><img src="imgs/page/login-register/img-3.svg" alt="JobBox"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 

</div>
</main>
</body>
<script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{asset('js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/plugins/waypoints.js')}}"></script>
<script src="{{asset('js/plugins/magnific-popup.js')}}"></script>
<script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('js/plugins/select2.min.js')}}"></script>
<script src="{{asset('js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.circliful.js')}}"></script>
<script src="{{asset('js/plugins/charts/index.js')}}"></script>
<script src="{{asset('js/plugins/charts/xy.js')}}"></script>
<script src="{{asset('js/plugins/charts/Animated.js')}}"></script>
<script src="{{asset('js/plugins/armcharts5-script.js')}}"></script>
<script src="{{asset('js/main.js?v=4.1')}}"></script>
</html>
