@section('theme-color')
    <meta name="theme-color"  content="#00ADFA">
    <meta name="apple-mobile-web-app-status-bar-style" content="#00ADFA">
@endsection

@extends('layouts.app')

@section('content')
    <section class="companies-profile vagas pd pt" id="blue">
        <article class="row justify-content-between">
            <section class="teste item text-center">
                <div>
                    <img src=" {{url('img/magazine-luiza.png')}} " alt="">
                </div>

                <div class="name mt-2">
                    <h1 class="mb-0">Magazine Luiza</h1>
                    <h3>Varejo - Campinas, São Paulo</h3>
                </div>


                <div class="about text-left mt-5">
                    <h2>Sobre nós</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna 
                        aliqua. Massa id neque aliquam vestibulum morbi blandit 
                        cursus risus. 
                    </p>
                </div>

                <div class="contact text-left mt-4">
                    <h2>Contatos</h2>
                    <div>
                        <a href="#">(75) 9 9999-9999</a>
                    </div>
                    <div>
                        <a href="#">loja.campinas@magalu.com</a>
                    </div>
                    <div>
                        <a href="#">Biro biro biro biro</a>
                    </div>
                </div>
            </section>

            <section class="col-8 item">
                <div class="row col-12 menu px-5">
                    <a href="#" class="active" >Vagas</a>
                    <a href="/students" >Estudantes</a>
                    <a href="#" >Mensagens</a>
                </div>
                
                <hr class="mt-0">

                <div class="row mt-5">
                    <div class="col-9">
                        <ul>
                            <li>
                                <div class="side-item blue mb-4">
                                    <h3>Desenvolvedor (a) - Agilidade Organizacional</h3>
                                    <div class="row">
                                        <div class="col-8">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                Quisque egestas dignissim augue ac convallis. Phasellus 
                                                arcu nisi, condimentum non ultricies id, auctor quis mauris. 
                                                Nulla condimentum viverra felis eu tempor. Vivamus gravida 
                                                pharetra molestie. Pellentesque gravida efficitur mi, nec cursus.
                                            </p>
                                        </div>

                                        <div class="col-4">
                                            <div>
                                                <p><strong>Nível de Experiência</strong></p>
                                                <p>Não aplicável</p>
                                            </div>
                                            
                                            <div class="mt-3">
                                                <p><strong>Setor</strong></p>
                                                <p>Varejo</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right mt-3">
                                        <button class="btn btn-edit bg-blue">Editar</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-3 side-infos text-center">
                        <div class="circle-area">
                            <div class="circle d-flex align-content-center flex-wrap justify-content-center">
                                <p> 3 </p>
                            </div>
                            <div class="description">
                                <p>Total de vagas para estudantes</p>
                            </div>
                        </div>

                        <div class="circle-area mt-4">
                            <div class="circle d-flex align-content-center flex-wrap justify-content-center">
                                <p> 73 </p>
                            </div>
                            <div class="description">
                                <p>Total de estudantes inscritos</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="add mt-3">
                    <button class="btn btn-add bg-blue">Adicionar Vaga +</button>
                </div>
            </section>
        </article>     
    </section>
    
@endsection