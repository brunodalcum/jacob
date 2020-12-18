@extends('backend.master.master')

@section('content')
<section class="dash_content_app">

    <header class="dash_content_app_header">
        <h2 class="icon-user-plus">Novo Cliente</h2>

        <div class="dash_content_app_header_actions">
            <nav class="dash_content_app_breadcrumb">
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="">Clientes</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="" class="text-orange">Novo Usuário</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="dash_content_app_box">
        <div class="nav">
            @if($errors->all())
                @foreach($errors->all() as $error)
                    <x-alert color="orange" message="{{ $error }}"/>
            @endforeach
            @endif
            <ul class="nav_tabs">
                <li class="nav_tabs_item">
                    <a href="#data" class="nav_tabs_item_link active">Dados Cadastrais</a>
                </li>

            </ul>

            <form class="app_form" action="<?php echo route('users.store'); ?>" method="post" enctype="multipart/form-data">
                @csrf
                <div class="nav_tabs_content">
                    <div id="data">
                        <div class="label_gc">
                            <span class="legend">Perfil:</span>
                            <label class="label">
                                <input type="checkbox" name="lessor"
                                {{ (old('lessor') == 'on' || old('lessor') == true ? 'checked' : '') }}>
                                <span>Usuário</span>
                            </label>

                            <label class="label">
                                <input type="checkbox" name="lessee{{ (old('lessee') == 'on' || old('lessee') == true ? 'checked' : '') }}">
                                <span>Cliente</span>
                            </label>
                        </div>

                        <label class="label">
                            <span class="legend">*Nome:</span>
                            <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name') }}"/>
                        </label>

                        <label class="label">
                                <span class="legend">*CPF:</span>
                                <input type="tel" class="mask-doc" name="cpf" placeholder="CPF do Cliente"
                                       value="{{ old('cpf') }}"/>
                            </label>
                        </div>
                    <label class="label">
                    <label class="label">
                        <span class="legend">*E-MAIL:</span>
                        <input type="email" class="mask-doc" name="email" placeholder="EMAIL do cliente"
                               value="{{ old('email') }}"/>
                    </label>

                            <label class="label">
                                <span class="legend">*Data de Nascimento:</span>
                                <input type="tel" name="date_of_birth" class="mask-date"
                                       placeholder="Data de Nascimento" value="{{ old('date_of_birth') }}"/>
                            </label>

                    <label class="label">
                        <span class="legend">*SENHA:</span>
                        <input type="password" name="password" placeholder="Senha de acesso"
                               value=""/>
                    </label>

                    <div class="text-right mt-2">
                    <button class="btn btn-large btn-green icon-check-square-o" type="submit">Salvar Alterações
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
