<fieldset>
    <legend>Informacion General</legend>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="vendedor[nombre]" placeholder="Nombre del vendedor" value="<?php echo s($vendedor->nombre); ?>">

    <label for="apellido">Apellido:</label>
    <input type="text" id="nombre" name="vendedor[apellido]" placeholder="Apellido del vendedor" value="<?php echo s($vendedor->apellido); ?>">
</fieldset>

<fieldset>
    <legend>Informacion Extra</legend>

    <label for="telefono">Telefono:</label>
    <input type="number" id="nombre" name="vendedor[telefono]" placeholder="Telefono del vendedor" value="<?php echo s($vendedor->telefono); ?>">
</fieldset>