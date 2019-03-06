 function muestraReloj()
        {
        // Compruebo si se puede ejecutar el script en el navegador del usuario
        if (!document.layers && !document.all && !document.getElementById) return;
        // Obtengo la hora actual y la divido en sus partes
        var fechacompleta = new Date();
        var horas = fechacompleta.getHours();
        var minutos = fechacompleta.getMinutes();
        var segundos = fechacompleta.getSeconds();
        var mt = "AM";
        // Pongo el formato 12 horas
        /*
        if (horas> 12) {
        mt = "PM";
        horas = horas - 12;
        }
        if (horas == 0) horas = 12;
        if(mt=="PM"){horas=horas+12;}
        */
        // Pongo minutos y segundos con dos digitos
        if (minutos <= 9) minutos = "0" + minutos;
        if (segundos <= 9) segundos = "0" + segundos;
        // En la variable 'cadenareloj' puedes cambiar los colores y el tipo de fuente
        //cadenareloj = "<font size='-1' face='verdana'>" + horas + ":" + minutos + ":" + segundos + " " + mt + "</font>";
        cadenareloj =horas + ":" + minutos + ":" + segundos;
        // Escribo el reloj de una manera u otra, segun el navegador del usuario
        if (document.layers) {
        document.layers.spanreloj.document.write(cadenareloj);
        document.layers.spanreloj.document.close();
        }
        else if (document.all) spanreloj.innerHTML = cadenareloj;
        else if (document.getElementById) document.getElementById("spanreloj").innerHTML = cadenareloj;
        // Ejecuto la funcion con un intervalo de un segundo
        setTimeout("muestraReloj()", 1000);
        }
function eliminar(url)
{
    if(window.confirm('Realmente está seguro de que desea eliminar este registro?'))
    {
        window.location=url;
    }
}
function confirmar(url,texto)
{
    if(window.confirm(texto))
    {
        window.location=url;
    }
}

 function carga_ajax(ruta,valor1,div) 
        {
           $.post(ruta,{valor1:valor1,_token:document.form._token.value},function(resp)
           {
                $("#"+div+"").html(resp);
           });
           return false;
           
        }
function buscar_guia(page)
{
    if(document.buscador.numero.value=='')
    {
        return false;
    }
    window.location=base_url+'ordenes-de-despacho-search/'+document.buscador.numero.value+'?page='+page;
}
function buscar_orden_de_retiro()
{
    if(document.buscador.numero.value=='')
    {
        return false;
    }
    window.location=base_url+'ordenes-de-retiro-search/'+document.buscador.numero.value;
}
function buscar_guia_modal(slug)
{
    if(document.search.numero.value=='' || document.search.numero.value==0)
    {
        return false;
    }
    window.location=base_url+'ordenes-de-despacho-filtro/'+slug+'/'+document.search.numero.value;
}
function alpha(e) 
         {
         key = e.keyCode || e.which;
           tecla = String.fromCharCode(key).toLowerCase();
           //alert(key);
           letras = " ÃƒÂ¡ÃƒÂ©ÃƒÂ­ÃƒÂ³ÃƒÂºabcdefghijklmnÃƒÂ±opqrstuvwxyz";
           //especiales = [8,37,39,46];
            especiales = [8,39,46,241,225,233,237,243,250];
           tecla_especial = false
           for(var i in especiales){
                if(key == especiales[i]){
                    tecla_especial = true;
                    break;
                }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
}

function soloNumeros(evt)
{
	key = (document.all) ? evt.keyCode :evt.which;
	//alert(key);
    if(key==17)return false;
	/* digitos,del, sup,tab,arrows*/
	return ((key >= 48 && key <= 57) || key == 8 || key == 127 || key == 9 || key==0);
}
function enviar_select(controller,view,id)
{
    if(id>=1)
    {
        window.location=base_url+''+controller+'/'+view+'/'+id;
    }
}
function precarga()
{
    document.getElementById('modal_1').style.display='none';
    document.getElementById('modal_2').style.display='block';
}
//funcionalidades al inicio
window.onload = function() 
            {
            muestraReloj();
            };