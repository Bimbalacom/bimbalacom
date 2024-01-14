<?php

namespace App\Http\Controllers;

use Arr;
use Auth;
use Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use JsonException;
use Log;

class PortalSettingsController extends Controller
{
    public function index(Request $request)
    {
        if(!Auth::user()->name){
            return redirect()->to('checkout/portal?'.Arr::query($request->input()));
        }
        if(Auth::user()->subdomain_url){
            return redirect()->to('checkout/finish?'.Arr::query($request->input()));
        }
        return view('theme::welcome.portal-settings', [
            'seo' => [
                'seo_title' => "Let's set your Bimbala workspace up!",
                'seo_description' => 'We promise you that your users will feel it like home.',
            ]
        ]);
    }

    /**
     * @throws JsonException
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'subdomain' => [
                'required',
                'string',
                'max:63',
                'regex:/^[A-z-0-9]+$/',
                'unique:Wave\User,subdomain_url'
            ]
        ]);
        $payload = ['name' => $validatedData['subdomain']];
        $response = Http::baseUrl(config('services.saas.url').'/api')->withHeaders([
            'Signature' => hash_hmac(
                'sha256',
                json_encode($payload, JSON_THROW_ON_ERROR),
                config('services.saas.shared_secret')
            ),
            'Accept' => 'application/json',
        ])->post('tenants',$payload);
        if(!$response->successful()){
            Log::error(json_encode(['payload' => $payload, 'response' => $response->body()]));
            return back()->withErrors(['subdomain' => 'Something went wrong when creating your portal...']);
        }
        Auth::user()->update([
            'subdomain_url' => $response->json('data.domain'),
        ]);
        return redirect()->to('checkout/finish?'.Arr::query($request->input()));
    }
}
