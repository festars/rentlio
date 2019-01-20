@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Connect</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  

                    Connect your Stripe Account. 

                    <a href="https://connect.stripe.com/oauth/authorize?response_type=code&state=abc&scope=read_write&client_id={{ config('services.stripe_connect.key' )}}">Connect Your Stripe Account</a>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
