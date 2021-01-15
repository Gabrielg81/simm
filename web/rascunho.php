<h3>Disponibilidade: </h3>
<form action="#" type="post">
    <p style="margin-top: 10px">Único dia:</p>
        <input id="dat" type="date">
        <input type="submit" value="Checar">
    
</form>




<select id="select" multiple>
<?php while($row = $result->fetch_array()) { ?>
<option value="1"><?php echo $row["especialidades"]; ?></option>
<?php } ?>
</select>




<p style="cursor: pointer" onclick="Mudarestado('minhaDiv')">Semanalmente</p>

<section id="minhaDiv" style="display: none">
    <INPUT TYPE="checkbox" NAME="Segunda-feira" VALUE="segunda">
    <label for="segunda">Segunda-feira
    <br>
    <INPUT TYPE="checkbox" NAME="Terca-feira" VALUE="terca">
    <label for="terca">Terça-feira
    <br>
    <INPUT TYPE="checkbox" NAME="Quarta-feira" VALUE="quarta">
    <label for="quarta">Quarta-feira
    <br>
    <INPUT TYPE="checkbox" NAME="Quinta-feira" VALUE="quinta">
    <label for="quinta">Quinta-feira
    <br>
    <INPUT TYPE="checkbox" NAME="Sexta-feira" VALUE="sexta">
    <label for="sexta">Sexta-feira
    <br>
    <INPUT TYPE="checkbox" NAME="Sabado" VALUE="sabado">
    <label for="sabado">Sábado
<section>

