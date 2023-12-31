@extends('layouts.app')

@section('content')
    <div class="blue-line">
    </div>
    <div class="container position">
        <div class="row p-5">
            <div class="col-9">
                <h2 class="text-primary fw-bold text-uppercase">{{ $comic['title']}}</h2>
                <div class="row bg-success bg-gradient text-white mt-3 mb-3">
                    <div class="col-9 d-flex justify-content-between align-items-center border border-black p-2">
                        <h5>U.S. Price: <span class="fw-bold">{{ $comic['price'] }}</span></h5>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="col-3 text-center border border-black p-2">
                        <h6 class="fw-bold mt-2">Check Availability <i class="fa-solid fa-caret-down" style="color: #FFFFFF;"></i></h6>
                    </div>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="col-3">
                <p class="fw-bold text-secondary text-end">ADVERTISEMENT</p>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>
            <img class="show-size" src="{{ $comic['thumb'] }}">
        </div>
    </div>
    <div class="bg-color-show">
        <div class="container">
            <div class="row p-5">
                <div class="col-6">
                    <h4>Talent</h4>
                    <div class="row pt-3">
                        <div class="col-4">
                            <span>Art by:</span>
                        </div>
                        <div class="col-8 px-5 text-primary">
                            @foreach($comic['artists'] as $artist)
                                <span>{{ $artist }},</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-4">
                            <span>Written by:</span>
                        </div>
                        <div class="col-8 px-5 text-primary">
                            @foreach($comic['writers'] as $writer)
                                <span>{{ $writer }},</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h4>Specs</h4>
                    <div class="row pt-3">
                        <div class="col-4">
                            <span>Series:</span>
                        </div>
                        <div class="col-8 px-5 text-primary text-uppercase">
                            <span>{{ $comic['series'] }}</span>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-4">
                            <span>U.S. Price:</span>
                        </div>
                        <div class="col-8 px-5 text-primary text-uppercase">
                            <span>{{ $comic['price'] }}</span>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-4">
                            <span>On Sale Date:</span>
                        </div>
                        <div class="col-8 px-5 text-primary text-uppercase">
                            <span>{{ $comic['sale_date'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection