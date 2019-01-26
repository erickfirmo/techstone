$('#dinamic-filter').keyup(function() {
    var filterName = $(this).val().toLowerCase();
    $('table#tabela-mensagens tbody').find('tr').each(function() {
        var contentCell = $(this).find('td').text();
        var hasContent = contentCell.toLowerCase().indexOf(filterName) >= 0;
        $(this).css('display', hasContent ? '' : 'none');
    });
});