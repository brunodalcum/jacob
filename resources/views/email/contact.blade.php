@component('mail::message')
Olá Você recebeu um E-mail do site Jacob jeans!
@component('mail::button', ['url' => ''])

 Nome:   <b> {{ $name }}</b>

 E-mail: <b> {{ $email }}</b>

 Telefone <b>{{ $phone }} </b>

 Mensagem: <b>{{ $message }}</b>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
