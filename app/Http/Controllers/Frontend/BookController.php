<?php
namespace App\Http\Controllers\Frontend;

use App\Notifications\NewNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Book;
use App\Category;
// use Illuminate\Support\Facades\Request;

class BookController extends Controller
{
	public function index() {
		$data = Book::latest()->paginate(10);
		return view('frontend.crud.index_book', compact('data'))
			->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
	public function create() {
		$category = Category::all();
		return view('frontend.crud.create_book',compact('category'));
	}
    
  public function store(Request $request) {
		$request->validate([
			'name' => 'required',
			'auth' => 'required',
			'image' => 'required|image|max:2048',
			'category_id'=>'required',
			'stocks'=>'required',
			'identifier'=>'required',
			'sex'=>'required',
			'status'=>'required',
			'date'=>'required',
			'description'=>'required',
		]);

		$image = $request->file('image');

		$new_name = rand() . '.' . $image->getClientOriginalExtension();
		$image->move(public_path('images'), $new_name);
		$form_data = array(
			'name' => $request->name,
			'auth' => $request->auth,
			'category_id'=>$request->category_id,
			'identifier'=>$request->identifier,
			'stocks'=>$request->stocks,
			'sex'=>$request->sex,
			'status'=>$request->status,
			'date'=>$request->date,
			'description'=>$request->description,
			'image' => $new_name,
		);

		Book::create($form_data);
		// BooK::addBook($request);
		// add notification
		$user=Auth::user();
		$user->notify(new NewNotification($user,$request->category_id));
		// then redirect to the page
		return redirect('book')->with('success', 'Data Added successfully.');
	}

	public function show($id) {
		$data = Book::findOrFail($id);
		return view('frontend.crud.view_book', compact('data'));
	}

	public function edit($id) {
		$data = Book::findOrFail($id);
		return view('frontend.crud.edit_book', compact('data'));
  }
    
	public function update(Request $request, $id) {
		$image_name = $request->hidden_image;
		$image = $request->file('image');
		if ($image != '') {
			$request->validate([
				'name' => 'required',
				'auth' => 'required',
				'image' => 'required|image|max:2048',
				'category_id'=>'required',
				'stocks'=>'requires',
				'identifier'=>'required',
				'sex'=>'required',
				'status'=>'required',
				'date'=>'required',
				'description'=>'required',
			]);
			$image_name = rand() . '.' . $image->getClientOriginalExtension();
			$image->move(public_path('images'), $image_name);
		} else {
			$request->validate([
				'name' => 'required',
				'auth' => 'required',
				'category_id'=>'required',
				'identifier'=>'required',
				'stocks'=>'requires',
				'sex'=>'required',
				'status'=>'required',
				'date'=>'required',
				'description'=>'required',
			]);
		}

		$form_data = array(
			'name' => $request->name,
			'auth' => $request->auth,
			'category_id'=>$request->category_id,
			'identifier'=>$request->identifier,
			'stocks'=>$request->stocks,
			'sex'=>$request->sex,
			'status'=>$request->status,
			'date'=>$request->date,
			'description'=>$request->description,
			'image' => $image_name,
		);

		Book::whereId($id)->update($form_data);
		return redirect('book')->with('success', 'Data is successfully updated');

	}
	
    
	public function destroy($id) {
		$data = Book::findOrFail($id);
		$path_image = public_path('/images/'.$data->image);
		if($path_image!=null){
			$data->delete();
			return redirect('book')->with('success', 'Data is successfully deleted');
		}
		else if($path_image==null){
			$data->delete();
			unlink($path_image);
			return redirect('book')->with('success', 'Data is successfully deleted');
		}else{
			return redirect('book')->with('success', 'Data is successfully deleted');
		}
	}

	public function check_in($id,$request){
		$data = Book::findOrFail($id)->stocks;
		$minus = $data+1;
		Book::whereId($id)->update($minus);
		$user=Auth::user();
		$user->notify(new NewNotification($user,$request->category_id));
	}
	
	public function check_out($id){
		$data = Book::findOrFail($id)->stocks;
		$minus = $data-1;
		Book::whereId($id)->update($minus);
	}

	public function search($name){
		$book=Book::all();
		Book::where('name','=',$name);
	}
}

