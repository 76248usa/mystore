<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create(){
        return view('admin.slider.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'image'=>'required|mimes:jpeg,png'

        ]);
        $image = $request->file('image')->store('public/slider');
        Slider::create([
            'image'=>$image

        ]);
        session()->flash('error', 'Slider created successfully');
        return redirect()->back();
    }

    public function destroy($id){
        $slider = Slider::findOrFail($id);
        $filename = $slider->image;
        $slider->delete();
        Storage::delete($filename);

        session()->flash('error', 'Slider deleted successfully');
        return redirect()->back();

    }

}
