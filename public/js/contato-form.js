$(document).ready(function () {
  $('#contatoForm').on('submit', function (e) {
    e.preventDefault();

    const formData = {
      name: $('input[name="name"]').val(),
      email: $('input[name="email"]').val(),
      message: $('textarea[name="message"]').val()
    };

    $.ajax({
      url: 'http://localhost:3000/contato',
      method: 'POST',
      contentType: 'application/json',
      data: JSON.stringify(formData),
      success: function (response) {
        console.log('Sucesso:', response);
        alert('Contato enviado com sucesso!');
        $('#contactForm')[0].reset();
      },
      error: function (xhr, status, error) {
        console.error('Erro:', error);
        alert('Erro ao enviar o contato.');
      }
    });
  });
});