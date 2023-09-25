<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LMOS</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('../css/welcome.css') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body id="background_link">
        <div class="container" id="card_link">
            <div class="d-flex flex-row align-items-center m-4" id="card_link2">
                <div class="p-5 m-3 card bg-primary text-white shadow rounded-2 flex-fill">
                    <div class="d-flex justify-content-center">
                        <div><h1 class="text-center text-white" id="title"><span><img src="{{ asset('/images/logo.png') }}" alt="lmos-logo" id="logo"></span>LMOS</h1></div>
                    </div>
                    <p class="mb-5" id="sub">LGU Management and Operations System</p>
                    <div id="data_field">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-solid fa-user"></i></span>
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="{{ old('name') }}" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-solid fa-key"></i></span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <button type="submit" class="btn btn-light btn-primary-outline text-primary form-control">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center">
                            <div class="flex-fill mx-2">
                                @if (Route::has('password.request'))
                                <button class="form-control text-danger" onclick="window.location='{{ route('password.request') }}'">{{ __('Forgot Your Password?') }}</button>
                                @endif
                            </div>
                            <div class="flex-fill mx-2">
                                <button class="form-control text-success" onclick="window.location='{{ route('register') }}'">Don't have an account?</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="">
                <div class="p-2 m-2 ">

                </div>
            </div>
        </div>

    </body>
</html>
