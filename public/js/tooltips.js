$(document).ready(function()
{  /*Empiezan el document ready */

	/* Empiezan los tooltips del formulario del proyecto*/
    $('#formularioproyecto').on('mouseover',function()
     {
            $("#myTooltip0").tooltip({
                title : 'Indique el nombre del proyecto.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body',
                
                
            });

            $("#myTooltip1").tooltip({

                title : 'Indique el folio del proyecto, con el cual será identificado este proyecto.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
                
            });

            $("#myTooltip2").tooltip({
               
               title : 'Modalidad del proyecto.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip3").tooltip({
               
               title : 'Tipo de propuesta.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip4").tooltip({
                html: true,
                title : 'En esta parte llenar los siguientes requisitos:<br>•Título  <br>•Modalidad  <br>•Tipo de propuesta  <br>•Entidad  <br>•Municipio  <br>•Localidad',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip5").tooltip({
                title : 'Opcional PEI.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip6").tooltip({
               
               title : 'Opcional PEI.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip7").tooltip({
               
               title : 'Opcional PEI.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip8").tooltip({
               
                title : 'Se debe seleccionar al menos 3 palabras clave para que los evaluadores identifiquen a grandes rasgos de que trata el proyecto.',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip9").tooltip({
                html:true,
                title : 'Los tipos de innovación que existen son las siguientes: <br>•Producto<br>•Proceso<br>•Servicio',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip10").tooltip({
               
               title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip11").tooltip({
               
               title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

            $("#myTooltip12").tooltip({
               
               title : 'Opcional PEI',
                placement : 'right',
                trigger: 'click hover',
                container: 'body'
               
            });

     });
    /* Terminan los tooltips del formulario del proyecto*/

  

}); /* Termina el document ready*/
