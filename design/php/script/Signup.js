$(document).ready(function() {
  var year = new Date().getFullYear();
  // load years
  for (var i = year - 1; i >= 1970; i--) $("#year").append('<option value=' + i + '>' + i + '</option>');
  // load months
  for (var i = 1; i <= 12; i++) $("#month").append('<option value=' + i + '>' + i + '</option>');
  // load days
  for (var i = 1; i <= 31; i++) $("#day").append('<option value=' + i + '>' + i + '</option>');
});

$(function() {
  $('#year').change(function() {
    var now = new Date();
    if ($('#year').val() == now.getFullYear()) {
      $('#month option').each(function() {
        if ($(this).val() > (now.getMonth() + 1)) $(this).remove();
      });
    } else {
      for (var i = 1; i < 13; i++)
        if ($("#month option[value='" + i + "']").val() == undefined)
          $("#month").append('<option value=' + i + '>' + i + '</option>');
    }

    checkMonth();
  });

  $('#month').change(checkMonth);
});

function checkMonth() {
  var now = new Date();
  if ($('#year').val() == now.getFullYear() && $('#month').val() == (now.getMonth() + 1)) {
    $('#day option').each(function() {
      if ($(this).val() > now.getDate()) $(this).remove();
    });
  } else {
    var days = 31;
    var month = $('#month').val();
    if (month == 2) {
      if (($('#year').val() % 4) == 0) days = 29; // leap year
      else days = 28;
    } else if (month == 2 || month == 4 || month == 6 || month == 9 || month == 11) {
      days = 30;
    }
    for (var i = 1; i < 32; i++)
      if (i > days)
        $("#day option[value='" + i + "']").remove();
      else if ($("#day option[value='" + i + "']").val() == undefined)
      $("#day").append('<option value=' + i + '>' + i + '</option>');
  }
}