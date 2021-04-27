dragula([document.getElementById('linea-planta'), document.getElementById('linea-ldc'),
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
            }
        });
