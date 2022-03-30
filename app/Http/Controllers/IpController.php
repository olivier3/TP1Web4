<?php

namespace App\Http\Controllers;

use App\Models\Ip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IpController extends Controller
{
    public function index()
    {

    }

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
