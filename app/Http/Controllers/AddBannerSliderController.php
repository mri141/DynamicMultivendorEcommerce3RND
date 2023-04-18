<?php

namespace App\Http\Controllers;

use App\Models\AddBannerSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AddBannerSliderController extends Controller
{

    /**
     * Display a listing of the resource.
     * add_banner_sliders
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (!Auth::user()->user_type == 'admin' || !Auth::user()->user_type == 'seller') {
            return abort(401, 'You are not unauthorized');
        }
        if (Auth::user()->user_type == 'admin') {
            $sliders = AddBannerSlider::orderBy('priority', 'desc')->paginate(15);
            return view('backend.ad_slider_banner.index', compact('sliders'));
        } else if (Auth::user()->user_type == 'seller') {
            $sliders = AddBannerSlider::where('user_id', Auth::user()->id)
                ->orderBy('priority', 'desc')
                ->paginate(10);
                // dd($sliders);
            return view('frontend.user.seller.add_banner_slider.index', compact('sliders'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->user_type == 'seller' || !Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not unauthorized');
        }
        return view('frontend.user.seller.add_banner_slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()->user_type == 'seller' || !Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not unauthorized');
        }
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'button_text' => 'nullable',
            'button_link' => 'nullable',
            'priority' => 'nullable',
        ]);

        $addBannerSlider = new AddBannerSlider();
        $addBannerSlider->title = $request->title;
        $addBannerSlider->user_id = Auth::user()->id;
        $addBannerSlider->button_text = $request->button_text;
        $addBannerSlider->button_link = $request->button_link;
        $addBannerSlider->image = $request->image;
   

        //image insert
        // if ($request->has('image')) {
        //     $image = $request->file('image');
        //     $reImage = time() . '.' . $image->getClientOriginalExtension();
        //     $dest = public_path('uploads/adsliderbanner/');
        //     $image->move($dest, $reImage);

        //     // save in database
        //     $addBannerSlider->image = $reImage;
        // }
        
        $addBannerSlider->save();
        
        return back()->with('success','Slider Add successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::user()->user_type == 'seller' || !Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not unauthorized');
        }
        $slider = AddBannerSlider::find($id);
        return view('frontend.user.seller.add_banner_slider.update',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Auth::user()->user_type == 'seller' || !Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not Unauthorized');
        }

        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'button_text' => 'nullable',
            'button_link' => 'nullable',
            'priority' => 'nullable',
        ]);

        $addBannerSlider = AddBannerSlider::find($id);
        $addBannerSlider->title = $request->title;
        $addBannerSlider->button_text = $request->button_text;
        $addBannerSlider->button_link = $request->button_link;
         $addBannerSlider->image = $request->image;
        // $addBannerSlider->priority = $request->priority;

        //image insert
        // if ($request->has('image')) {
        //     $destination = 'uploads/adsliderbanner/' . $addBannerSlider->image;
        //     if (File::exists($destination)) {
        //         File::delete($destination);
        //     }
        //     $image = $request->file('image');
        //     $reImage = time() . '.' . $image->getClientOriginalExtension();
        //     $dest = public_path('uploads/adsliderbanner/');
        //     $image->move($dest, $reImage);

        //     // save in database
        //     $addBannerSlider->image = $reImage;
        // }
        $addBannerSlider->save();
        return back()->with('success','Slider Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (!Auth::user()->user_type == 'seller' || !Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not unauthorized');
        }

        $addBannerSlider = AddBannerSlider::find($id);
        // $destination = 'uploads/adsliderbanner/' . $addBannerSlider->image;
        // if (File::exists($destination)) {
        //     File::delete($destination);
        // }
        $addBannerSlider->delete();
        return back()->with('success','Slider Delete successfully.');
    }
    public function approvedByAdmin(Request $request)
    {
        // dd($request->toArray());
        $id = $request->id;
        $approved = $request->approved;
        AddBannerSlider::where('id',$id)->update([
            'approved_by_admin' => $approved
        ]);
        return 1;
    }
    public function updatePriority(Request $request)
    {
        $id = $request->id;
        $priority = $request->priority;
        AddBannerSlider::where('id',$id)->update([
            'priority' => $priority
        ]);
       return 1;
       
    }
}
