<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfOutputController extends Controller
{
    //
    public function output() {
        $sushiTable = [
            'たまご' => '100円',
            'いくら' => '200円',
            'サーモン' => '180円',
            'いか' => '100円',
            'マグロ' => '110円',
            'えび' => '100円',
        ];

        $pdf = \PDF::loadView('pdf_output', ['sushiTable' => $sushiTable]);
        $pdf->setPaper('A4');//縦
        // $pdf->setPaper('A4','landscape');//横

        return $pdf->stream();//PDFのプレビュー表示
        // return $pdf->download();//ダウンロード
    }
}
