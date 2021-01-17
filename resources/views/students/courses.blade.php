@section('theme-color')
    <meta name="theme-color"  content="#00ADFA">
    <meta name="apple-mobile-web-app-status-bar-style" content="#00ADFA">
@endsection

@extends('layouts.app')

@section('content')
    <section class="mobile students-events" id="blue" >
        <section class="circulo pm container-fluid text-center">
            <article class="title">
                <h1>Cursos Gratuitos</h1>
                <p>
                    Pensando em se capacitar? A gente separou uma lista de Cursos Gratuitos de acordo com seus interesses
                </p>
            </article>

            <article class="mt-4">
                <ul>
                    <li class="side-item side-item-blue text-left shadow mb-3">
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

                        <div class="modality text-right">
                            <p>
                                Modalidade: <strong>Presencial</strong>
                            </p>
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