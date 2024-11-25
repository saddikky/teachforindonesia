<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ProgressDetail;

class CheckEventStatus
{
    public function handle(Request $request, Closure $next)
    {
        $event_id = $request->route('event_id');
        $userNim = auth()->user()->nim;

        // Cari progress detail berdasarkan event_id dan nim user
        $progress = ProgressDetail::where('event_id', $event_id)
            ->where('nim', $userNim)
            ->first();

        // Jika status sudah "in-review", redirect ke halaman lain
        if ($progress && $progress->status === 'in-review') {
            return redirect()->route('cb-course')
                ->with('error', 'Form sudah tidak tersedia untuk diakses kembali.');
        }

        return $next($request);
    }
}
