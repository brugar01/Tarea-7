function imprimir(objeto) {
    var objectoSeleccionado = document.getElementById(objeto);
    var imprimirObjeto = window.open('','impresion');
    imprimirObjeto.document.write(objectoSeleccionado.innerHTML);
    imprimirObjeto.document.close();
    imprimirObjeto.print();
    imprimirObjeto.close();
}