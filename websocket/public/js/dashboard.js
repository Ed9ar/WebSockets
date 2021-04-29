
var drake = dragula([document.getElementById('linea-planta'), document.getElementById('linea-ldc'),
        document.getElementById('linea-entrega'),document.getElementById('linea-entregado'),
        document.getElementById('linea-fallido')],
        {
            revertOnSpill: true,
            accepts: function (el, target, source) {
               
                if(source == document.getElementById('linea-ldc') && target == document.getElementById('linea-planta')) {
                    return false
                }
                if(source == document.getElementById('linea-entregado')) {
                    return false
                }
                return true
            },
           
        });

drake.on('drop',function(el,target,source,sibling){
    if(target ==  document.getElementById('linea-ldc'))
    {
        updatePackage(el.id, 2);
        updateEvent(el.id, 2,"name");
    }
   
    if(target ==  document.getElementById('linea-entrega')){
        updatePackage(el.id, 3);
        updateEvent(el.id, 3,"name");   
    }

    if(target ==  document.getElementById('linea-entregado')){
        updatePackage(el.id, 4);
        updateEvent(el.id, 4,"name");
    }

    if(target ==  document.getElementById('linea-fallido')){
        updatePackage(el.id, 5);
        updateEvent(el.id, 5,"name");
    }

    
})
function updateEvent(id, status, name){

    let str = 'http://127.0.0.1:8000/event/'+id+'/'+status+'/'+name
    
    $.ajax({
        url: str,
        method: 'GET',
        headers:{
            'Accept': 'application/json',
            'X-CSRF-Token': $('meta[name="csrf-token"').attr('content')
        }
    }).done(function(response) {
        console.log( "Exito");
    })
    .fail(function(jqXHR, response) {
        console.log('Fallido', response);
    });
    
}

function updatePackage(id, status){
   
    
    let str = 'http://127.0.0.1:8000/package/'+id+'?_method=PUT'
    
    $.ajax({
        url: str,
        method: 'POST',
        headers:{
            'Accept': 'application/json',
            'X-CSRF-Token': $('meta[name="csrf-token"').attr('content')
        },
        data:{
            id:id,
            status:status,
           
                
        }
    }).done(function(response) {
        console.log( "Exito");
    })
    .fail(function(jqXHR, response) {
        console.log('Fallido', response);
    });
    
}

/*
import Echo from 'laravel-echo';

Echo.channel('testChannel').listen('PackageUpdateNotification', (e) => {
    console.log(e);
});*/
