@extends('backend.master.master')

@section('content')
<section class="dash_content_app">

    <header class="dash_content_app_header">
        <h2 class="icon-search">Filtro</h2>

        <div class="dash_content_app_header_actions">
            <nav class="dash_content_app_breadcrumb">
                <ul>
                    <li><a href="<?php echo route('home'); ?>">Dashboard</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="<?php echo route('users.index'); ?>" class="text-orange">Clientes</a></li>
                </ul>
            </nav>

            <a href="<?php echo route('users.create'); ?>" class="btn btn-orange icon-user ml-1">Criar Cliente</a>
            <button class="btn btn-green icon-search icon-notext ml-1 search_open"></button>
        </div>
    </header>

    @include('backend.users.filter')

    <div class="dash_content_app_box">
        <div class="dash_content_app_box_stage">
            <table id="dataTable" class="nowrap stripe" width="100" style="width: 100% !important;">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome Completo</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Nascimento</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><a href="<?php echo route('users.edit',['user' => $user->id]); ?>" class="text-orange">{{ $user->name }}</a></td>
                    <td>{{ $user->cpf }}</td>
                    <td><a href="mailto:{{ $user->email }}" class="text-orange">{{ $user->email }}</a></td>
                    <td>{{ $user->date_of_birth }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
