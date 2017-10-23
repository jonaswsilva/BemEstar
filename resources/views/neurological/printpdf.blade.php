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
  <h1>Avaliação Neurológica</h1>

<img src="/assets/images/avatars/{{ $medicalappointment->patient->avatar }}" />
<br/>
  <table>
    <tr>
      <th colspan="2">Dados da Consulta</th>
    </tr>
    <tr>
      <td>Id</td>
      <td>{{ $medicalappointment->id }}</td>
    </tr>
    <tr>
      <td>Paciente</td>
      <td>{{ $medicalappointment->patient->person->name }}</td>
    </tr>
    <tr>
      <td>Professional</td>
      <td>{{ $medicalappointment->professional->person->name }}</td>
    </tr>
    <tr>
      <td>Data</td>
      <td>{{ $medicalappointment->date_mu->format('d/m/Y') }}</td>
    </tr>
    <tr>
      <td>Hora</td>
      <td>{{ $medicalappointment->hour }}</td>
    </tr>
    <tr>
      <td>Descrição</td>
      <td>{{ $medicalappointment->description }}</td>
    </tr>
  </table>

<br />
<table>
  <tr>
    <th colspan="2">Anamnese</th>
  </tr>
  <tr>
    <td>História da moléstia pregresa:</td>
    <td>{{ $neurological->histp }}</td>
  </tr>
  <tr>
    <td>História da moléstia atual:</td>
    <td>{{ $neurological->hista }}</td>
  </tr>
  <tr>
    <td>História da moléstia familiar:</td>
    <td>{{ $neurological->histf }}</td>
  </tr>
  <tr>
    <td>Foco principal da conduta fisioterapêutica:</td>
    <td>{{ $neurological->focf }}</td>
  </tr>
</table>
<br />
<table>
  <tr>
    <th colspan="2">Inspeção</th>
  </tr>
  <tr>
    <td>Forma de locomoção (ao primeiro contato):</td>
    <td>{{ $neurological->foml }}</td>
  </tr>
  <tr>
    <td>Prótese: </td>
    <td>{{ $neurological->prot }}</td>
  </tr>
  <tr>
    <td>Órtese:</td>
    <td>{{ $neurological->ort }}</td>
  </tr>
  <tr>
    <td>Padrão motor predominante:</td>
    <td>{{ $neurological->padrm }}</td>
  </tr>
  <tr>
    <td>Condições da Pele:</td>
    <td>{{ $neurological->condp }}</td>
  </tr>
</table>
<br />
<table>
  <tr>
    <th colspan="2">Palpação</th>
  </tr>
  <tr>
    <td>Tônus de base:</td>
    <td>{{ $neurological->tonb }}</td>
  </tr>
  <tr>
    <td>Distribuição topográfica:</td>
    <td>{{ $neurological->distt }}</td>
  </tr>
  <tr>
    <td>Graduação:</td>
    <td>{{ $neurological->grad }}</td>
  </tr>
  <tr>
    <td>Testes comprobatórios:</td>
    <td>{{ $neurological->testc }}</td>
  </tr>
</table>
<br />
<table>
  <tr>
    <th colspan="2">Controle Motor</th>
  </tr>
  <tr>
    <td>Mobilidade/ADM:</td>
    <td>{{ $neurological->mobil }}</td>
  </tr>
  <tr>
    <td>Estabilidade:</td>
    <td>{{ $neurological->estab }}</td>
  </tr>
  <tr>
    <td>Marcha:</td>
    <td>{{ $neurological->march }}</td>
  </tr>
  <tr>
    <td>Estabilidade:</td>
    <td>{{ $neurological->estabh }}</td>
  </tr>
  <tr>
    <td>Caracterização da deambulação:</td>
    <td>{{ $neurological->caracd }}</td>
  </tr>
  <tr>
    <td>Moticidade fina:</td>
    <td>{{ $neurological->motf }}</td>
  </tr>
  <tr>
    <td>Mão tipos-de-pega:</td>
    <td>{{ $neurological->mao }}</td>
  </tr>
</table>
<br />
<table>
  <tr>
    <th colspan="2">Força Muscular</th>
  </tr>
  <tr>
    <td>Extensores e flexores do pescoço:</td>
    <td>{{ $neurological->extfp }}</td>
  </tr>
  <tr>
    <td>Abdutores e adutores do ombro:</td>
    <td>{{ $neurological->abad }}</td>
  </tr>
  <tr>
    <td>Rotadores internos e externos do ombro:</td>
    <td>{{ $neurological->rotie }}</td>
  </tr>
  <tr>
    <td>Extensores e flexores do cotovelo:</td>
    <td>{{ $neurological->extfc }}</td>
  </tr>
  <tr>
    <td>Extensores e flexores do punho:</td>
    <td>{{ $neurological->extefp }}</td>
  </tr>
  <tr>
    <td>Pronadores e supinadores:</td>
    <td>{{ $neurological->pros }}</td>
  </tr>
  <tr>
    <td>Extensores e flexores do quadril:</td>
    <td>{{ $neurological->extfq }}</td>
  </tr>
  <tr>
    <td>Abdutores e adutores do quadril:</td>
    <td>{{ $neurological->abadq }}</td>
  </tr>
  <tr>
    <td>Rotadores internos e externos:</td>
    <td>{{ $neurological->rotaie }}</td>
  </tr>
  <tr>
    <td>Extensores e flexores do joelho:</td>
    <td>{{ $neurological->extfj }}</td>
  </tr>
  <tr>
    <td>inversores e eversores do tornozelo:</td>
    <td>{{ $neurological->invt }}</td>
  </tr>
  <tr>
    <td>Plantiflexorese dorsiflexores e do tornozelo:</td>
    <td>{{ $neurological->pladt }}</td>
  </tr>
</table>
<br/>
<table>
  <tr>
    <th colspan="2">Avaliação Sensorial</th>
  </tr>
  <tr>
    <td>Sensibilidade superficial:</td>
    <td>{{ $neurological->senss }}</td>
  </tr>
  <tr>
    <td>Sensibilidade profunda:</td>
    <td>{{ $neurological->sensp }}</td>
  </tr>
</table>
<br/>
<table>
  <tr>
    <th colspan="2">Reflexos</th>
  </tr>
  <tr>
    <td>Corticais:</td>
    <td>{{ $neurological->cortc }}</td>
  </tr>
</table>

</body>
</html>
