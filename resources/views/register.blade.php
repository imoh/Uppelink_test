@extends('welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('Firstname') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Firstname</label>

                            <div class="col-md-6">
                                <input id="Firstname" type="text" class="form-control" name="Firstname" value="{{ old('Firstname') }}" required autofocus>

                                @if ($errors->has('Firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('Surname') ? ' has-error' : '' }}">
                            <label for="Surname" class="col-md-4 control-label"'Surname</label>

                            <div class="col-md-6">
                                <input id='Surname" type="text" class="form-control" name='Surname" value="{{ old('Surname') }}" required autofocus>

                                @if ($errors->has('Surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         

                         
                        <div class="form-group{{ $errors->has('Phone_Number') ? ' has-error' : '' }}">
                            <label for="Phone_Number" class="col-md-4 control-label">Phone_Number</label>

                            <div class="col-md-6">
                                <input id="Phone_Number" type="text" class="form-control" name="Phone_Number" value="{{ old('Phone_Number') }}" required autofocus>

                                @if ($errors->has('Phone_Number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Phone_Number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Passport" class="col-md-4 control-label">Passport(jpg only)</label>

                            <div class="col-md-6">
                                <input id="Passport" type="Passport" class="form-control" name="Passport" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
