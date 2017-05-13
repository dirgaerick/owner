<?php

class SpaceController extends Controller{

	public function getIndex(){
		$key = Input::get('search');
		if(isset($key)){
			$data = Space::where('name', 'like', '%'.$key.'%')->orderBy('id', 'desc')->paginate(10);
		}else{
			$data = Space::orderBy('id', 'desc')->paginate(10);
		}
		return View::make('home/dashboard',array())->nest('content', 'space/index',array('data'=>$data));
	}

	public function getAdd(){
		$type = Type::all();
		return View::make('home/dashboard',array())->nest('content', 'space/add',array('type'=>$type));
	}

	public function getSave(){
		$id = Input::get('id');
		if($id){
			$space = Space::find($id);
			$space->type_id = Input::get('type_id');
			$space->number = Input::get('number');
			$space->floor =  Input::get('floor');
			$space->name =  Input::get('name');
			$space->save();
			Session::flash('message', 'The records are updated successfully');
		}else{
			$space = new Space;
			$space->type_id = Input::get('type_id');
			$space->number = Input::get('number');
			$space->floor =  Input::get('floor');
			$space->name =  Input::get('name');
			$space->save();
			Session::flash('message', 'The records are inserted successfully');
		}
		return Redirect::to('space');
	}

	public function getShow($id){
		$data = Space::find($id);
		return View::make('home/dashboard',array())->nest('content', 'space/show',array('data'=>$data));
	}

	public function getEdit($id){
		$type = Type::all();
		$data = Space::find($id);
		return View::make('home/dashboard',array())->nest('content', 'space/edit',array('data'=>$data,'type'=>$type));
	}

	public function getDelete($id){
		$space = Space::find($id);
		$space->delete();
		Session::flash('message', 'The records are deleted successfully');
		return Redirect::to('space');
	}

}