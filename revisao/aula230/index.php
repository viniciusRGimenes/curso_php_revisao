<form action="processa.php" method="post">
    <input type="text" name="nome" placeholder="Nome"><br><br>

    <label>Turma</label><br>
    <input type="radio" name="turma" value="M">Manhã
    <input type="radio" name="turma" value="T">Tarde
    <input type="radio" name="turma" value="N">Noite<br><br>

    <label>materias</label><br>
    <select name="materias[]" size="3" multiple >
        <option value="P">Português</option>
        <option value="M">Matematica</option>
        <option value="H">Historia</option>
        <option value="G">Geografia</option>
        <option value="F">Fisica</option>
        <option value="Q">Quimica</option>
        <option value="B">Biologia</option>
    </select><br><br>

    <input type="submit" name="enviar dados">

</form>
