@section('theme-color')
    <meta name="theme-color"  content="#00ADFA">
    <meta name="apple-mobile-web-app-status-bar-style" content="#00ADFA">
@endsection

@extends('layouts.app')

@section('content')
    <section class="companies-profile students pd pt" id="blue">
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
                    <a href="/company/profile" >Vagas</a>
                    <a href="#" class="active" >Estudantes</a>
                    <a href="#" >Mensagens</a>
                </div>
                
                <hr class="mt-0">

                <section class="row">
                    @forelse($students as $student)
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="image">
                                    <img src=" {{url('img/person.jfif')}} " alt="">
                                </div>
                                <div class="student-data mt-2">
                                    <h4>{{$student->name}}</h4>
                                    <p>17 anos, {{$student->school_year}} - Ensino Médio</p>
                                </div>
                                <div class="skills mt-3">
                                    <h5>Habilidades</h5>
                                    <div class="row justify-content-center">
                                        <div class="tag mr-2">
                                            <h5>{{$student->interest}}</h5>
                                        </div>
                                        <div class="tag">
                                            <h5>teste</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="spotlight mt-3">
                                    <h5>Matéria em Destaque</h5>
                                    <div class="row justify-content-center">
                                        <div class="row justify-content-center">
                                            <div class="tag mr-2">
                                                <h5>{{$student->subject}}</h5>
                                            </div>
                                            <div class="tag">
                                                <h5>teste</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <p>Não há estudantes para a vaga</p>
                    @endforelse  
                </section>
            </section>
        </article>     
    </section>
    
@endsection