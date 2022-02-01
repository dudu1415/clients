<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Título da página</title>
    <meta charset="utf-8">
</head>
<body>
<form action="/bills/store" method="post">
    @csrf
    <input name="invoice" placeholder="Onvoice">
    <br>
    <br>
    <input name="installment" placeholder="Fatura">
    <br>
    <br>
    <input name="value" placeholder="Valor">
    <br>
    <br>
    <button type="submit">Enviar</button>
</form>
</body>
</html>
