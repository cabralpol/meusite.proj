$(document).ready(function () {
  // $('#birth-date').mask('00/00/0000');
  $('#phone').mask('(00) 00000-0000');
});

function validate() {
  // Nome do form + nome do campo+ value
  let name = formName.name.value;
  let email = formName.email.value;
  let phone = formName.phone.value;
  let message = formName.message.value;
  let myModal = new bootstrap.Modal(document.getElementById('messageModal'));
  let body = document.getElementById('modalMessageBody');
  let recaptchaBody = document.getElementById('modalRecaptchaBody');
  recaptchaBody.style.display = 'none';
  body.style.display = 'block';

  if (name == "") {
    body.innerHTML = '<h5 class="text-center" style="color: var(--bs-danger);font-family: Roboto, sans-serif;">Oops... Ocorreu um problema.</h5><p class="text-center" style="max-width: 320px;font-family: Roboto, sans-serif;">Por favor, preencha o campo <strong>Nome</strong> e tente novamente.</p>';
    myModal.show();
    formName.name.focus();
    return false;
  } else if (email == "") {
    body.innerHTML = '<h5 class="text-center" style="color: var(--bs-danger);font-family: Roboto, sans-serif;">Oops... Ocorreu um problema.</h5><p class="text-center" style="max-width: 320px;font-family: Roboto, sans-serif;">Por favor, preencha o campo <strong>E-mail</strong> e tente novamente.</p>';
    myModal.show();
    formName.email.focus();
    return false;
  } else if (email.indexOf('@') == -1) {
    body.innerHTML = '<h5 class="text-center" style="color: var(--bs-danger);font-family: Roboto, sans-serif;">Oops... Ocorreu um problema.</h5><p class="text-center" style="max-width: 320px;font-family: Roboto, sans-serif;">Por favor, preencha o campo com um <strong>E-mail válido</strong> e tente novamente.</p>';
    myModal.show();
    formName.email.focus();
    return false;
  } else if (phone == "") {
    body.innerHTML = '<h5 class="text-center" style="color: var(--bs-danger);font-family: Roboto, sans-serif;">Oops... Ocorreu um problema.</h5><p class="text-center" style="max-width: 320px;font-family: Roboto, sans-serif;">Por favor, preencha o campo <strong>Telefone</strong> e tente novamente.</p>';
    myModal.show();
    formName.phone.focus();
    return false;
  } else if (message == "") {
    body.innerHTML = '<h5 class="text-center" style="color: var(--bs-danger);font-family: Roboto, sans-serif;">Oops... Ocorreu um problema.</h5><p class="text-center" style="max-width: 320px;font-family: Roboto, sans-serif;">Por favor, preencha o campo <strong>Mensegem</strong> e tente novamente.</p>';
    myModal.show();
    formName.message.focus();
    return false;
  }
  recaptchaBody.style.display = 'block';
  body.style.display = 'none';
  myModal.show();
  return false;
}

function recaptchaCallback() {
  response = grecaptcha.getResponse();
  if (response.length != 0) {
    sendMessage();
  }
}

function sendMessage() {
  //Nome do form + nome do campo+ value
  let name = formName.name.value;
  let email = formName.email.value;
  let phone = formName.phone.value;
  let message = formName.message.value;

  let body = document.getElementById('modalMessageBody');
  let recaptchaBody = document.getElementById('modalRecaptchaBody');

  $.ajax({
    type: "POST",
    dataType: 'json',
    url: 'sendMessage',
    data: {
      name: name,
      email: email,
      phone: phone,
      message: message
    },
    beforeSend: function () {
      recaptchaBody.style.display = 'none';
      body.style.display = 'block';
      body.innerHTML = '<h5 class="text-center" style="color: var(--bs-info);font-family: Roboto, sans-serif;"><img src="assets/img/loading.gif" alt="Enviando..." style="border:0; width:130px"></h5>';
    },
    success: function (response) {
      recaptchaBody.style.display = 'none';
      body.style.display = 'block';
      body.innerHTML = '<h5 class="text-center" style="color: var(--bs-success);font-family: Roboto, sans-serif;">Sua mensagem foi enviada com sucesso!!!</h5><p class="text-center" style="max-width: 320px;font-family: Roboto, sans-serif;">Em preve estaremos retornando seu contato.</p>';
      formName.reset();
      grecaptcha.reset();
    },
    error: function () {
      alert('Ocorreu um erro!');
    }
  });
}