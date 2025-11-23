@extends('frontend.layouts.app')

@section('contents')

    <x-frontend.breadcrumb :items="[['label' => 'Home', 'url' => '/'], ['label' => 'Payment Success']]" />
    <div class="container mb-60 mt-55">
        <div class="text-center mt-100 mb-100">
            <i class="fa-solid fa-circle-xmark fa-10x text-danger"></i>
            <h1>Pagamento cancelado</h1>
            <p>Seu pagamento foi cancelado. Por favor, tente novamente.</p>
            <a href="{{ route('cart.index') }}" class="btn btn-success mt-10">Vá para o carrinho</a>
        </div>
    </div>
@endsection

