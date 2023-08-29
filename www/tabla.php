<section class="row">
    <div class="col-md-12">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th colspan="4">Ultimos Juegos</th>
                </tr>
                <tr>
                    <th scope="col" class="col-3">Fecha</th>
                    <th scope="col" class="col-3">Usuario</th>
                    <th scope="col" class="col-3">Jugadas</th>
                    <th scope="col" class="col-3">Resultado</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $resultados->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row["fecha_registro"]; ?></td>
                        <td><?php echo $row["usuario"]; ?></td>
                        <td><?php echo $row["Jugadas"]; ?></td>
                        <td><?php echo $row["Resultado"]; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <button class="borrar btn btn-primary btn-lg btn-block">Borrar puntuaciones</button>
    </div>
</section>
