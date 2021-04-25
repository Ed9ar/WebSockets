<!doctype html>
<meta charset='utf-8'>
{{-- <link href='../css/dragula.css' rel='stylesheet' type='text/css' />
<link href='../css/example.css' rel='stylesheet' type='text/css' /> --}}
<link rel="stylesheet" href="{{ asset('/css/dragula.css')}}">
<link rel="stylesheet" href="{{ asset('/css/example.css')}}">
<title>Dashboard</title>

  <div class='parent center'>
    <label for='hy'>Dashboard de pedidos y entregas</label>
    <div class='wrapper'>
      <div id='left-defaults' class='container'>
        <h2>1. Salida de planta</h2>
        <div>You can move these elements between these two containers</div>
        <div>Moving them anywhere else isn't quite possible</div>
      </div>
      <div id='right-defaults' class='container'>
        <h2>2. En Local Delivery Center</h2>
        <div>There's also the possibility of moving elements around in the same container, changing their position</div>
        <div>This is the default use case. You only need to specify the containers you want to use</div>
        <div>More interactive use cases lie ahead</div>
        <div>Moving <code>&lt;input/&gt;</code> elements works just fine. You can still focus them, too. <input placeholder='See?' /></div>
        <div>Make sure to check out the <a href='https://github.com/bevacqua/dragula#readme'>documentation on GitHub!</a></div>
      </div>
      <div id='left-defaults' class='container'>
        <h2>3. En proceso de entrega</h2>
        <div>You can move these elements between these two containers</div>
        <div>Moving them anywhere else isn't quite possible</div>
      </div>
      <div id='right-defaults' class='container'>
        <h2>4. Entregado</h2>
        <div>There's also the possibility of moving elements around in the same container, changing their position</div>
        <div>This is the default use case. You only need to specify the containers you want to use</div>
        <div>More interactive use cases lie ahead</div>
        <div>Moving <code>&lt;input/&gt;</code> elements works just fine. You can still focus them, too. <input placeholder='See?' /></div>
        <div>Make sure to check out the <a href='https://github.com/bevacqua/dragula#readme'>documentation on GitHub!</a></div>
      </div>
      <div id='right-defaults' class='container'>
        <h2>5. Fallido</h2>
        <div>There's also the possibility of moving elements around in the same container, changing their position</div>
        <div>This is the default use case. You only need to specify the containers you want to use</div>
        <div>More interactive use cases lie ahead</div>
        <div>Moving <code>&lt;input/&gt;</code> elements works just fine. You can still focus them, too. <input placeholder='See?' /></div>
        <div>Make sure to check out the <a href='https://github.com/bevacqua/dragula#readme'>documentation on GitHub!</a></div>
      </div>
    </div>
  </div>
<script src="{{ asset('/js/dragula.js')}}"></script>
<script src="{{ asset('/js/example.js')}}"></script>
