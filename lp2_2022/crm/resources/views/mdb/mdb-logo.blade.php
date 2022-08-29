@extends('mdb.mdb-fullpage',['titulo' => 'Página do logo']);

@section('content');
<div style="height: 100vh">
    <div class="flex-center flex-column">
      <h1 class="text-hide animated fadeIn mb-4" style="background-image: url('https://mdbootstrap.com/img/logo/mdb-transparent-250px.png'); width: 250px; height: 90px;">MDBootstrap</h1>
      <h5 class="animated fadeIn mb-3">Teste de conteúdo para aula de LP2.</h5>
      <h5 class="animated fadeIn mb-3">Essa página é nosso primeiro template</h5>
      <p class="animated fadeIn text-muted">LPII 2022</p>
    </div>
  </div>
@endsection