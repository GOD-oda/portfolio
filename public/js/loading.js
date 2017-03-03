$(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('.contact-form').on('submit', function (event) {
    var form = $(this);
    var btn_submit = form.find('.btn-submit');
    var loader = form.find('.loader');

    event.preventDefault();

    btn_submit.attr('disabled', true);
    loader.html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>').fadeIn('slow');

    setTimeout(function () {
      $.ajax({
        type: 'post',
        url: 'send-mail',
        data: form.serialize(),
        content_type: 'application/json'
      }).done(function (data) {
        console.log(data);
        loader.text('メールの送信が完了しました');
        $('input[name="name"]').val('');
        $('input[name="email"]').val('');
        $('input[name="subject"]').val('');
        $('textarea[name="body"').val('');
        btn_submit.attr('disabled', false);
      }, 300).fail(function (response) {
        var response_json = response.responseJSON;
        var invalid_error = false;

        if ('name' in response_json && response_json.name.length > 0) { // invalid name
          var input_name = form.find('.input-name');
          input_name.addClass('has-error');
          input_name.find('.help-block').text(response_json.name[0]);
          invalid_error = true;
        }
        if ('email' in response_json && response_json.email.length > 0) { // invalid email
          var input_email = form.find('.input-email');
          input_email.addClass('has-error');
          input_email.find('.help-block').text(response_json.email[0]);
          invalid_error = true;
        }
        if ('subject' in response_json && response_json.subject.length > 0) { // invalid subject
          var input_subject = form.find('.input-subject');
          input_subject.addClass('has-error');
          input_subject.find('.help-block').text(response_json.subject[0]);
          invalid_error = true;
        }
        if ('body' in response_json && response_json.body.length > 0) { // invalid body
          var input_body = form.find('.input-body');
          input_body.addClass('has-error');
          input_body.find('.help-block').text(response_json.body[0]);
          invalid_error = true;
        }

        if (invalid_error === false) {
          loader.text('メールの送信に失敗しました');
        } else {
          loader.text('');
        }

        btn_submit.attr('disabled', false);
      });
    }, 3000);
  });
});
