$(document).ready(function(){
  // alert('JQuery está funcionando !!');
  $('#form1').validate({
      rules:{
        titulo:{
          required: true
        },
        cuerpo:{
          required: true
        }
      },
      messages:{
        titulo:{
          required: " Debe introducir el titulo del post"
        },
        cuerpo:{
          required: " Debe introducir el cuerpo del post"
        }
      }
  })
});

