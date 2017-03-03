$(function () {
  $('form :submit').on('click', function (event) {
    var form = $('.contact-form');
    var btn_submit = form.find(':submit');
    console.log(form);
    console.log(btn_submit);
    console.log(loader);


    e.preventDefault();

    btn_submit.attr('disabled', true);
    btn_submit.html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>').fadeIn('slow');

    setTimeout(function () {
      btn_submit.attr('disabled', false);
    }, 3000);
    return false;
    form.submit();
  });
});
