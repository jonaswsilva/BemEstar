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
  background-color: #dddddd;
}
</style>
</head>
<body>
  <h1>Dados da consulta</h1>

<img src="/assets/images/avatars/{{ $medicalappointment->patient->avatar }}" />

  <table>
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
</div>

<table>
  <tr>
    <th colspan="2">Vista Posterior</th>
  </tr>
  <tr>
    <td>Id</td>
    <td>{{ $postural->id }}</td>
  </tr>
  <tr>
    <td>Anamnese:</td>
    <td>{{ $postural->comment }}</td>
  </tr>
  <tr>
    <td>Cabeça:</td>
    <td>{{ $postural->head }}</td>
  </tr>
  <tr>
    <td>Cervical:</td>
    <td>{{ $postural->cerv }}</td>
  </tr>
  <tr>
    <td>Ombros:</td>
    <td>{{ $postural->omb }}</td>
  </tr>
  <tr>
    <td>Escápula Direita:</td>
    <td>{{ $postural->escd }}</td>
  </tr>
  <tr>
    <td>Escápula Esquerda: </td>
    <td>{{ $postural->esce }}</td>
  </tr>
  <tr>
    <td>Triângulo de Talles:</td>
    <td>{{ $postural->tritp }}</td>
  </tr>
  <tr>
    <td>Golpe do Machado:</td>
    <td>{{ $postural->gmach }}</td>
  </tr>
  <tr>
    <td>Cristas Ilíacas:</td>
    <td>{{ $postural->crip }}</td>
  </tr>
  <tr>
    <td>Pregas Glúteas:</td>
    <td>{{ $postural->preg }}</td>
  </tr>
  <tr>
    <td>Joelhos:</td>
    <td>{{ $postural->joel }}</td>
  </tr>
  <tr>
    <td>Pregas Poplíteas:</td>
    <td>{{ $postural->pregp }}</td>
  </tr>
  <tr>
    <td>Retro-pé:</td>
    <td>{{ $postural->retrop }}</td>
  </tr>
</table>

<table>
  <tr>
    <th colspan="2">Vista Anterior</th>
  </tr>
  <tr>
    <td>Cabeça:</td>
    <td>{{ $postural->heada }}</td>
  </tr>
  <tr>
    <td>Clavículas:</td>
    <td>{{ $postural->clava }}</td>
  </tr>
  <tr>
    <td>Gladil Costal:</td>
    <td>{{ $postural->gladc }}</td>
  </tr>
  <tr>
    <td>Ombros:</td>
    <td>{{ $postural->ombra }}</td>
  </tr>
  <tr>
    <td>Triângulo de Talles:</td>
    <td>{{ $postural->trit }}</td>
  </tr>
  <tr>
    <td>Rotação de Tronco:</td>
    <td>{{ $postural->rott }}</td>
  </tr>
  <tr>
    <td>Cristas Ilíacas:</td>
    <td>{{ $postural->cri }}</td>
  </tr>
  <tr>
    <td>Rotação de Pelve:</td>
    <td>{{ $postural->rotp }}</td>
  </tr>
  <tr>
    <td>Joelho:</td>
    <td>{{ $postural->joelhva }}</td>
  </tr>
  <tr>
    <td>Paletas:</td>
    <td>{{ $postural->palet }}</td>
  </tr>
  <tr>
    <td>Ante-Pé:</td>
    <td>{{ $postural->antp }}</td>
  </tr>
  <tr>
    <td>Paletas:</td>
    <td>{{ $postural->palet }}</td>
  </tr>
  <tr>
    <td>Paletas:</td>
    <td>{{ $postural->palet }}</td>
  </tr>
</table>

<table>
  <tr>
    <th colspan="2">Vista Lateral</th>
  </tr>
  <tr>
    <td>Cabeça:</td>
    <td>{{ $postural->heada }}</td>
  </tr>
  <tr>
    <td>Cervical:</td>
    <td>{{ $postural->clava }}</td>
  </tr>
  <tr>
    <td>Ombros:</td>
    <td>{{ $postural->clava }}</td>
  </tr>
  <tr>
    <td>MS:</td>
    <td>{{ $postural->clava }}</td>
  </tr>
  <tr>
    <td>Abdomem:</td>
    <td>{{ $postural->clava }}</td>
  </tr>
  <tr>
    <td>Dorsal:</td>
    <td>{{ $postural->clava }}</td>
  </tr>
  <tr>
    <td>Lombar:</td>
    <td>{{ $postural->clava }}</td>
  </tr>
  <tr>
    <td>Pelve:</td>
    <td>{{ $postural->clava }}</td>
  </tr>
  <tr>
    <td>Joelho:</td>
    <td>{{ $postural->clava }}</td>
  </tr>
  <tr>
    <td>Médio-Pé:</td>
    <td>{{ $postural->clava }}</td>
  </tr>
</table>

</body>
</html>
