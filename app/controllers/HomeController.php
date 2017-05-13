<?php



use Illuminate\Http\Request;


class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex(){
		return View::make('home/login');
	}
	
	public function getIndex1(){
		return View::make('home/regist');
	}

	public function getRegist(){
		$username = Input::get('username');
		$pass = Input::get('password');
		$password = md5($pass);
		$company = new Company;
		
		$company->name = Input::get('company_name');
		$company->email = Input::get('email');
		$company->save();
	
		$id = DB::table('company')->max('id');

		$users = new users;
		$users->company_id = $id;
		$users->username = Input::get('username');
		$users->password = Input::get('password');
		$users->save();
	
			$id_user = DB::table('users')->max('id');
			
				Session::set('id_user', $id_user);
		Session::flash('message', 'Registration was successfully, Welcome '.$username);
		return Redirect::to('dashboard');
			
		}
	
	
	public function getDashboard(){
		
		
		$options = array(
			'guest'=>Guest::count(),
			'bookings'=>Bookings::count(),
			'space'=>Space::count(),
			
			'data'=>Bookings::orderBy('id', 'desc')->paginate(10)
		);
		$view = View::make('home/dashboard',array())->nest('content', 'home/home',$options);
	 	return $view;
		
	}

	public function getAuth(){
		$username = Input::get('username');
		$pass = Input::get('password');
		$password = md5($pass);
		$cek = Users::where('username','=',$username)->where('password','=',$password)->first();
		if(empty($cek)){
			Session::flash('message', 'Wrong');
			return Redirect::to('/');
		}else{
			Session::put('username', $username);
			Session::put('employee_id', $cek->employee_id);
			Session::flash('message', 'Login was successfully, Welcome '.$username);
			return Redirect::to('dashboard');
		}
	}

	public function getLogout(){
		Session::forget('username');
		Session::forget('employee_id');
		return Redirect::to('/');
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

}
