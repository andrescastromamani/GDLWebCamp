(function(){
    "use strict";
    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function(){

        /*var map = L.map('map').setView([-17.392293,-66.145125], 17);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-17.392293,-66.145125]).addTo(map)
        .bindPopup('GDLWEBCAMP 2021 | Boletos Ya Disponibles')
        .openPopup();*/

        //Datos Usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');    

        //Campos pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_completo = document.getElementById('pase_completo');
        var pase_dosdias = document.getElementById('pase_dosdias');

        //Botones y Divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista_productos');
        var sumaTotal = document.getElementById('suma_total');

        //Extras y etiquetas
        var camisasEvento = document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas');

        //eventos
        calcular.addEventListener('click',calcularMontos);
        pase_dia.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);

        //Validaciones los campos con javascript
        nombre.addEventListener('blur',validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur',validarCampos);
        email.addEventListener('blur',validarMail);

        function validarCampos(){
            if(this.value ==''){
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'este campo es obligatorio';
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            }else{
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }
        }
        function validarMail(){
            if(this.value.indexOf('@') > -1){//index0f busca si existe el caracter en un arreglo o cadena
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }else{
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'debe tener por lo menos una @';
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            }
        }

        function calcularMontos(event){
            event.preventDefault();
            if(regalo.value === ''){
                alert('debes elegir un regalo');
                regalo.focus();
            }else{
                var boletosDia = parseInt(pase_dia.value,10)||0,
                    boletos2dias = parseInt(pase_dosdias.value,10)||0,
                    boletosCompleto = parseInt(pase_completo.value,10)||0,
                    numeroCamisas = parseInt(camisasEvento.value,10)||0,
                    numeroEtiquetas = parseInt(etiquetas.value,10)||0;
            
                var total = (boletosDia*30) + (boletos2dias*45) + (boletosCompleto*50) + (numeroCamisas*10)*.93  + (numeroEtiquetas*2);

                var listaProductos = [];
                if(boletosDia > 0){
                    listaProductos.push(boletosDia + ' Pases por dia');
                }
                if(boletos2dias > 0){
                    listaProductos.push(boletos2dias + ' Pases por 2 dias');
                }
                if(boletosCompleto > 0){
                    listaProductos.push(boletosCompleto + ' Pases completos');
                }
                if(numeroCamisas > 0){
                    listaProductos.push(numeroCamisas + ' Camisas');
                }
                if(numeroEtiquetas > 0){
                    listaProductos.push(numeroEtiquetas + ' Etiquetas');
                }
                //console.log(listaProductos);
                lista_productos.style.display = 'block';
                lista_productos.innerHTML = '';
                for(var i=0 ; i<listaProductos.length ; i++){
                    lista_productos.innerHTML +=  listaProductos[i] + '<br/>';
                }

                sumaTotal.innerHTML = '$ ' +  total.toFixed(2);//con 2 decimales
            }
        }
        function mostrarDias(){
            var boletosDia = parseInt(pase_dia.value,10)||0,
                boletos2dias = parseInt(pase_dosdias.value,10)||0,
                boletosCompleto = parseInt(pase_completo.value,10)||0;
                    
            var diasElegidos = [];
            if(boletosDia > 0){
                diasElegidos.push('viernes');
            }
            if(boletos2dias > 0){
                diasElegidos.push('viernes','sabado');
            }
            if(boletosCompleto > 0){
                diasElegidos.push('viernes','sabado','domingo');
            }
            for(var i=0 ; i<diasElegidos.length ; i++){
                document.getElementById(diasElegidos[i]).style.display='block';
            }
        }


    });
})();

$(function(){

    //Lettering
    $('.nombre-sitio').lettering();

    //Menu principal fijo
    var windowheight = $(window).height();
    var barraAltura = $('.barra').innerHeight();
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > windowheight){
            $('.barra').addClass('fixed');
            $('body').css({'margin-top':barraAltura+'px'});
        }else{
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top':'0px'});
        }
    });

    //Programa evento
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');
    $('.menu-programa a').on('click',function(){
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
        return false;//Para que no se mueva la pagina
    });

    //Animaciones para los numeros
    $('#resumen-evento li:nth-child(1) p').animateNumber({ number: 6 },1200); //nth-child reemplaza a :first ya que no existe second
    $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15 },1200);
    $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3 },1200);
    $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9 },1200);

    //Cuenta Regresiva
    $('.cuenta-regresiva').countdown('2021/02/30 12:00:00',function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });
});