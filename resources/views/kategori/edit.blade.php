@extends('layouts.backend.app', ['activePage' => 'kategori', 'titlePage' => __('kategori')])

@section('content')


<div class="content">
    <div class="card ">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Kategori</h4>
            <p class="card-category">{{$submit}} Kategori</p>
        </div>
        <div class="card-body ">

            <form action="/kategori/{{$kategori->id}}" method="post">
                @method('put')
                @csrf

                @include('kategori._form')
            </form>
        </div>

    </div>
</div>
@endsection
