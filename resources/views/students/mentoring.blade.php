@section('theme-color')
    <meta name="theme-color"  content="#00ADFA">
    <meta name="apple-mobile-web-app-status-bar-style" content="#00ADFA">
@endsection

@extends('layouts.app')

@section('content')
    <section class="mobile students-mentoring" id="blue">
        <section class="circulo pm container-fluid text-center">
            <article class="title">
                <h1>Monitorias</h1>
                <p>Outros alunos estão dispostos a compartilhar seus conhecimentos, aprenda com eles.</p>
            </article>
            
            @forelse($mentorings as $mentoring)
            <article class="mt-4">
                <ul>
                    <li class="item shadow-sm mb-3">
                        <div class="row ">
                            <div class="col-5 pr-0">
                                <img src=" {{url('img/books.jfif')}} " alt="">
                            </div>
                            <div class="col-7 pr-4 pt-2 text-left d-flex align-content-between flex-wrap">
                                <div>
                                    <div class="name">
                                        <h2>{{$mentoring->title}} - {{$mentoring->format}}</h2>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Mentor: {{$mentoring->school_year}} - Ensino Médio
                                        </p>
                                    </div>
                                </div>

                                <div class="description mt-2">
                                    <p >
                                        {{$mentoring->description}}
                                    </p>
                                </div>


                                <div class="localization row pl-3">
                                    <img src=" {{url('img/map.png')}} " width="12px">
                                    <p>
                                        {{$mentoring->city_name}}, {{$mentoring->state_name}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </article>
            @empty
                <p>Sem mentorias no momento...</p>
            @endforelse

            <article class="bottom-legend mt-5">
                <p>Isso é tudo por enquanto!</p>
                <hr class="shadow-sm">
            </article>
        </section>
    </section>
    
@endsection