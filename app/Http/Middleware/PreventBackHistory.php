<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PreventBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        //header keamanan pada respon sebelum dikirim ke browser user
        return $response->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
                        ->header('Pragma', 'no-cache') //versi lama header untuk mendukung kecocokan browser lama, Fungsinya sama dengan no-cache, yaitu memastikan tidak ada cache yang diambil tanpa validasi.
                        ->header('Expires', 'Sat, 01 Jan 1990 00:00:00 GMT');
    }
}
