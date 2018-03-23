function checkConfirmDelete(ruta, literal) {
    if (confirm("¿Estás seguro de querer borrar "+literal+"?")) {
        location.href = ruta;
    }
}

function checkFormActor() {
    return true;
}

function switchLang(locale) {
    $.ajax({
        type:'POST',
        url:'http://localhost/edc_laravel/public/ajaxRequest', // Hasta q sepa como sacar la ruta root
        data:{
            locale: locale
        },
        success:function(data){
            location.reload();
        }
    });
}