@extends('layouts.front')
@section('title', 'Explore Kos Kosan')
@section('content')
@include ('components.navbar')
    <section class="header mb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="jumbo-header mb-30">
                    Cari Kos Kosan<br>
                    Nyaman & Murmer
                </h1>
                <p class="paragraph mb-30">
                    Lorem house ipsum could be a reall good home<br>
                    without thinking si amet dolor safety around.
                </p>
                <p class="mb-50"><a href="#" class="btn btn-primary">Explore Houses</a></p>
                <div class="row stats text-center">
                    <div class="col-lg-4 item">
                        <h3 class="big-header">
                            23,491
                        </h3>
                        <p class="paragraph">
                            Koskosan
                        </p>
                    </div>
                    <div class="col-lg-4 item">
                        <h3 class="big-header">
                            983
                        </h3>
                        <p class="paragraph">
                            Awards
                        </p>
                    </div>
                    <div class="col-lg-4 item">
                        <h3 class="big-header">
                            182M+
                        </h3>
                        <p class="paragraph">
                            Happy People
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset ('images/banner.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    </section>
    <section class="best-items">
    <div class="container">
        <div class="row text-center mb-50">
            <div class="col-lg-12">
                <img src="{{ asset ('images/ic_best.svg') }}" height="42" alt="" class="mb-16">
                <h3 class="big-header">
                    Best of The Best
                </h3>
                <p class="paragraph">
                    Dolor space comfortable moments
                </p>
            </div>
        </div>
        <div class="row">
            {{-- Mengambil data dari database table best of best --}}
            @component('components.house_card')
                @slot('cover', 'images/house1.png') 
                @slot('title', 'Saung Sunda') 
                @slot('price', '783') 
                @slot('location', 'Lembang') 
                @slot('review', '4.5') 
            @endcomponent
            @component('components.house_card')
                @slot('cover', 'images/house2.png') 
                @slot('title', 'Saung Sunda') 
                @slot('price', '783') 
                @slot('location', 'Lembang') 
                @slot('review', '4.5') 
            @endcomponent
            @component('components.house_card')
                @slot('cover', 'images/house3.png') 
                @slot('title', 'Saung Sunda') 
                @slot('price', '783') 
                @slot('location', 'Lembang') 
                @slot('review', '4.5') 
            @endcomponent
            @component('components.house_card')
                @slot('cover', 'images/house4.png') 
                @slot('title', 'Saung Sunda') 
                @slot('price', '783') 
                @slot('location', 'Lembang') 
                @slot('review', '4.5') 
            @endcomponent
            @component('components.house_card')
                @slot('cover', 'images/house5.png') 
                @slot('title', 'Saung Sunda') 
                @slot('price', '783') 
                @slot('location', 'Lembang') 
                @slot('review', '4.5') 
            @endcomponent
            @component('components.house_card')
                @slot('cover', 'images/house6.png') 
                @slot('title', 'Saung Sunda') 
                @slot('price', '783') 
                @slot('location', 'Lembang') 
                @slot('review', '4.5') 
            @endcomponent
            @component('components.house_card')
                @slot('cover', 'images/house7.png') 
                @slot('title', 'Saung Sunda') 
                @slot('price', '783') 
                @slot('location', 'Lembang') 
                @slot('review', '4.5') 
            @endcomponent
            @component('components.house_card')
                @slot('cover', 'images/house8.png') 
                @slot('title', 'Saung Sunda') 
                @slot('price', '783') 
                @slot('location', 'Lembang') 
                @slot('review', '4.5') 
            @endcomponent 
        </div>
    </div>
    </section>
@endsection
@push('after-scripts')
    <script src="{{ asset('js/premium.js') }}"></script>
@endpush