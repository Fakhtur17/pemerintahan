<?php

namespace App\Http\Controllers;

use App\Models\Ppid;

class PpidController extends Controller
{
    /**
     * Menampilkan SK PPID Pelaksana.
     */
    public function show()
    {
        $ppid = Ppid::where('aktif', true)
            ->latest()
            ->firstOrFail();

        return view(
            'pages.ppid.show',
            compact('ppid')
        );
    }
}
