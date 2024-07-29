<?php

class paqueteTour {
    public $nombreHotel;
    public $pais;
    public $ciudad;
    public $fechaViaje;
    public $duracion;

    public function __construct($nombreHotel, $pais, $ciudad, $fechaViaje, $duracion) {
        $this->nombreHotel = $nombreHotel;
        $this->pais = $pais;
        $this->ciudad = $ciudad;
        $this->fechaViaje = $fechaViaje;
        $this->duracion = $duracion;
    }

    public static function buscarPaquetes($destinos, $fecha) {
        $paquetes = [
            new paqueteTour("Hotel Ibis", "Chile", "Calama", "2024-07-02", 16),
            new paqueteTour("Hotel Imperial", "México", "México DF", "2024-07-05", 20)
        ];

        return array_filter($paquetes, function($paquete) use ($destinos, $fecha) {
            return strpos(strtolower($paquete->ciudad), strtolower($destinos)) !== false &&
                   $paquete->fechaViaje == $fecha;
        });
    }
}

?>
