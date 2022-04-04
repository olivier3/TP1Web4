<?php

namespace App\Http\Controllers;

use App\Models\Ip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Classe de controller pour les Ip.
 *
 * @author Olivier Bilodeau.
 */
class IpController extends Controller
{
    public function index()
    {

    }

    /**
     * Méthode pour enregister des données dans la BD.
     *
     * @param IpFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(IpFormRequest $request)
    {
        $attributs = $request->validated();

        if (Auth::user()) {
            Auth::user()->ips()->create($attributs);
        } else {
            $this->ips()->create($attributs);
        }

        return redirect()->route('accueil');
    }
}
