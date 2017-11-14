<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D5E4F1;
}
</style>
</head>
<body>

<h3>Exemplo de CONTRATO</h3>
<br/>
CONTRATANTE (Tomador(a) de Serviços): Sr(a). {{ $patient->person->name.' '.$patient->person->lastname }} brasileiro(a), residente e domiciliado(a) na Rua {{ $patient->address->street }}, n° {{ $patient->address->number }}, Cidade de {{ $patient->address->city->name}}, Estado {{ $patient->address->city->state->name}}, CPF ou CNPJ: {{ $patient->person->cpf}}.
<br/>
<br/>
CONTRATADO (Prestador(a) de Serviços): Sr(a). _________________________________________ brasileiro(a), residente e domiciliado(a) na Rua _______________________, n°________, Cidade de _________________, Estado ___________________, CPF ou CNPJ: _____________________.
Referente a Prestação de Serviços do tipo: ___________________________________________________
<br/>
<br/>
___________________________________________________.
<br/>
<br/>
Pagamento da quantia de R$ ________,____, (_________________________________________)(valor por extenso), será efetuado de forma _________________________ sempre subsequente a competência. OU Pagamento parcelado mensal/semanal de ____ vezes de R$: ________,____ (____________________________________)(valor por extenso) será efetuado todo _____ dia do mes/semana, sempre subsequente a competência.
</body>
</html>
