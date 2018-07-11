<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class routesController extends Controller
{
    


	public function home()
	{
		if(session()->has('user'))
			return redirect('dashboard');

		return redirect('login');
	}

    public function loginView()
    {
    	App::setlocale('ar');
    	return view('Auth.login');
    }


    public function edit($dep=null,$sec='register',$id=null){
        App::setlocale('ar');
        $dep = 'form'.$dep;
        return view('dashboard.dashboard',compact('dep','sec'));
    }
    public function dashboardView($dep='overview',$id=null){
    	App::setlocale('ar');

            if($dep=='cars'){
                if ($id != null) {
                    # code...
                $dep = 'car';

                }
            }elseif($dep=='employers'){
                if ($id != null) {
                    # code...
                $dep = 'employer';

                }
            }elseif($dep=='users'){
                if ($id != null) {
                    # code...
                $dep = 'user';

                }
            }elseif($dep=='drivers'){
                if ($id != null) {
                    # code...
                $dep = 'driver';
            }

            }elseif($dep=='register'){
                if ($id != null) {
                    # code...
                $dep = $id;
                }else{

                }
            }elseif($dep=='reports'){
                if ($id != null) {


                }
            }
        return view('dashboard.dashboard',compact('dep'));
    }
}