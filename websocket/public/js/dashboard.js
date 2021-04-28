
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
        updatePackage(el.id, 2);
   
    if(target ==  document.getElementById('linea-entrega'))
        updatePackage(el.id, 3);   

    if(target ==  document.getElementById('linea-entregado'))
        updatePackage(el.id, 4);

    if(target ==  document.getElementById('linea-fallido'))
        updatePackage(el.id, 5);
    
})
function updatePackage(id, status){
   
    console.log(id, status);
    let str = 'http://127.0.0.1:8000/package/'+id+''
    console.log(str);
    $.ajax({
        url: str,
        method: 'PUT',
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
