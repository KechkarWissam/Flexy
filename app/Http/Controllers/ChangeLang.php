<?php


namespace  App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Lorisleiva\Actions\Concerns\AsAction;

class ChangeLang
{


    use AsAction;

    public function handle(Request $request,$lang){
        return $this->lang_change($lang);
    }

    public function lang_change($lang)
    { 
    //    dd($lang);
       App::setLocale($lang);

       Session::put('locale', $lang);

      //  dd(Session::get('locale'),App::getLocale());
       
      return redirect()->back();
    }
}
