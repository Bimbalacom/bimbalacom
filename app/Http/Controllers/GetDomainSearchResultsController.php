<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetDomainSearchResultsRequest;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GetDomainSearchResultsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param GetDomainSearchResultsRequest $request
     */
    public function __invoke(GetDomainSearchResultsRequest $request): JsonResponse
    {
        $data = $request->validated();
        $requestDateTime = Carbon::now();
        $baseURL = config('services.saas.url').'/api';
        $results = \Http::baseUrl($baseURL)->withHeaders([
            'Date' => $requestDateTime->toIso8601String(),
            'Signature' => hash_hmac(
                'sha256',
                $requestDateTime->toIso8601String().'\n'.$baseURL.'/tenants',
                config('services.saas.shared_secret')
            ),
            'Accept' => 'application/json',
        ])->get('tenants?subdomain='.$data['term']);

        abort_unless($results->successful(), Response::HTTP_INTERNAL_SERVER_ERROR, "We are unable to verify that this domain doesn't exist.");

        return response()->json(['count' => $results->json('pagination.count')]);
    }
}
