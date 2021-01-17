@section('theme-color')
    <meta name="theme-color"  content="#00ADFA">
    <meta name="apple-mobile-web-app-status-bar-style" content="#00ADFA">
@endsection

@extends('layouts.app')

@section('content')
    <section class="mobile students-courses" id="blue" >
        <section class="circulo pm container-fluid text-center">
            <article class="title">
                <h1>Cursos</h1>
                <p>
                    Pensando em se capacitar? A gente separou uma lista de Cursos de acordo com seus interesses
                </p>
            </article>

            <article class="mt-4">
                <div class="text-left free-courses mb-2">
                    <p class="green">Cursos liberados</p>
                </div>
                
                <ul>
                <section class="card px-2 pt-3 d-block d-sm-none text-center" id="card-swipe">
                    <div class="swipeView">
                        @forelse($courses_unlocked as $unlocked)
                        <li class="item  text-left shadow-sm mr-2 mb-5">
                            <div class="row">
                                <div class="col-5 pr-0">
                                    <img src=" {{url('img/computers.jfif')}} " alt="">
                                </div>
    
                                <div class="col-7 pt-2">
                                    <div class="title blue">
                                        <h2>{{$unlocked->title}}</h2>
                                    </div>
                                    
                                    <div class="description">
                                        <p>

                                            {{$unlocked->description}}

                                        </p>
                                    </div>
                                    
                                    <div class="duration">
                                        <p>
                                            <strong>Duração:</strong> {{$unlocked->duration}} horas
                                        </p>
                                    </div>
                                    <div class="modality row mt-3">
                                        <div class="col">
                                            <p>
                                                <strong>Modalidade:</strong> {{$unlocked->format}}

                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>
                                                <strong>Instituição:</strong> {{$unlocked->platform}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @empty
                            <p>Não há cursos disponíveis no momento...</p>
                        @endforelse
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

                            @forelse($courses_blocked as $blocked)
                            <li class="item  text-left shadow-sm mr-2 mb-5">
                                <div class="row">
                                    <div class="col-5 pr-0">
                                        <img src=" {{url('img/computers.jfif')}} " alt="">
                                    </div>
        
                                    <div class="col-7 pt-2">
                                        <div class="title blue">
                                            <h2>{{$blocked->title}}</h2>
                                        </div>
                                        
                                        <div class="description">
                                            <p>
                                                {{$blocked->description}}
                                            </p>
                                        </div>
                                        
                                        <div class="duration">
                                            <p>
                                                <strong>Duração:</strong> {{$blocked->duration}}
                                            </p>
                                        </div>
                                        <div class="modality row mt-3">
                                            <div class="col">
                                                <p>
                                                    <strong>Modalidade:</strong> {{$blocked->format}}
                                                </p>
                                            </div>
                                            <div class="col">
                                                <p>
                                                    <strong>Instituição:</strong> {{$blocked->platform}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @empty
                                <p>Sem cursos disponíveis no momento...</p>   
                            @endforelse
                        </div>
                    </section>
                    
                </ul>

            </article>
        </section>


            
    </section>
    
@endsection