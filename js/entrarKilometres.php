
    <br>
    <form>

        <div class="form-group">
            <label for="datepicker">Fecha</label>
            <input type="date" class="form-control" id="iDataFEK" placeholder="Introduce la Fecha">
            <small class="form-text text-muted">La ultima fecha introducida es: <?php // echo $dades[0]->REF;?> </small>
        </div>
        <br>
        <div class="form-group">
            <label>Kilometros</label>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="iKilInicial" value="<?php // echo $dades[0]->KMFINALS; ?>" placeholder="Kilometros Iniciales" disabled>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="iKilFinal" placeholder="Kilometros Finales" onkeyup="BuscarKilometrosFEK('finals')">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="iKilEmpresa" placeholder="Kilometros Empresa" disabled>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="iKilParticulares" placeholder="Kilometros Particulares" onkeyup="BuscarKilometrosFEK('particulars')">
                </div>
            </div>
        </div>



        <button type="button" class="btn btn-outline-secondary" onclick="borrarDatos();">Borrar Datos</button>
        <button type="button" class="btn btn-primary" onclick="ComprovacionsFET()">Grabar</button>
    </form>