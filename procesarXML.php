<?php
header("Content-Type: text/xml");
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');


// Generar el contenido XML
$xmlContent = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
$xmlContent .= "
<BIBLIOTECA>
    <LIBRO>
        <TITULO>JavaScript Ninja</TITULO>
        <AUTOR>John Resig, Bear Bibeault</AUTOR>
        <EDITORIAL>Anaya Multimedia</EDITORIAL> 
        <ISBN>978-84-415-3397-4</ISBN>
    </LIBRO>
    <LIBRO>
        <TITULO>Desarrollo Web en Entorno Cliente</TITULO>
        <AUTOR>Juan Manuel Vara Mesa y otros</AUTOR>
        <EDITORIAL>Ra-Ma</EDITORIAL> 
        <ISBN>978-84-9964-155-3</ISBN>
    </LIBRO>
    <LIBRO>
        <TITULO>Eloquent JavaScript</TITULO>
        <AUTOR>Marijn Haverbeke</AUTOR>
        <EDITORIAL>web</EDITORIAL>
        <ISBN></ISBN>
    </LIBRO>
    <LIBRO>
        <TITULO>Ajax</TITULO>
        <AUTOR>Maximiliano Firtman</AUTOR>
        <EDITORIAL>Marcombo</EDITORIAL>
        <ISBN>978-84-267-1740-5</ISBN>
    </LIBRO>
    <LIBRO>
        <TITULO>Desarrollo Web en entorno Cliente</TITULO>
        <AUTOR>Juan Luis Vicente Carro</AUTOR>
        <EDITORIAL>Garceta</EDITORIAL>
        <ISBN>978-84-1545-264-5</ISBN>
    </LIBRO>
    <LIBRO>
        <TITULO>Fundamentos de jQuery</TITULO>
        <AUTOR>Rebecca Murphey</AUTOR>
        <EDITORIAL>En la web</EDITORIAL>
        <ISBN></ISBN>
    </LIBRO>
    <LIBRO>
        <TITULO>HTML5, CSS3, y JavaScript</TITULO>
        <AUTOR>Julie C. Meloni</AUTOR>
        <EDITORIAL>Anaya Multimedia</EDITORIAL>
        <ISBN>978-84-415-3193-2</ISBN>
    </LIBRO>
    <LIBRO>
        <TITULO>HTML5 para desarrolladores</TITULO>
        <AUTOR>Joseph W. Lowey, Mark Fletcher</AUTOR>
        <EDITORIAL>Anaya Multimedia</EDITORIAL>
        <ISBN>978-84-415-3108-6</ISBN>
    </LIBRO>
    <LIBRO>
        <TITULO>JavaScript y jQuery</TITULO>
        <AUTOR>David Sawyer McFarland</AUTOR>
        <EDITORIAL>Anaya Multimedia</EDITORIAL>
        <ISBN>978-84-415-3151-2</ISBN>
    </LIBRO>
</BIBLIOTECA>";

// Enviar el contenido XML al navegador
echo $xmlContent;
?>
