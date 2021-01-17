@extends('layouts.app')

@section('content')
    <section class="mobile students-jobs">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="{{url('img/logo-branca.png')}}"  height="40" class="d-inline-block align-top" alt="">    
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            </div>
        </nav>
        
        <section class="circulo pm container-fluid text-center">
        
            <article class="title">
                <h1>Vagas de Emprego</h1>
                <p>Se candidate às vagas de emprego de acordo com seus círculos</p>
            </article>

            <article class="mt-4">
                <ul>
                    <li class="item shadow mb-3">
                        <div class="row ">
                            <div class="col-5 pr-0">
                                <img src=" {{url('img/magazine-luiza.png')}} " alt="">
                            </div>
                            <div class="col-7 pr-4 pt-2 text-left d-flex align-content-between flex-wrap">
                                <div class="titulo green">
                                    <h2>Assistente Administrativo</h2>
                                </div>

                                <div class="description">
                                    <p>
                                        Novos caminhos para a juventude! Esse é o
                                        tema da segunda edição do Hackathon CCR,
                                        evento 100% on-line pelo Grupo CCR.
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
        </section>

            
    </section>
    
@endsection