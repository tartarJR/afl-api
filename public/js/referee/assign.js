$(document).ready(function () {

  var form = $("#assign-referee-form");

  form.validate({
      ignore: ':hidden:not([class~=selectized]),:hidden > .selectized, .selectize-control .selectize-input input',
      errorPlacement: function errorPlacement(error, element) { element.before(error); },
      rules: {
          "game": "required",
          "referee": "required",
          "umpire": "required",
          "down-judge": "required",
          "line-judge": "required",
          "field-judge": "required",
          "side-judge": "required",
          "back-judge": "required",
      },
      messages: {
        "game": "Bu alanın seçimi zorunludur.",
        "referee": "Bu alanın seçimi zorunludur.",
        "umpire": "Bu alanın seçimi zorunludur.",
        "down-judge": "Bu alanın seçimi zorunludur.",
        "line-judge": "Bu alanın seçimi zorunludur.",
        "field-judge": "Bu alanın seçimi zorunludur.",
        "side-judge": "Bu alanın seçimi zorunludur.",
        "back-judge": "Bu alanın seçimi zorunludur."
    }
  });

  form.children("div").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      labels:
      {
        next: "Sonraki Adım",
        previous: "Önceki Adım",
        finish: "Atamaları Tamamla",
      },
      onStepChanging: function (event, currentIndex, newIndex)
      {
          return form.valid();
      },
      onFinishing: function (event, currentIndex)
      {
          return form.valid();
      },
      onFinished: function (event, currentIndex)
      {
          form.submit();
      }
  });

  $('#game-select').selectize({
      create: false,
      sortField: 'text'
  });

  $('.ref-select').selectize({
      create: false,
      sortField: 'text'
  });

});
