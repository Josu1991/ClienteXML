function peticionXML(){
    //Creo nueva solicitud 
    let xhr=new XMLHttpRequest();
    //Abro conexión a procesarXML.php
    xhr.open('GET','procesarXML.php',true);
    //Cuando está lista la solicitud, procesar el XML
    xhr.onreadystatechange=function(){
        if(xhr.readyState===4 && xhr.status===200){
            mostrarXML(xhr.responseXML);
        }
    };
    xhr.send();
}
function mostrarXML(xmlDoc){
    let tabla=`<table>
    <tr>
    <th>Título</th>
    <th>Autor</th>
    <th>Editorial</th>
    <th>ISBN</th>
    <tr>`;
    //Obtener los elementos de LIBRO del XML
    let libros= xmlDoc.getElementsByTagName('LIBRO');
    //Iterar sobre cada libro y agregar una fila a la tabla
    Array.from(libros).forEach(libro=>{
        let titulo=libro.getElementsByTagName('TITULO')[0].textContent;
        let autor=libro.getElementsByTagName('AUTOR')[0].textContent;
        let editorial=libro.getElementsByTagName('EDITORIAL')[0].textContent;
        let isbn=libro.getElementsByTagName('ISBN')[0].textContent;
        tabla+=`<tr>
        <td>$Título</td>
        <td>$Autor</td>
        <td>$Editorial</td>
        <td>$ISBN</td>
        <tr>`;
    });
    tabla+='</table>';
    document.getElementById('tabla-contenido').innerHTML=tabla;
}
//Ejecutar petición XML cuando la página indice.html cargue completamente
window.addEventListener('load',peticionXML);