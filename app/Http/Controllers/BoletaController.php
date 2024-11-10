<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Venta;
use Mpdf as pdf;


class BoletaController extends Controller
{
    public function generarBoleta($ventaId)
    {
        $venta = Venta::findOrFail($ventaId);

        $mpdf = new \Barryvdh\DomPDF\Facade\Pdf();

        $html = view('boleta', compact('venta'))->render();
        $mpdf->WriteHTML($html);
        $mpdf->Output("boleta_{$venta->id}.pdf", 'D'); 
    }
}

