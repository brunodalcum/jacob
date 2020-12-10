$(function (){
    $('form[name="contact"]').submit(function (event) {
        event.preventDefault();

        const form = $(this);
        const action = form.attr('action');
        const name = form.find('input[name="name"]').val();
        const email = form.find('input[name="email"]').val();
        const phone = form.find('input[name="phone"]').val();
        const message = form.find('input[name="message"]').val();

        $.post(action, {name: name, email: email, phone: phone, message: message}, function (response){
        if(response.message) {
            ajaxMessage(response.message, 3);
        }

        if(response.redirect) {
            window.location.href = response.redirect;
        }
    }, 'json');
});

});

