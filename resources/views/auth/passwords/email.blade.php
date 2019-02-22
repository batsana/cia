@include('headCSS.blade.php')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            <div class="">

                <div class="panel-heading">
                  <div class="col-md-6 col-md-offset-1">
                    <h1>Password Reset</h1>
                  </div>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="col-md-8 form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                <input id="email" type="email" class="form-control" name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-8 ">
                            <div class=" ">
                                <button type="submit" class="btn btn-block">
                                    Send Password Reset Link
                                </button>

                                <a class="btn btn-block " href="{{ url('/') }}">
                                    Cancel
                                </a> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
