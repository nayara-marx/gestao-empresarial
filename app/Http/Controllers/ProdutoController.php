<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = [
            (object)[
                'id' => 1,
                'nome' => 'Notebook Dell XPS',
                'imagem' => 'https://m.media-amazon.com/images/S/aplus-media-library-service-media/7e105f87-d1e0-403a-afa6-7fd234e45c8d.__CR0,0,970,600_PT0_SX970_V1___.jpg',
                'descricao' => 'Potente e compacto com tela 4K.',
                'valor' => 'R$ 6.000,00'
            ],
            (object)[
                'id' => 2,
                'nome' => 'Smartphone Galaxy S21',
                'imagem' => 'https://mobizoo.com.br/wp-content/uploads/2021/01/samsung-galaxy-s21-1.jpg',
                'descricao' => 'Smartphone de última geração Samsung.',
                'valor' => 'R$ 3.800,00'
            ],
            (object)[
                'id' => 3,
                'nome' => 'Fone JBL Tune 500BT',
                'imagem' => 'https://m.media-amazon.com/images/I/51JNhjr4McL._AC_SL1500_.jpg',
                'descricao' => 'Fone de ouvido sem fio com graves potentes e design confortável.',
                'valor' => 'R$ 450,00'
            ],
            (object)[
                'id' => 4,
                'nome' => 'Teclado Mecânico RGB',
                'imagem' => 'https://m.media-amazon.com/images/I/61KVTbZqQvL._AC_SL1500_.jpg',
                'descricao' => 'Teclado mecânico com retroiluminação RGB e switches mecânicos.',
                'valor' => 'R$ 750,00'
            ],
        ];

        return view('pages.produtos.index', compact('produtos'));
    }

    public function show($id)
    {
        // Para simplificar, pegar o produto baseado no id do array
        $produtos = [
            1 => (object)[
                'id' => 1,
                'nome' => 'Notebook Dell XPS',
                'imagem' => 'https://m.media-amazon.com/images/S/aplus-media-library-service-media/7e105f87-d1e0-403a-afa6-7fd234e45c8d.__CR0,0,970,600_PT0_SX970_V1___.jpg',
                'descricao' => 'Potente e compacto com tela 4K.',
                'valor' => 'R$ 6.000,00'
            ],
            2 => (object)[
                'id' => 2,
                'nome' => 'Smartphone Galaxy S21',
                'imagem' => 'https://mobizoo.com.br/wp-content/uploads/2021/01/samsung-galaxy-s21-1.jpg',
                'descricao' => 'Smartphone de última geração Samsung.',
                'valor' => 'R$ 3.800,00'
            ],
            3 => (object)[
                'id' => 3,
                'nome' => 'Fone JBL Tune 500BT',
                'imagem' => 'https://m.media-amazon.com/images/I/51JNhjr4McL._AC_SL1500_.jpg',
                'descricao' => 'Fone de ouvido sem fio com graves potentes e design confortável.',
                'valor' => 'R$ 450,00'
            ],
            4 => (object)[
                'id' => 4,
                'nome' => 'Teclado Mecânico RGB',
                'imagem' => 'https://m.media-amazon.com/images/I/61KVTbZqQvL._AC_SL1500_.jpg',
                'descricao' => 'Teclado mecânico com retroiluminação RGB e switches mecânicos.',
                'valor' => 'R$ 750,00'
            ],
        ];

        if (!isset($produtos[$id])) {
            abort(404);
        }

        $produto = $produtos[$id];
        return view('pages.produtos.show', compact('produto'));
    }
}
