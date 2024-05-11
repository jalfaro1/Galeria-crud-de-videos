
          $(function () {
              $('#cp4').colorpicker().on('changeColor', function (e) {
                  $('.fondo')[0].style.backgroundColor = e.color.toString('rgba');
				  $('.fondo2')[0].style.backgroundColor = e.color.toString('rgba');
              });
          });
    