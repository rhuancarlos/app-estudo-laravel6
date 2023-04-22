<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(Request $request) 
    {
        // dd($request->edit);
        $this->request = $request;
        //this->middleware('auth'); #all Controller
        //$this->middleware('auth')->only('create'); #aplicar somente function specificate
        //$this->middleware('auth')->except(['index', 'show']); #aplicar em todos exceto estas
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titlePage = "Exibindo os produtos";
        $typeSwitch = 4;
        $arrDados = ['azul','amarelo','preto','vermelho'];
        $arrProdutos = [];
        $listProducts = "<ul>
            <li>Produto 1</li>
            <li>Produto 2</li>
            <li>Produto 3</li>
            <li>Produto 4</li>
        </ul>";
        return view('admin.pages.products.index', compact('titlePage', 'listProducts', 'typeSwitch', 'arrDados', 'arrProdutos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return "Form de cadastro de um novo produto";
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('cadastrando ....');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Mostrando produto: #{$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return "Editar produto: #{$id}";//
        return view('admin.pages.products.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return "Editando o produto: {$id}";
        dd("Editando produto...: $id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Removedo o produto: {$id}";
    }
}
