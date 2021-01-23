@section('theme-color')
    <meta name="theme-color"  content="#00ADFA">
    <meta name="apple-mobile-web-app-status-bar-style" content="#00ADFA">
@endsection

@extends('layouts.app')

@section('content')
    <section class="mobile students-profile" id="blue" >
        <section class="circulo text-center">
            <article class="topbar">
              <section class="image">
                <img src=" {{url('img/person.jfif')}} ">
              </section>
              <article class="edit-icon">
                    <a href=" {{route('student.info')}} ">
                        <img src="img/edit.png" alt="">
                    </a>
              </article>
              <div class="student-data">
                  <h4>Ana Carla</h4>
                  <p>17 anos, 3° ano - Ensino Médio</p>
                  <div class="localization mt-2 row justify-content-center ">
                    <img src=" {{url('img/map.png')}} " width="12px">
                    <p>
                        Carmo do Rio Claro, Minas Gerais
                    </p>

                    <div class="tags row mt-2">
                        <div class="tag bg-blue mr-2">
                            Informática Básica
                        </div>

                        <div class="tag bg-green mr-2">
                            Matemática
                        </div>

                        <div class="tag bg-yellow">
                            Monitora
                        </div>
                    </div>
                </div>
              </div>

              <hr >

                <div class="d-flex justify-content-center flex-wrap pm">
                    <div class="tag bg-gray mb-3">
                        Meus Destaques
                    </div>
                    
                    <div class="item shadow-sm mb-3">
                        <div class="row ">
                            <div class="col-5 pr-0">
                                <img src=" {{url('img/destaque-escolar.png')}} " alt="">
                            </div>
                            <div class="col-7 pr-4 pt-2 text-left d-flex align-content-start flex-wrap">
                                <div>
                                    <div class="title">
                                        <h2 class="green">Destaque Escolar</h2>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="tag-sm bg-green mr-2">
                                            MATEMÁTICA
                                        </div>
                                        <div class="tag-sm bg-green">
                                            FÍSICA
                                        </div>
                                    </div>
                                </div>

                                <div class="description mt-3">
                                    <p >
                                        Novos caminhos para a juventude! Esse é o
                                        tema da segunda edição do Hackathon CCR.
                                        Novos caminhos para a juventude!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item shadow-sm mb-3">
                        <div class="row ">
                            <div class="col-5 pr-0">
                                <img src=" {{url('img/habilidade.png')}} " alt="">
                            </div>
                            <div class="col-7 pr-4 pt-2 text-left d-flex align-content-start flex-wrap">
                                <div>
                                    <div class="title">
                                        <h2 class="blue">Habilidades</h2>
                                    </div>
                                    <div class="row col-12 ">
                                        <div class=" tag-sm bg-blue mb-2">
                                            Informática Básica
                                        </div>
                                        <div class=" tag-sm bg-blue mb-2">
                                            Edição de fotos
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
            </article>
           
        </section>

        
        



            
    </section>
    
@endsection