<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Título da página</title>
    <meta charset="utf-8">
</head>
<body>
    <form action="/clients/store" method="post">
        @csrf
        <input name="name" placeholder="Nome">
        <br>
        <br>
        <input name="email" placeholder="E-mail">
        <br>
        <br>
        <input name="phone" placeholder="Telefone">
        <br>
        <br>
        <input name="id_number" placeholder="CPF">
        <br>
        <br>
        <button type="submit">Enviar</button>

    </form>
</body>
</html>
