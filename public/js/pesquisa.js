$(document).ready(function() {
  $('#searchInput').on('input', function() {
    var searchTerm = $(this).val().toLowerCase();

    $('#fornecedorTabela tbody tr').each(function() {
      var linha = $(this);
      var colunas = linha.find('td');

      colunas.each(function() {
        var colunaTexto = $(this).text().toLowerCase();
        if (colunaTexto.indexOf(searchTerm) > -1) {
          linha.show();
          return false;
        } else {
          linha.hide();
        }
      });
    });
  });
});
