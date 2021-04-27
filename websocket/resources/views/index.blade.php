<!doctype html>
<meta charset='utf-8'>
{{-- <link href='../css/dragula.css' rel='stylesheet' type='text/css' />
<link href='../css/example.css' rel='stylesheet' type='text/css' /> --}}
<link rel="stylesheet" href="{{ asset('/css/dragula.css')}}">
<link rel="stylesheet" href="{{ asset('/css/dashboard.css')}}">
<div class="container">

        <br>
        <br>
        <div class="row justify-content-center">
            <h4>Add Package</h4>
        </div>
        <br>
        <div class="row">
            <div class="col-8">
                <form action="{{route('package.store')}}" method="post">
                @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Package name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>

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
                    <div>Pedido {{$item->id}} <br>{{$item->name}}</div>
                @endif
            @endforeach
        </div>
        <div id='linea-ldc' class='container'>
            <h2>2. En Local Delivery Center</h2>
            @foreach ($packages as $item)
                @if ($item->status == 2)
                    <div>Pedido {{$item->id}} <br>{{$item->name}}</div>
                @endif
            @endforeach
        </div>
        <div id='linea-entrega' class='container'>
            <h2>3. En proceso de entrega</h2>
            @foreach ($packages as $item)
                @if ($item->status == 3)
                    <div>Pedido {{$item->id}} <br>{{$item->name}}</div>
                @endif
            @endforeach
        </div>
        <div id='linea-entregado' class='container'>
            <h2>4. Entregado</h2>
            @foreach ($packages as $item)
                @if ($item->status == 4)
                    <div>Pedido {{$item->id}} <br>{{$item->name}}</div>
                @endif
            @endforeach
        </div>
        <div id='linea-fallido' class='container'>
            <h2>5. Fallido</h2>
            @foreach ($packages as $item)
                @if ($item->status == 5)
                    <div>Pedido {{$item->id}} <br>{{$item->name}}</div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<script src="{{ asset('/js/dragula.js')}}"></script>
<script src="{{ asset('/js/dashboard.js')}}"></script>
