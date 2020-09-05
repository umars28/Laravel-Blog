<?php


namespace App\Http\ViewComposer;


use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FooterComposer
{
    public function compose(View $view) {
        $contactUs = DB::table('contact_us')->select('facebook','twitter','github')->first();
        $view->with(compact('contactUs'));
    }
}
