
window.onload = init;

function init() {
    var Mostrar = document.forms.Formulario.elements.Mostrar;

    Mostrar.addEventListener("click", () => {
        var s = document.getElementsByTagName('html')[0];
        var elemento =  document.forms.Formulario.elements;  
        var xml = '<?xml version="1.0" encoding="UTF-8" ?> \n<Cliente>\n';
        for(var i = 0; i < elemento.length-1; i++)
        {       

                    xml =  xml.concat("<"+elemento[i].name+">",elemento[i].value,"</"+elemento[i].name+">\n" );            
        }
        xml =  xml.concat("</Cliente>");
        Descargar("factura_tmrecords.xml", xml);

    })
}

function Descargar(nombre, texto) {
    var xml = document.createElement('a');
    xml.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(texto));
    xml.setAttribute('download', nombre);

    xml.style.display = 'none';
    document.body.appendChild(xml);

    xml.click();

    document.body.removeChild(xml);
}
