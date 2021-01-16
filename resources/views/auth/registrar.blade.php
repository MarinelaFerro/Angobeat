@extends('auth.layouts.app')
@section('conteudo')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block"
                    style="background: url(img/imagens/auth/register.png); background-position: center; background-size: cover; background-repeat: no-repeat;">
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Criar conta!</h1>
                        </div>
                        <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Primeiro Nome">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                        placeholder="Ultimo Nome">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Endereço de email">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"
                                        placeholder="Repete a Password">
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="number" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="Telefone">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleRepeatPassword"
                                        placeholder="Gênero">
                                </div>

                            </div>
                            <a href="login.html" class="btn btn-facebook btn-user btn-block">
                                Criar conta
                            </a>
                            <hr>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('auth.forgotPassword') }}">Esqueceu a sua password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="{{ route('auth.login') }}">Já tem uma conta? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
