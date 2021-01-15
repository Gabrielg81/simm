<?php require_once "scripts/listarMedicos.php" ?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <title><?php echo $siteNome ?></title>
    <meta name="description" content="<?php echo $desc ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.png" />

    <link rel="stylesheet" href="estilos/estilo.css">
</head>

<body>

    <div class="conteudo">
        <a href ="index.php"><img src="imagens/<?php echo $img ?>.svg" alt="<?php echo $siteNome ?>"></a>

        <div class="menu">
            <a class="caixa-menu" href="#item1">Cadastrar</a>
            <a class="caixa-menu" href="#item2">Listar</a>
            <a class="caixa-menu" href="#item3">Marcar consulta</a>
            <a class="caixa-menu" href="#item4">Ajuda</a>
        </div>

        <div class="pagina">

            <div id="item1">
                <table class="caixaPagina">
                    <tr>
                        <td>
                            <h2>Cadastrar Médico</h2>
                            <br>
                            <form action="scripts/cadMedico.php" method="post">

                                <h3>Identificação:</h3>

                                <input type=text name=nome placeholder="Insira o nome do médico">
                                <br>
                                <input type=text placeholder="Número de CRM" name=crm>
                                <br><br>

                                <h3>Especialidades:</h3>
                                <input type=text placeholder="Insira as áreas de atuação" name=especialidades>
                                <br><br>
                                <!-- Fazer lógica para adicionar mais um input de data e caso escolha semanal enviar os dias da semana específico. -->
                                <h3>Disponibilidade: </h3>

                                <h3>Dia</h3>
                                <input id="dat" name="dat" type="date">

                                <br><br>
                                <!-- Fazer lógica para verificar horário em uma data específica. -->

                                <h3>Horário:</h3>
                                <br>
                                <p>Entrada</p>
                                <input type="time" id="hentrada" name="hentrada" min="09:00" max="17:00" required>

                                <p>Saída</p>
                                <input type="time" id="hsaida" name="hsaida" min="09:00" max="17:00" required>

                                <br><br>

                                <input type=submit value=Cadastrar>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>

            <div id="item2">
                <table class="caixaPagina">
                    <tr>
                        <td>
                            <h2>Listar Médicos</h2>
                            <br>
                        </td>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>Nome</td>
                                    <td>CRM</td>
                                    <td>Especialidades</td>
                                    <td>Data de Atendimento</td>
                                    <td>Horário de Entrada</td>
                                    <td>Horário de Saída</td>
                                </tr>
                                <tr><?php while ($row = mysqli_fetch_array($result)) { ?>

                                        <td><?php echo $row["nome"] . "<br>"; ?></td>
                                        <td><?php echo $row["crm"] . "<br>"; ?></td>
                                        
                                        <td><?php echo $row["especialidades"]; ?></td>
                                        
                                        <td><?php echo $row["dat"] . "<br>"; ?></td>
                                        
                                        <td><?php echo $row["hentrada"] . "<br>"; ?></td>
                                        
                                        <td><?php echo $row["hsaida"] . "<br>"; ?></td>
                                        
                                </tr>
                            <?php } ?>
                            </thead>

                        </td>

                    </tr>
                </table>
            </div>

            <div id="item3">
                TODOS OS JOGOS AO VIVO APARECEM AQUI
            </div>
            <div id="item4">
                TODOS OS JOGOS PROXIMOS APARECEM AQUI
            </div>

        </div>

    </div>

    <div class="footer">
        <?php echo $siteNome ?> - Desenvolvido por G81.
    </div>

</body>

</html>