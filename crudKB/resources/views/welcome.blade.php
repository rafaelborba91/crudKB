@extends('layouts.main')  {{-- * --}}

@section('title', 'ADesk - Busquem conhecimento!')  {{-- * --}}

@section('content')  {{-- * --}}

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Bem vindo!
					</span>
					<span class="login100-form-title">
						<img class="logo_empresa" src="/img/Logo_Adesk.png" alt="Logo_Empresa">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Digite um e-mail válido!">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="E-mail"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Digite a senha!">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Senha"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Entrar
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

@endsection  {{-- * --}}