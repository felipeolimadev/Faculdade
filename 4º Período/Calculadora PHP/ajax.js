function chamarPhpAjax() {
   $.ajax({
      url:'imc.php',
      complete: function (response) {
         alert(response.responseText);
      },
      error: function () {
          alert('Erro');
      }
  });  

  return false;
}