<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', ['reviews' => $reviews]);
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $review = new Review();
        $review->userID = $request->userID; // ID del usuario autenticado
        $review->productID = $request->productID; // ID del producto
        $review->text = $request->text;
        $review->stars = $request->stars;
        $review->save();

        // Redirige de vuelta a la página del producto con un mensaje de éxito
        return redirect()->route('products.info', ['id' => $request->productID])
                         ->with('success', 'Comentario enviado con éxito');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $review = Review::find($id);
        return view('reviews.edit', ['review' => $review]);
    }

    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        //$review->userID = $request->userID;
        //$review->productID = $request->productID;
        $review->text = $request->text;
        $review->stars = $request->stars;
        $review->save();
        return redirect()->route('reviews.index');
    }

    public function destroy($id)
{
    $review = Review::findOrFail($id);

    // Verifica si el usuario es el dueño de la reseña
    if (Auth::id() !== $review->userID) {
        abort(403, 'No tienes permiso para eliminar esta reseña.');
    }

    $review->delete();

    return redirect()->back()->with('success', 'Reseña eliminada exitosamente.');
}
}
