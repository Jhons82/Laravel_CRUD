<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Obtener todos los productos
    public function index()
    {
        //obtener productos
        $products = Product::all();
        //Retorna vista 'products.index' con lista de productos
        return view('products.index', compact('products'));
    }
    // Crear productos
    public function create()
    {
        // Retornar la vista 'products.create' para crear un producto
        return view('products.create', compact('product'));
    }
    // 
    public function store(Request $request)
    {
        // Validación de formulario
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);
        // Crear un nuevo producto con datos validados
        Product::create($request->all());
        //Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Producto creado exitosamente');
    }
    // Llarmar info del producto para visualizar sus detalles
    public function show(Product $product)
    {
        // Retornar la vista products.show con la info del producto seleccionado
        return view('products.show', compact('product'));
    }
    // Llamar la info de cada producto para editar
    public function edit(Product $product)
    {
        // Retornar la vista 'products.edit' con la info del producto seleccionado para edicción
        return view('products.edit', compact('product'));
    }
    // Actualizar los productos
    public function update(Request $request, Product $product)
    {
        // Validación del formulario
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);
        // Actualizar producto
        $product->update($request->all());
        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Producto actualizado exitosamente');
    }
    // Eliminar productos
    public function destroy(Product $product)
    {
        // Eliminar producto
        $product->delete();
        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Producto Eliminado exitosamente');
    }
}
