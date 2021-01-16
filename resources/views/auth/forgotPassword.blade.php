@extends('auth.layouts.app')
@section('conteudo')
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block "
                            style="background: url(img/imagens/auth/ForgotPassword.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">

                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">
                                        Esqueceu sua senha?</h1>
                                    <p class="mb-4">
                                        Nós entendemos, coisas acontecem. Basta inserir seu endereço de e-mail
                                        abaixo e enviaremos um link para redefinir sua senha!</p>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                            aria-describedby="emailHelp" placeholder="Insira o endereço de e-mail...">
                                    </div>
                                    <a href="login.html" class="btn btn-facebook btn-user btn-block">
                                        Reiniciar a Password
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('auth.register') }}">Criar conta!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('auth.login') }}">Já tem uma conta? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
