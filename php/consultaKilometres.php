

    <form id="formCT">

        <div class="form-group">

            <br>
            <label for="inputDates">Fecha Inicial y Final</label>
            <div class="row">
                <div class="col">
                    <input type="date" name="DataICT" class="form-control inputDates" id="DataICT" placeholder="Introduce la Fecha">
                </div>
                <div class="col">
                    <input type="date" name="DataFCT" class="form-control inputDates" id="DataFCT" placeholder="Introduce la Fecha">
                </div>
            </div>
            <br>
        </div>
        <button type="button" class="btn btn-primary" onclick="comprovacionsCK()">Mostrar Datos</button>
    </form>

    <br>
    <div id="pAmagada" style="display:none;">
        <p></p>
    </div>

    <div id="TablaConsultaKilometrosDiv">
        <table id="TablaConsultaKilometros" class="table table-hover" style="display:none;">
            <thead>
                <tr>
                    <th scope="col">Referencia</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">KM INICIALES</th>
                    <th scope="col">KM FINALES</th>
                    <th scope="col">KM EMPRESA.I</th>
                    <th scope="col">KM PARTICULARES.I</th>
                    <th scope="col">BORRAR DATOS</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>


</div>

<script>
    
</script>