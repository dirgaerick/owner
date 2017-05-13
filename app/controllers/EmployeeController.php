<?php

class EmployeeController extends Controller{

	public function getIndex(){
		$key = Input::get('search');
		if(isset($key)){
			$data = employee::where('full_name', 'like', '%'.$key.'%')->orderBy('id', 'desc')->paginate(10);
		}else{
			$data = employee::orderBy('id', 'desc')->paginate(10);
		}
		return View::make('home/dashboard',array())->nest('content', 'employee/index',array('data'=>$data));
	}

	public function Position(){
		$data = Jobs::All();
		$array = array();
		$i = 0;
		foreach($data as $row){
			$array[$i] = $row->name;
			$i++;
		}
		return $array;
	}

	public function getAdd(){
		
		return View::make('home/dashboard',array())->nest('content', 'employee/add',array('position'=>$this->Position()));
	}

	public function getSave(){
		$id = Input::get('id');
		if($id){
			$employee = employee::find($id);
			$employee->full_name = Input::get('name');
			$employee->position = Input::get('position');
			$employee->gender = Input::get('gender');
			$employee->phone = Input::get('phone');
			$employee->email = Input::get('email');
			$employee->address = Input::get('address');
			$employee->city_id = Input::get('city_id');
			$employee->save();
			Session::flash('message', 'The records are updated successfully');
		}else{
			$employee = new employee;
			$employee->full_name = Input::get('name');
			$employee->position = Input::get('position');
			$employee->gender = Input::get('gender');
			$employee->phone = Input::get('phone');
			$employee->email = Input::get('email');
			$employee->address = Input::get('address');
			$employee->city_id = Input::get('city_id');
			$employee->save();
			Session::flash('message', 'The records are inserted successfully');
		}
		return Redirect::to('employee');
	}

	public function getShow($id){
		$data = employee::find($id);
		return View::make('home/dashboard',array())->nest('content', 'employee/show',array('data'=>$data));
	}

	public function getEdit($id){
		$data = employee::find($id);
		
		$options = array(
			'data'=>$data,
			
			'position'=>$this->Position()
		);
		return View::make('home/dashboard',array())->nest('content', 'employee/edit',$options);
	}

	public function getDelete($id){
		$employee = employee::find($id);
		$employee->delete();
		Session::flash('message', 'The records are deleted successfully');
		return Redirect::to('employee');
	}



}