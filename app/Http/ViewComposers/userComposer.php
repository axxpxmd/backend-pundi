<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

// Model
use App\Models\Artikel;

class UserComposer
{
    public function compose(View $view)
    {
        /**
         * Count artikel status 0
         */
        $artikel = Artikel::wherestatus(0)->get();

        // Return
        $view->with('artikel', $artikel);
    }
}
