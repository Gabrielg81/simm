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

    <script src="js/.js"></script>
</head>

<body>

    <div class="conteudo">
        <a href="index.php"><img src="imagens/<?php echo $img ?>.svg" alt="<?php echo $siteNome ?>"></a>

        <div class="menu">
            <a class="caixa-menu" href="#item1">Cadastrar</a>
            <a class="caixa-menu" href="#item2">Listar</a>
            <a class="caixa-menu" href="#item3">Marcar consulta</a>
            <a class="caixa-menu" href="#item4">Ajuda</a>
        </div>

        <div class="menuMobile">
            <img src="imagens/menu.png" style="width: 50px; float: left; margin: 0 0 25px 25px" onclick="Mudarestado('menuItens')"/>
            <div id="menuItens" class="menuItens">
                <a class="" href="#item1">Cadastrar</a>
                <a class="" href="#item2">Listar</a>
                <a class="" href="#item3">Marcar consulta</a>
                <a class="" href="#item4">Ajuda</a>
            </div>
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


                                <session style="display: grid; border: 1px solid; margin-top: 5px; ">
                                    <session style="display: flex;">
                                        <p style="cursor: pointer; margin: 10px" onclick="Mudarestado('unicoDia')">Data única</p>
                                        <p style="cursor: pointer; margin: 10px" onclick="Mudarestado('periodico')">Periódico</p>
                                        <p style="cursor: pointer; margin: 10px" onclick="Mudarestado('recorrente')">Recorrente</p>
                                    </session>

                                    <br>

                                    <session id="unicoDia" style="display: none; margin: 10px">
                                        <h4>Informe a data de atendimento</h4>
                                        <input id="dataUnica" name="dataUnica" type="date">
                                    </session>

                                    <session id="periodico" style="display: none; margin: 10px">
                                        <h4>Data de inicio</h4>
                                        <input id="dataInicio" name="dataInicio" type="date">
                                        <h4>Data de término</h4>
                                        <input id="dataFim" name="dataFim" type="date">
                                    </session>

                                    <session id="recorrente" style="display: none; margin: 10px">

                                        <h4>Informe os dias de atentimento</h4>
                                        <br>
                                        <INPUT TYPE="checkbox" value="segunda-feira" NAME="arraydia[]">
                                        <label for="segunda">Segunda-feira
                                            <br>
                                            <INPUT TYPE="checkbox" value="terça-feira" NAME="arraydia[]">
                                            <label for="terca">Terça-feira
                                                <br>
                                                <INPUT TYPE="checkbox" value="quarta-feira" NAME="arraydia[]">
                                                <label for="quarta">Quarta-feira
                                                    <br>
                                                    <INPUT TYPE="checkbox" value="quinta-feira" NAME="arraydia[]">
                                                    <label for="quinta">Quinta-feira
                                                        <br>
                                                        <INPUT TYPE="checkbox" value="sexta-feira" NAME="arraydia[]">
                                                        <label for="sexta">Sexta-feira
                                                            <br>

                                    </session>
                                </session>


                                <!-- Fazer lógica para verificar horário em uma data específica. -->

                                <h3>Horário:</h3>
                                <session style="display: grid; border: 1px solid; margin: 5px 0; padding: 10px ">
                                    <p>Entrada</p>
                                    <input type="time" id="hentrada" name="hentrada" min="09:00" max="17:00" required>

                                    <p>Saída</p>
                                    <input type="time" id="hsaida" name="hsaida" min="09:00" max="17:00" required>

                                </session>

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
                            <form action="" method="post" name="pesquisar">
                            <input name="nome" type="text" placeholder="Digite o nome do médico" />
                            <input name="submit" type="submit" value="Pesquisar" />
                            </form>
                        </td>
                    <tr>
                    </tr>
                        <td>
                        <br>
                            <table>
                                <tr>
                                    <td>Nome</td>
                                    <td>CRM</td>
                                    <td>Especialidades</td>
                                    <td>Editar</td>

                                </tr>
                                <tr><?php while ($row = mysqli_fetch_array($resultados)) { ?>

                                        <td><?php echo $row["nome"] . "<br>"; ?></td>
                                        <td><?php echo $row["crm"] . "<br>"; ?></td>
                                        <td><?php echo $row["especialidades"]; ?></td>
                                        <td></td>

                                        

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