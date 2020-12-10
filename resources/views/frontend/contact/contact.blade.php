@extends('frontend.master.master')

@section('content')

    @include('frontend.search.search')
    <!-- Contact Section Begin -->
    <section class="contact spad bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="fa fa-phone"></i></span>
                        <h4>Telefone</h4>
                        <p><?php echo env('APP_PHONE') ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_whatsapp">
                            <a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo env('APP_WHATSAPP_LINK') ?>" title="<?php echo env('APP_WHATSAPP') ?>"><i class="fa fa-whatsapp text-info"></i></a>
                        </span>
                        <h4>Whatsapp</h4>
                        <p><?php echo env('APP_WHATSAPP') ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="fa fa-history"></i></span>
                        <h4>Horário Atendimento</h4>
                        <p>09:00 ás 19:00 </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="fa fa-envelope"></i></span>
                        <h4>Email</h4>
                        <p><?php echo env('APP_EMAIL') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->


    <!-- Contact Form Begin -->
    <div class="contact-form spad bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Contate-nos</h2>
                    </div>
                </div>
            </div>
            <form name="contact" method="post" action="contato/enviar-email" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="name" id="name" placeholder="Seu Nome" required>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="email" id="email" placeholder="Seu Email" required>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="phone" id="telefone" placeholder="Seu Whatsapp">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea name="message" id="mensagem" placeholder="Sua Mensagem"></textarea>
                        <button name="btn-enviar-email" id="btn-enviar-email" type="submit" class="site-btn">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
    <script src="assets/frontend/js/contato.js"></script>
@endsection


