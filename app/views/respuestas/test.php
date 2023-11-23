<h1>Preguntas de Matemáticas Básicas</h1>

<form action="<?= base_path ?>Respuesta/reception" method="post">

    <label for="pregunta1">1. ¿Cuánto es 2 + 2?</label>
    <select id="pregunta1" name="pregunta1">
        <option value="0">No Response</option>
        <option value="1">3</option>
        <option value="4">4</option>
    </select>
    <br>

    <label for="pregunta2">2. ¿Cuál es el resultado de 3 * 4?</label>
    <select id="pregunta2" name="pregunta2">
        <option value="0">No Response</option>
        <option value="1">10</option>
        <option value="4">12</option>
    </select>
    <br>

    <label for="pregunta3">3. Si tienes 5 manzanas y das 2, ¿cuántas te quedan?</label>
    <select id="pregunta3" name="pregunta3">
        <option value="0">No Response</option>
        <option value="1">2</option>
        <option value="4">3</option>
    </select>
    <br>

    <label for="pregunta4">4. ¿Cuánto es 10 / 2?</label>
    <select id="pregunta4" name="pregunta4">
        <option value="0">No Response</option>
        <option value="1">2</option>
        <option value="4">5</option>
    </select>
    <br>

    <input type="submit" value="Enviar">

</form>