<?php

class CompanyController extends Controller{

	public function getIndex(){
		$company = Company::find(1);
		
		$options = array(
			'company'=>$company,
			
		);
		return View::make('home/dashboard',array())->nest('content', 'company/profile',$options);
	}

	public function getSave(){
		$id = Input::get('id');
		$company = Company::find($id);
		
		if(Input::hasFile('userfile')) {
			$file = Input::file('userfile');
			$destination_path = 'uploads/';
			$filename = str_random(6).'_'.$file->getClientOriginalName();
			$file->move($destination_path, $filename);
			$company->file = $destination_path . $filename;
        }
		
		$company->name = Input::get('name');
		$company->email = Input::get('email');
		$company->phone = Input::get('phone');
		$company->city_id = Input::get('city_id');
		$company->address = Input::get('address');
		$company->save();
		Session::flash('message', 'The records are updated successfully');
		return Redirect::to('company');
	}
}