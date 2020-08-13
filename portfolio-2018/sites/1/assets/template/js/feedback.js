$(document).ready(function(){

    $("#form-call").validate({

       rules:{

            inpt1:{
                required: true,
            },

            phone:{
                required: true,
            },
       },

       messages:{
            phone:{
                required: "Не заполнено поле",
            },
            inpt1:{
                required: "Не заполнено поле",
            },

       }

    });
    $("#form-main").validate({

       rules:{

            inpt1:{
                required: true,
            },

            phone:{
                required: true,
            },
       },

       messages:{
            phone:{
                required: "Не заполнено поле",
            },
            inpt1:{
                required: "Не заполнено поле",
            },

       }

    });

});