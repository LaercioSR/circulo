@section('theme-color')
    <meta name="theme-color"  content="#00ADFA">
    <meta name="apple-mobile-web-app-status-bar-style" content="#00ADFA">
@endsection

@extends('layouts.app')

@section('content')
    <section class="mobile students-mentoring" id="blue">
        <section class="circulo pm container-fluid text-center">
            <article class="title">
                <h1>Mentorias</h1>
                <p>Outros alunos estão dispostos a acompanhar seus conhecimentos, aprenda com eles.</p>
            </article>

            <article class="mt-4">
                <ul>
                    <li class="item shadow-sm mb-3">
                        <div class="row ">
                            <div class="col-5 pr-0">
                                <img src=" {{url('img/magazine-luiza.png')}} " alt="">
                            </div>
                            <div class="col-7 pr-4 pt-2 text-left d-flex align-content-between flex-wrap">
                                <div>
                                    <div class="name">
                                        <h2>Dwight</h2>
                                    </div>
                                    <div class="info">
                                        <p>
                                           17 anos, 3º - Ensino Médio
                                        </p>
                                    </div>
                                </div>

                                <div class="description mt-2">
                                    <p >
                                        Novos caminhos para a juventude! Esse é o
                                        tema da segunda edição do Hackathon CCR.
                                    </p>
                                </div>


                                <div class="localization row pl-3">
                                    <img src=" {{url('img/map.png')}} " width="12px">
                                    <p>
                                        Carmo do Rio Claro, Minas Gerais
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </article>

            <div class="bottom-legend mt-5">
                <p>Isso é tudo por enquanto!</p>
                <hr class="shadow-sm">
            </div>
        </section>
    </section>
    
@endsection