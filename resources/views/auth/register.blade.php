@extends('layouts.register')

@section('content')
<div class="container">
        
    <div class="row">
        <div class="col-md-3 col-sm-12"></div>
        <div class="col-md-6 col-sm-12 text-center">
            <h1>...every dream has its own color</h1>
            <h5>Get started by filling your info below</h5>
        </div>
        <div class="col-md-3 col-sm-12"></div>
    </div><br><br> 

    <div class="row">
        <div class="col-md-1 col-sm-12"></div>
        <div class="col-md-5 col-sm-12"><br>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Name</label>

                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address</label>

                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>

                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="control-label">Confirm Password</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div><br>

                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                   
                                <span class="pull-right col-sm-8">By clicking "Register" you agree to our <a href="#">Terms</a> and <a href="#">Privacy policy</a></span> 
                                
                            </div>
                        </div>
                    </form>
                </div>
        </div>

        <div class="col-md-1 col-sm-12"></div>
        <div class="col-md-5">
            <img src="img/bc.svg" alt="">
        </div>
    </div>
</div>
@endsection
