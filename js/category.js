/**
 * Created by Armando_Navarro on 06/12/2016.
 */

$(function() {

    $('#frmCategoria').validate({
        rules: {

            nombreCategoria: {
                minlength: 3,
                required: true
            }
        },
        messages: {

            nombreCategoria: {
                required: "Capture el nombre de la categoria"
            }
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            newCategory();
            return false;
        }
    });

    $('#tbCategoria').DataTable({
        responsive: true,
        language:{
            url:"http://cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        ajax:{
            url:"/Yuritec/model/categories/GetCategories.php"  ,
            dataSrc:function(json){

                return json['msg'];
            }
        },
        columns:[
            {
                data:"categoryid"
            },
            {
                data:"categoryname"
            },
            {
                data: function (row) {
                    str = "<div align = 'center'>";
                    str+=str +="<button id='btnEditar' class='btn btn-success' onClick='showCarrera(" + row['idcarrera'] + ",\"" + row['nombrecarrera'] + "\",\"" + row['planEstudios'] + "\")'><i class=\"glyphicon glyphicon-edit\"></i> Editar</button>";
                    str += "&nbsp;<button id='btnBorrar' class='btn btn-danger' onClick='deleteCarrera(" + row['idcarrera'] + ")'><i class=\"glyphicon glyphicon-trash\"></i> Eliminar</button>";//trash
                    str += "</div>"
                    return str;
                }

            }

        ]
    });

   });

function newCategory(){

    $.ajax({
        url: "/Yuritec/model/categories/NewCategory.php",
        type: "post",
        data: {
            nombreCategoria : $('#nombreCategoria').val()
        }
    }).done(
        function(data){
            console.log("Si entro");
            if(data.code === 200){
                $.growl.notice({ message: data.msg });
                $('#tbCategoria').dataTable().api().ajax.reload();
                $('#nombreCategoria').val('');
                         }
            else{
                $.growl.error({ message: data.msg });
            }

        }
    ).fail(
        function(){
            $.growl.error({ message: "No hay mensaje que mostrar" });
        }
    );
}

