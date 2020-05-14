$(function() {
  let breed = $('.breed');
  let original = breed.html();

  $('.type').on('change',function() {
      let val1 = $(this).val();

    breed.html(original).find('option').each(function() {
      let val2 = $(this).data('val');
      if (val1 !== val2) {
        $(this).not('.msg').remove();
      }
    });

    if ($(this).val() === '') {
      breed.attr('disable', 'disable');
    } else {
      breed.removeAttr('disable');
    }
  });
});
