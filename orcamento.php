<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">

        <?php include "config_bd.php"; ?>

        <input type="text" name="txtNome" placeholder="Nome completo"/>

        <input type="text" name="txtCPF" placeholder="CPF" />

        <input type="email" name="txtEmail" placeholder="Email" />

        <input type="text" name="txtTelefone" placeholder="Telefone" />

        <input type="text" name="txtTurno" placeholder="Turno para contato" />

        <input type="text" name="txtVara" placeholder="Vara do processo" />

        <input type="text" name="txtDescricao" placeholder="Descrição processual"/>

        <input type="submit" formaction="orcamento_salvar.php" value="Enviar" />

    </form>
</body>
</html>