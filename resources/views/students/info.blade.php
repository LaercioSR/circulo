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
                    <img src="img/edit.png" alt="">
                </article>
                <div class="student-data">
                    <h4>Ana Carla</h4>
                </div>

                <hr >

                <div class="accordion text-left" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <strong> INFORMAÇÕES PESSOAIS </strong>
                          </button>
                        </h5>
                      </div>
                  
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                          <p> <strong>Data de Nascimento:</strong>  15/01/2004</p>
                          <p> <strong>Nacionalidade:</strong> Brasileira</p>
                          <p> <strong>CPF:</strong> 123.456.789.00</p>
                          <p> <strong>Estado Civil:</strong>  Solteira</p>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong> INFORMAÇÕES DE CONTATO </strong>
                          </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p><strong>E-mail:</strong> anaclara@email.com</p>
                            <p><strong>Celular:</strong> (55) 9 8888-8888</p>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong> ENDEREÇO </strong>
                          </button>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p><strong> CEP:</strong> 44444-444</p>
                            <p><strong>Rua:</strong> Marechal Ferrões</p>
                            <p> <strong>Bairro:</strong>  Santana Cecília</p>
                            <p> <strong>Estado:</strong> Minas Gerais</p>
                            <p> <strong>Cidade:</strong> Carmo do Rio Branco</p>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFour">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              <strong> FORMAÇÃO </strong>
                            </button>
                          </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                          <div class="card-body">
                             <button class="btn bg-blue btn-add">+ Adicionar Formação</button>
                          </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFive">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              <strong> EXPERIÊNCIAS PROFISSIONAIS </strong>
                            </button>
                          </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                          <div class="card-body">
                             <button class="btn bg-blue btn-add">+ Adicionar Experiência</button>
                          </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingSix">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              <strong> EXPERIÊNCIAS EXTRACURRICULARES </strong>
                            </button>
                          </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                          <div class="card-body">
                             <button class="btn bg-blue btn-add">+ Adicionar Experiência</button>
                          </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingSeven">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              <strong> IDIOMAS </strong>
                            </button>

                          </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                          <div class="card-body">
                             <button class="btn bg-blue btn-add">+ Adicionar Idioma</button>

                             <div class="languages mt-3">
                                <div class="row col-12 justify-content-between">
                                    <div>
                                        <h3 class="mb-0">Inglês</h3>
                                        <p>Avançado</p>
                                    </div>
                                    <div class="row justify-content-between">
                                        <img class="col mr-1" src=" {{url('img/edit.png')}} " alt="" >
                                        <img class="col" src=" {{url('img/delete.png')}} " alt="">
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingEight">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              <strong> HABILIDADES </strong>
                            </button>
                          </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                          <div class="card-body">
                             <button class="btn bg-blue btn-add">+ Adicionar Habilidade</button>
                          </div>
                        </div>
                    </div>
                </div>
            </article>

        </section>            
    </section>
    
@endsection