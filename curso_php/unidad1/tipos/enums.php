<?php

    enum EstadoDeOrden
    {
        case Pendiente;
        case Enviado;
        case Entregado;
    }

    function actualizarEstadoDeOrden(EstadoDeOrden $status){

        switch ($status){
            case EstadoDeOrden::Pendiente:
                echo "El pedido está pendiente.";
                break;
            case EstadoDeOrden::Enviado:
                echo "El pedido ha sido enviado.";
                break;
            case EstadoDeOrden::Entregado:
                echo "El pedido ha sido entregado.";
                break;
        }

    }

    actualizarEstadoDeOrden(EstadoDeOrden::Entregado);

?>