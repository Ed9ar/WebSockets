<!doctype html>
<meta charset='utf-8'>
{{-- <link href='../css/dragula.css' rel='stylesheet' type='text/css' />
<link href='../css/example.css' rel='stylesheet' type='text/css' /> --}}
<link rel="stylesheet" href="{{ asset('/css/dragula.css')}}">
<link rel="stylesheet" href="{{ asset('/css/dashboard.css')}}">
<title>Dashboard</title>

  <div class='parent center'>
    <label for='hy'>Dashboard de pedidos y entregas</label>
    <div class='wrapper'>
      <div id='left-defaults' class='container'>
        <h2>1. Salida de planta</h2>
        <div>Pedido #1</div>
      </div>
      <div id='right-defaults' class='container'>
        <h2>2. En Local Delivery Center</h2>
      </div>
      <div id='left-defaults' class='container'>
        <h2>3. En proceso de entrega</h2>
        <div>Pedido #3</div>
      </div>
      <div id='right-defaults' class='container'>
        <h2>4. Entregado</h2>
      </div>
      <div id='right-defaults' class='container'>
        <h2>5. Fallido</h2>
        <div>Pedido #2</div>
      </div>
    </div>
  </div>
<script src="{{ asset('/js/dragula.js')}}"></script>
<script src="{{ asset('/js/example.js')}}"></script>
