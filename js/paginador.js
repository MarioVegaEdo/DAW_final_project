Paginador = function(divPaginador, tabla, tamPagina)
{

    this.miDiv = divPaginador; 
    this.tabla = tabla;           
    this.tamPagina = tamPagina; 
    this.pagActual = 1;        
    this.paginas = Math.floor((this.tabla.rows.length - 1) / this.tamPagina);
																				
 
    this.SetPagina = function(num)
    {
        if (num < 0 || num > this.paginas)
            return;
 
        this.pagActual = num;
        var min = 1 + (this.pagActual - 1) * this.tamPagina;
        var max = min + this.tamPagina - 1;
 
        for(var i = 1; i < this.tabla.rows.length; i++) 
        {
            if (i < min || i > max)
                this.tabla.rows[i].style.display = 'none';
            else
                this.tabla.rows[i].style.display = '';
        }
        this.miDiv.firstChild.rows[0].cells[2].innerHTML = this.pagActual;
    }
 
    this.Mostrar = function()
    {
        // Crear la tabla
        var tblPaginador = document.createElement('table');
 
        // Agregar una fila a la tabla
        var fil = tblPaginador.insertRow(tblPaginador.rows.length);
 
        // Ahora, agregar las celdas que serían los controles

		var p = fil.insertCell(fil.cells.length);
        p.innerHTML = 'Primera';
        p.className = 'pag_btn botonP';
		var self = this;
        p.onclick = function()
        {
           if (self.pagActual == 1)
                return;
            self.SetPagina(1);
        }
 
        var ant = fil.insertCell(fil.cells.length);
        ant.innerHTML = 'Anterior';
        ant.className = 'pag_btn botonP'; // con eso le asigno un estilo
        
        ant.onclick = function()
        {
            if (self.pagActual == 1)
                return;
            self.SetPagina(self.pagActual - 1);
        }
 
        var num = fil.insertCell(fil.cells.length);
        num.innerHTML = ''; // en rigor, aÃºn no se el nÃºmero de la pÃ¡gina
        num.className = 'pag_num botonP';
 
		
        var sig = fil.insertCell(fil.cells.length);
        sig.innerHTML = 'Siguiente';
        sig.className = 'pag_btn botonP';
        sig.onclick = function()
        {
            if (self.pagActual == self.paginas)
                return;
            self.SetPagina(self.pagActual + 1);
        }
 
		var ult = fil.insertCell(fil.cells.length);
        ult.innerHTML = 'Ultima';
        ult.className = 'pag_btn botonP';
        ult.onclick = function()
        {
            if (self.pagActual == self.paginas)
                return;
            self.SetPagina(self.paginas);
        }
 
 
 
	
        // Como ya tengo mi tabla, puedo agregarla al DIV de los controles
        this.miDiv.appendChild(tblPaginador);
 
        // Â¿y esto por quÃ©?
        if (this.tabla.rows.length - 1 > this.paginas * this.tamPagina)
            this.paginas = this.paginas + 1;
 
        this.SetPagina(this.pagActual);
		
	
    }
}


