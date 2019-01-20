@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listing </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  

                    Pay for this shit 

                    {{ $listing }}

                    <form action="{{ route('') }}" method="POST">
                        
                        {{ csrf_field() }}

                        <script 
                            src="https://checkout.stripe.com/checkout.js"
                            class="stripe-button"
                            data-key="{{\App\User::first()->stripe_key }}"
                            data-amount="{{ 1000 }}"
                            data-name="My Dick"
                            data-description="My dick is big."
                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                            data-locale="auto"
                            data-currency="cad"
                        ></script>
                    </form>
                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
