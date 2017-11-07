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
  <h1>Procedimento</h1>

<img src="/assets/images/avatars/{{ $procedure->patient->avatar }}" />
<br/>
  <table>
    <tr>
      <th colspan="2">Dados da Consulta</th>
    </tr>
    <tr>
      <td>Paciente</td>
      <td>{{ $procedure->patient->person->name }}</td>
    </tr>
    <tr>
      <td>Professional</td>
      <td>{{ $procedure->professional->person->name }}</td>
    </tr>
    <tr>
      <td>Tipo</td>
      <td>{{ $procedure->type_procedures->name }}</td>
    </tr>
    <tr>
      <td>Data</td>
      <td>{{ $procedure->date_mu->format('d/m/Y') }}</td>
    </tr>
    <tr>
      <td>Valor</td>
      <td>{{ $procedure->price }}</td>
    </tr>
    <tr>
      <td>Pagamento em</td>
      <td>{{ $procedure->type_payment }}</td>
    </tr>
    <tr>
      <td>Parcelas</td>
      <td>{{ $procedure->plots }}</td>
    </tr>
    <tr>
      <td>Descrição</td>
      <td>{{ $procedure->observation }}</td>
    </tr>
  </table>
<br />
</body>
</html>
