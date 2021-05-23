<?php

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title'=>'A mosca azul',
            'pages'=>'155',
            'price'=>'29.99',
            'id_user'=>'1'
        ]);
        $book->create([
            'title'=>'A Onda',
            'pages'=>'255',
            'price'=>'129.99',
            'id_user'=>'3'
        ]);
        $book->create([
            'title'=>'A Missão',
            'pages'=>'345',
            'price'=>'229.99',
            'id_user'=>'4'
        ]);
        $book->create([
            'title'=>'Arvore de bons frutos',
            'pages'=>'55',
            'price'=>'29.99',
            'id_user'=>'1'
        ]);
        $book->create([
            'title'=>'As coisas que você só vê quando desacelera',
            'pages'=>'256',
            'price'=>'36.99',
            'id_user'=>'3'
        ]);
        $book->create([
            'title'=>'Mentes brilhantes',
            'pages'=>'128',
            'price'=>'20.92',
            'id_user'=>'4'
        ]);
        $book->create([
            'title'=>'Como convencer alguém em 90 segundos',
            'pages'=>'265',
            'price'=>'17.00',
            'id_user'=>'1'
        ]);
        $book->create([
            'title'=>'Não há dia fácil',
            'pages'=>'296',
            'price'=>'24.90',
            'id_user'=>'3'
        ]);
        $book->create([
            'title'=>'A menina que roubava livros',
            'pages'=>'522',
            'price'=>'27.28',
            'id_user'=>'4'
        ]);
        $book->create([
            'title'=>'O Construtor De Pontes',
            'pages'=>'528',
            'price'=>'30.20',
            'id_user'=>'3'
        ]);
        $book->create([
            'title'=>'1984: Edição com Postais + Marcador',
            'pages'=>'288',
            'price'=>'16.99',
            'id_user'=>'4'
        ]);

    }
}