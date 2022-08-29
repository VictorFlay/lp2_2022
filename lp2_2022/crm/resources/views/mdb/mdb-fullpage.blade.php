@include('mdb.cabecalho', ['title' => $titulo ?? 'Nome da empresa']);

@yield('content');

@include('mdb.rodape');