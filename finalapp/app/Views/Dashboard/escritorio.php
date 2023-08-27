<?= $this->extend('Views/Dashboard/plantilla');?>
<?= $this->section('menu');?>

<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Opciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Ventas/index'); ?>" class="nav-link" id="menuVentas">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ventas</p>
                </a>
              </li>
            </ul>
          </li>
 
          <li class="nav-item">
            <a href="#" onclick="cerrarSesion();"class="nav-link">
              <i class="fas fa-sign-out-alt text-danger"></i>
              <p>Salir</p>
            </a>
          </li>
        </ul>
      </nav>
<script type="text/javascript">
  function cerrarSesion(){
    swal.fire({
      title: '¿Deseas cerrar sesion?',
      text: 'La sesión esta a punto de terminar',
      icon: 'warning',
      showCancelButton: true,
      cancelButtonColor: '#d33',
      confirmButtonText:'Si'
    }).then((result)=>{
      if(result.isConfirmed){
        window.location.href ="<?php echo base_url('Login/cerrarSesion'); ?>" 
      }
    })
  }
  </script>






<?= $this->endSection();?>

