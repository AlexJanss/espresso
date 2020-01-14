<?php


namespace App\Http\Controllers;

use App\Espresso;
use Illuminate\Http\Request;

class EspressoController extends Controller
{

    public function showAllEspressos()
    {
        return response()->json(Espresso::all());
    }

    public function showOneEspresso($id)
    {
        return response()->json(Espresso::find($id));
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'taste' => 'required',
            'crema' => 'required',
            'origin' => 'required',
            'source' => 'required'
        ]);

        $espresso = Espresso::create($request->all());

        return response()->json($espresso, 201);
    }

    public function update($id, Request $request)
    {
        $espresso = Espresso::findOrFail($id);
        $espresso->update($request->all());

        return response()->json($espresso, 200);
    }

    public function delete($id)
    {
        Espresso::findOrFail($id)->delete();
        return response('Deleted successfully', 200);
    }
}