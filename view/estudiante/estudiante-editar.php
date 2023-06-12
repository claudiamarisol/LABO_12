<h1><?php echo $est->id != null ? $est->nombre : 'Nuevo Registro'; ?></h1>
<ol>
  <li><a href="?c=Estudiante">Estudiantes</a></li>
  <li><?php echo $est->id != null ? $est->nombre : 'Nuevo Registro'; ?></li>
</ol>
<form action="?c=Estudiante&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id-form" value="<?php echo $est->id; ?>" />  
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre-form" value="<?php echo $est->nombre; ?>" placeholder="Ingrese su nombre"/>
    </div>
    <div>
        <label>Apellido</label>
        <input type="text" name="apellido-form" value="<?php echo $est->apellido; ?>" placeholder="Ingrese su apellido"/>
    </div>
    <div>
        <label>Correo</label>
        <input type="text" name="email-form" value="<?php echo $est->email; ?>" placeholder="Ingrese su correo electrónico"/>
    </div>
    <hr />    
    <div>
        <button>Guardar</button>
    </div>
</form>