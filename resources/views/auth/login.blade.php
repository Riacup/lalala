@include('base/header_page2')
@extends('base/script_page')
@section('content')

    <div class="main">
    <div class="card">
              <div class="card-body">
            <form method="POST" action="{{ route('login')}}">
                @csrf

                <h2 class="form-title">LOGIN ADMIN</h2>

                <label for="email">Email</label>
                <div class="form-textbox">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div><br>

                <label for="pass">Kata Sandi</label>
                <div class="form-textbox">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div><br>

                <div class="form-textbox">
                    <button type="submit" class="btn-masuk">
                        {{ __('Masuk') }}
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
@endsection