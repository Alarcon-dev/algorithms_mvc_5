<h1>Registrar notas</h1>
<form action="<?= base_path ?>Promedio/saveInfo" method="post">
    <label for="name">Nombre: </label>
    <input type="text" name="name" id="">
    <label for="lstname">Apellifdo: </label>
    <input type="text" name="lastname" id=""><br><br>
    <label for="nota_1">Nota_1: </label>
    <input type="number" name="nota_1" id="">
    <label for="nota_2">Nota_2: </label>
    <input type="number" name="nota_2" id=""><br><br>
    <label for="nota_3">Nota_3: </label>
    <input type="number" name="nota_3" id="">
    <input type="submit" value="guardar">
</form>
<br>
<a href="<?= base_path ?>Home/index">Inicio</a>