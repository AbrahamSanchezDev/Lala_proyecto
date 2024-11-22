<!-- Modal de Agregar -->
<div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarLabel">Agregar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="agregar_carta_porte.php" method="post">
                    <input type="hidden" name="action" value="agregar">
                    <div class="mb-3">
                        <label for="operador" class="form-label">Operador</label>
                        <input type="text" class="form-control" id="operador" name="operador" required>
                    </div>

                    <div class="mb-3">
                        <label for="placa_de_transporte" class="form-label">Placa de Transporte</label>
                        <input type="text" class="form-control" id="placa_de_transporte" name="placa_de_transporte"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" required>
                    </div>
                    <div class="mb-3">
                        <label for="ciudad_origen" class="form-label">Ciudad de Origen</label>
                        <input type="text" class="form-control" id="ciudad_origen" name="ciudad_origen" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_de_salida" class="form-label">Fecha de Salida</label>
                        <input type="date" class="form-control" id="fecha_de_salida" name="fecha_de_salida" required>
                    </div>
                    <div class="mb-3">
                        <label for="hora_de_salida_de_transporte" class="form-label">Hora de Salida de
                            Transporte</label>
                        <input type="time" class="form-control" id="hora_de_salida_de_transporte"
                            name="hora_de_salida_de_transporte" required>
                    </div>
                    <div class="mb-3">
                        <label for="direccion_de_destino" class="form-label">Direccion de Destino</label>
                        <input type="text" class="form-control" id="direccion_de_destino" name="direccion_de_destino"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="numero_de_contacto" class="form-label">Numero de Contacto</label>
                        <input type="number" class="form-control" id="numero_de_contacto" name="numero_de_contacto"
                            min="1" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Buscar por ID -->
<div class="modal fade" id="modalBuscarFolio" tabindex="-1" aria-labelledby="modalBuscarFolioLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBuscarFolioLabel">Buscar Cartaporte por ID de Folio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="registro.php" method="post">
                    <input type="hidden" name="action" value="buscarFolio">
                    <div class="mb-3">
                        <label for="folioBuscar" class="form-label">ID de Folio</label>
                        <input type="number" class="form-control" id="folioBuscar" name="folioBuscar" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Editar Carta Porte -->
<?php if (isset($carta_porte_resultado)): ?>
<div class="modal fade show" id="modalEditarPrestamo" tabindex="-1" aria-labelledby="modalEditarPrestamoLabel"
    aria-modal="true" role="dialog" style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarPrestamoLabel">Editar Carta Porte</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="registro.php" method="post">
                    <input type="hidden" name="action" value="editar">
                    <input type="hidden" name="direccion_de_destino"
                        value="<?php echo intval($carta_porte_resultado['id']); ?>">

                    <div class="mb-3">
                        <label for="operador" class="form-label">Opedador</label>
                        <input type="text" class="form-control" id="operador" name="operador"
                            value="<?php echo htmlspecialchars($carta_porte_resultado['operador']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="placa_de_transporte" class="form-label">Placa de Transporte</label>
                        <input type="text" class="form-control" id="placa_de_transporte" name="placa_de_transporte"
                            value="<?php echo htmlspecialchars($carta_porte_resultado['placa_de_transporte']); ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo"
                            value="<?php echo htmlspecialchars($carta_porte_resultado['modelo']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="ciudad_origen" class="form-label">Ciudad Origen</label>
                        <input type="text" class="form-control" id="ciudad_origen" name="ciudad_origen"
                            value="<?php echo htmlspecialchars($carta_porte_resultado['ciudad_origen']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_de_salida" class="form-label">Fecha de Salida</label>
                        <input type="date" class="form-control" id="fecha_de_salida" name="fecha_de_salida"
                            value="<?php echo htmlspecialchars($carta_porte_resultado['fecha_de_salida']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="hora_de_salida_de_transporte" class="form-label">Hora de Salida de
                            Transporte</label>
                        <input type="time" class="form-control" id="hora_de_salida_de_transporte"
                            name="hora_de_salida_de_transporte"
                            value="<?php echo htmlspecialchars($carta_porte_resultado['hora_de_salida_de_transporte']); ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="numero_de_contacto" class="form-label">Numero de Contacto</label>
                        <input type="number" class="form-control" id="numero_de_contacto" name="numero_de_contacto"
                            value="<?php echo htmlspecialchars($carta_porte_resultado['numero_de_contacto']); ?>"
                            min="1" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Modal de Eliminar -->
<div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEliminarLabel">Eliminar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="eliminar_carta_porte.php" method="post">
                    <input type="hidden" name="action" value="eliminar">
                    <div class="mb-3">
                        <label for="folioEliminar" class="form-label">Número de Folio</label>
                        <input type="number" class="form-control" id="folioEliminar" name="folioEliminar" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Imprimir por ID -->
<div class="modal fade" id="modalImprimir" tabindex="-1" aria-labelledby="modalImprimirLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalImprimirLabel">Imprimir Cartaporte por ID de Folio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="registro.php" method="post">
                    <input type="hidden" name="action" value="imprimir">
                    <div class="mb-3">
                        <label for="imprimirFolio" class="form-label">ID de Folio</label>
                        <input type="number" class="form-control" id="imprimirFolio" name="imprimirFolio" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Incluir los recursos de boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>