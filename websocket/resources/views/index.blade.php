<!doctype html>
<meta charset='utf-8'>
{{-- <link href='../css/dragula.css' rel='stylesheet' type='text/css' />
<link href='../css/example.css' rel='stylesheet' type='text/css' /> --}}
<link rel="stylesheet" href="{{ asset('/css/dragula.css')}}">
<link rel="stylesheet" href="{{ asset('/css/dashboard.css')}}">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container">

        <br>
        <div class="row">
            <div class="col-8">
               
               
                    <div class="form-group">
                      <label for="" style="color:white;">Paqueteria</label>
                      <input id = "name" type="text" class="form-control" name="name" placeholder="Package name">
                    </div>
                    <button type="submit" class="btn btn-primary" onclick = createPackage()>Submit</button>
                 
            </div>
            <div id="notif" style=text-align:right;color:white;background-color:green;></div>
        </div>

    </div>


<title>Dashboard</title>


<div class='parent center'>

    <label for='hy'>Dashboard de pedidos y entregas</label>
    <div class='wrapper'>
        <div id='linea-planta' class='container'>
            <h2>1. Salida de planta</h2>
            @foreach ($packages as $item)
                @if ($item->status == 1)
                    <div id = "{{$item->id}}">Pedidos {{$item->id}} 
                        <br>
                        {{$item->name}}
                        <br>
                    </div>
                    
                @endif
            @endforeach
        </div>
        <div id='linea-ldc' class='container'>
            <h2>2. En Local Delivery Center</h2>
            @foreach ($packages as $item)
                @if ($item->status == 2)
                    <div id = "{{$item->id}}">Pedido {{$item->id}} <br>{{$item->name}}</div>
                @endif
            @endforeach
        </div>
        <div id='linea-entrega' class='container'>
            <h2>3. En proceso de entrega</h2>
            @foreach ($packages as $item)
                @if ($item->status == 3)
                    <div id = "{{$item->id}}">Pedido {{$item->id}} <br>{{$item->name}}</div>
                @endif
            @endforeach
        </div>
        <div id='linea-entregado' class='container'>
            <h2>4. Entregado</h2>
            @foreach ($packages as $item)
                @if ($item->status == 4)
                    <div id = "{{$item->id}}">
                        Pedido {{$item->id}}
                        <br>
                        {{$item->name}}
                    </div>
                @endif
            @endforeach
        </div>
        <div id='linea-fallido' class='container'>
            <h2>5. Fallido</h2>
            @foreach ($packages as $item)
                @if ($item->status == 5)
                    <div id = "{{$item->id}}">Pedido {{$item->id}} <br>{{$item->name}}</div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<script src="{{ asset('/js/dragula.js')}}"></script>
<script src="{{ asset('/js/dashboard.js')}}"></script>
<script src='js/app.js'></script>
<script>
      
        window.Echo.channel('testChannel').listen('PackageUpdateNotification', (e) => {

            
            var lineaPlanta = document.querySelector('#linea-planta');
            var lineaLdc = document.querySelector('#linea-ldc');
            var lineaEntrega= document.querySelector('#linea-entrega');
            var lineaEntregado = document.querySelector('#linea-entregado');
            var lineaFallido = document.querySelector('#linea-fallido');


            console.log(e);
            if (e.status == 1) {
                var node = document.createElement('DIV');
                node.setAttribute("id",e.package)
                node.innerHTML ='Pedidos '+e.package+''+e.name
                lineaPlanta.append(node)
                document.getElementById("notif").innerHTML = "El paquete " + e.package + " fue creado";
            }
            if (e.status == 2) {
                lineaLdc.append( document.getElementById(e.package))
                document.getElementById("notif").innerHTML = "El paquete " + e.package + " se modifico";
            }
            if (e.status == 3) {
                lineaEntrega.append( document.getElementById(e.package))
                document.getElementById("notif").innerHTML = "El paquete " + e.package + " se modifico";
            }
            if (e.status == 4) {
                lineaEntregado.append( document.getElementById(e.package))
                document.getElementById("notif").innerHTML = "El paquete " + e.package + " se modifico";
            }
            if (e.status == 5) {
                lineaFallido.append( document.getElementById(e.package))
                document.getElementById("notif").innerHTML = "El paquete " + e.package + " se modifico";
            }
        }); 

        function createPackage() {
            let theDescription = $('#name').val();
            var lineaPlanta = document.querySelector('#linea-planta');
            console.log("POSt")
            $.ajax({
                url: '{{ route('package.store') }}',
                method: 'POST',
                headers:{
                    'Accept': 'application/json',
                    'X-CSRF-Token': $('meta[name="csrf-token"').attr('content')
                },
                data: {
                    name: theDescription
                }
            })
            .done(function(response) {
                console.log('Éxitoso',response);
                updateEvent(response.id, 1, response.name)
            })
            .fail(function(jqXHR, response) {
                console.log('Fallido', response);
            });
        }
</script>
