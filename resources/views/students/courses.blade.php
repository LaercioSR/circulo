@section('theme-color')
    <meta name="theme-color"  content="#00ADFA">
    <meta name="apple-mobile-web-app-status-bar-style" content="#00ADFA">
@endsection

@extends('layouts.app')

@section('content')
    <section class="mobile students-courses" id="blue" >
        <section class="circulo pm container-fluid text-center">
            <article class="title">
                <h1>Cursos Gratuitos</h1>
                <p>
                    Pensando em se capacitar? A gente separou uma lista de Cursos Gratuitos de acordo com seus interesses
                </p>
            </article>

            <article class="mt-4">
                <ul> 
                <section class="card px-2 pt-3 d-block d-sm-none text-center" id="card-swipe">
                    <div class="swipeView">
                        <li class="item  text-left shadow-sm mr-2 mb-5">
                            <div class="row">
                                <div class="col-5 pr-0">
                                    <img src=" {{url('img/computers.jfif')}} " alt="">
                                </div>
    
                                <div class="col-7 pt-2">
                                    <div class="title blue">
                                        <h2>Informática Básica</h2>
                                    </div>
                                    
                                    <div class="description">
                                        <p>
                                            Curso online de informática básica, Pacote Office com foco em Excel.
                                        </p>
                                    </div>
                                    
                                    <div class="duration">
                                        <p>
                                            <strong>Duração:</strong> 50 horas
                                        </p>
                                    </div>
                                    <div class="modality row mt-3">
                                        <div class="col">
                                            <p>
                                                <strong>Modalidade:</strong> Presencial
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>
                                                <strong>Faculdade:</strong> Azul
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>                            
                    </div>
        
                </section>
                </ul>
            </article>

            <article class="">
                <div class="text-left free-courses mb-2">
                    <p class="black">Cursos bloqueados. </p>
                    <p class="mt-2 lh-min green"><small>Convide 5 amigos e tenha o acesso liberado.</small></p>
                </div>
                <ul>  
                    <section class="card mb-4 px-2 pt-3 d-block d-sm-none text-center" id="card-swipe">
                        <div class="swipeView">
                            <li class="item  text-left shadow-sm mr-2 mb-5">
                                <div class="row">
                                    <div class="col-5 pr-0">
                                        <img src=" {{url('img/computers.jfif')}} " alt="">
                                    </div>
        
                                    <div class="col-7 pt-2">
                                        <div class="title blue">
                                            <h2>Informática Básica</h2>
                                        </div>
                                        
                                        <div class="description">
                                            <p>
                                                Curso online de informática básica, Pacote Office com foco em Excel.
                                            </p>
                                        </div>
                                        
                                        <div class="duration">
                                            <p>
                                                <strong>Duração:</strong> 50 horas
                                            </p>
                                        </div>
                                        <div class="modality row mt-3">
                                            <div class="col">
                                                <p>
                                                    <strong>Modalidade:</strong> Presencial
                                                </p>
                                            </div>
                                            <div class="col">
                                                <p>
                                                    <strong>Faculdade:</strong> Azul
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>  
                        </div>
                    </li>
                </ul>
            </article>

            <article class="bottom-legend mt-5">
                <p>Isso é tudo por enquanto!</p>
                <hr class="shadow-sm">
            </article>
        </section>


            
    </section>
    
@endsection