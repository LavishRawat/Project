@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div align="right">{{ __('Name') }}</div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="ml-3">
                    {{ __('Akash Rawat') }}
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div align="right">{{ __('Dashboard') }}</div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div align="right">
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <form>
        <div class="card-header">
            <h3>Sign Up<h3>
            <p> Please Fill This Form To Create An Account <p>
        </div>
            <h5>Name<h5>
            <h5><input type="text" placeholder="Name"/><h5>
            <h5>Email<h5>
            <h5><input type="Email" placeholder="Email"/><h5>
    </form>
</div>



  

            
@endsection