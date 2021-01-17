@section('theme-color')
    <meta name="theme-color"  content="#46ad87">
    <meta name="apple-mobile-web-app-status-bar-style" content="#46ad87">
@endsection

@extends('layouts.app')

@section('content')
    <section class="mobile students-jobs" id="green">
        <section class="circulo pm container-fluid text-center">
        
            <article class="title">
                <h1>Vagas de Emprego</h1>
                <p>Se candidate às vagas de emprego de acordo com seus círculos</p>
            </article>
            @forelse ($jobs as $job)
            <article class="mt-4">
                <ul>
                    <li class="item shadow-sm mb-3">
                        <div class="row ">
                            <div class="col-5 pr-0">
                                <img src=" {{url('img/magazine-luiza.png')}} " alt="">
                            </div>
                            <div class="col-7 pr-4 pt-2 text-left d-flex align-content-between flex-wrap">
                                <div class="titulo green">
                                    <h2>{{$job->title}}</h2>
                                </div>

                                <div class="description">
                                    <p>
                                        {{$job->description}}
                                    </p>
                                </div>

                                <div class="localization row pl-3">
                                    <img src=" {{url('img/map.png')}} " width="12px">
                                    <p>
                                        {{$job->city}}, {{$job->state}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </article>
            @empty
            <p>Não há vagas disponíveis atualmente...</p>
            @endforelse
        </section>

            
    </section>
    
@endsection