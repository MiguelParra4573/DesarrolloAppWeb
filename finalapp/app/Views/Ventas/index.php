
<?= $this->extend('Views/Dashboard/escritorio'); ?>

<?= $this->section('contenido'); ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ventas</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Ventas</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Todas las Ventas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>nombrecomprador</th>
                                        <th>producto</th>
                                        <th>cantidad</th>
                                        <th>precio</th>
                                        <th>marca</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ventas as $venta): ?>
                                        <tr>
                                            <td><?= esc($venta['nombrecomprador']); ?> </td>
                                            <td><?= esc($venta['producto']); ?></td>
                                            <td><?= esc($venta['cantidad']); ?></td>
                                            <td><?= esc($venta['precio']); ?></td>
                                            <td><?= esc($venta['marca']); ?></td>
                                            <td>
                                               <a href="#" class="btn btn-sm btn-danger delete-persona" data-id="<?= $venta['id']; ?>">borrar</a>
                                           </td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>nombrecomprador</th>
                                        <th>producto</th>
                                        <th>cantidad</th>
                                        <th>precio</th>
                                        <th>marca</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

    <section class="content">
    <div class="card">
    <div class="card-header">
    <h5 class="card-title">
        Añadir Venta
    </h5>
    </div>
    <div class="card-body">
    <form role="form" action="<?= site_url('Ventas/guardarVenta'); ?>" method="post">

    <div class="form-group row"> 
    <label for="name" class="col-sm-2 col-form-label">nombrecomprador</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="nombrecomprador" placeholder="Ingresa el nombre de la persona a la que se le vende el producto" required>
    </div>
    </div>
    <div class="form-group row"> 
    <label for="name" class="col-sm-2 col-form-label">producto</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="producto" placeholder="Ingresa el nombre del producto" required>
    </div>
    </div>
    <div class="form-group row"> 
    <label for="name" class="col-sm-2 col-form-label">cantidad</label>
    <div class="col-sm-10">
    <input type="number" class="form-control" name="cantidad" placeholder="Ingresa la cantidad a vender" required>
    </div>
    </div>
    <div class="form-group row"> 
    <label for="name" class="col-sm-2 col-form-label">precio</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="precio" placeholder="Ingresa el precio unitario del producto" required>
    </div>
    </div>
    <div class="form-group row"> 
    <label for="name" class="col-sm-2 col-form-label">marca</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="marca" placeholder="Ingresa la marca del producto" required>
    </div>
    </div>
    </div>

    <div class="card-footer"> 
    <button type="submit" class="btn btn-info">agregar</button>  
    </div>
    </form>  
    </div>
    </div>

    </section>

</div>
<script type="text/javascript">
    $("#menuAdministracion").addClass("menu-open");
</script>
<script>
    $(document).ready(function() {
        $(".delete-venta").click(function() {
    const ventaId = $(this).data("id");
    
    if (confirm("¿Estás seguro de que deseas eliminar esta venta?")) {
        $.ajax({
            method: "POST",
            url: "<?= site_url('ventas/borrarVenta'); ?>/" + ventaId,
            success: function(response) {
                if (response.success) {
                    location.reload();
                }
            }
        });
    }
});
})
</script>




<?= $this->endSection(); ?>
