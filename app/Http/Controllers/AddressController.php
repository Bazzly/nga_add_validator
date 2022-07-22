<?php

namespace App\Http\Controllers;

use App\Models\Lgas;
use App\Models\States;
use App\Models\Address;
use App\Models\addresss;
use App\Models\Categories;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
    //


    public function index()
    {
        return view('validate');
    }



    public function viewAddress($id = null)
    {
        // dd(States::findOrFail($id)->id);
        // get state_id from url if it is empty 
        // choose 1 as the default value
        $categories = Categories::get();
        $state_id = $id == null ? 1 : States::findOrFail($id)->id;
        // get all states database table
        $states = States::get();
        // get all lgas data from database table
        $lgas = Lgas::where('state_id', $state_id)->get();
        return view('address.index', compact(
            'states',
            'lgas',
            'state_id',
            'categories'
        ));
    }

    public function addAddress(Request $request)
    {

        dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'country' => ['required', 'string', 'max:225'],
                'state' => 'required|numeric|digits_between:1,10',
                'lga' => 'required|numeric|digits_between:1,10',
                'town' => ['required', 'string', 'min:3', 'max:225', 'unique:addresss'],
                'postcode_id' => 'required', 'exist:postcodes,id',
                'nearest_bus_stop' => 'required', 'string', 'max:225',
                'landmark' => 'required', 'string', 'max:225',
                'community_name' => 'required', 'string', 'max:225',
                'street_name' => 'required', 'string', 'max:225',
                'house_number' => 'required|numeric|between:1,10|gt:0',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'latitude' => 'required',
                'longitude' => 'required',

                // 'avatar' => [
                //     'required',
                //     Rule::dimensions()->maxWidth(1000)->maxHeight(500)->ratio(3 / 2),
                // ],

            ],
            [
                'country.required' => 'Country field can not be empty',
                'country.string' => 'Country field can only accept alphabet',
                'country.max' => 'Country field do not accept more than 225 character',
                'state.required' => 'State field can not be empty',
                'state.numeric' => 'State field can not be modify from default',
                'state.digits_between' => 'State field only accept character between 1 to 10',
                'lga.required' => 'Lga field can not be empty',
                'lga.numeric' => 'Lga field can not be modify from default',
                'lga.digits_between' => 'Lga field only accept character between 1 to 10',
                'town.required' => 'Town field can not be empty.',
                'town.string' => 'Town field can only accept alphabet.',
                'town.max' => 'Town field do not accept more than 225 character',
                'town.unique' => 'The town is already available in our database',
                'code.required' => 'address field can not be empty.',
                'code.numeric' => 'address field can not accept any other value than numbers.',
                'code.digits' => 'address field do not accept less or greater than 6 characters',
                // 'code.min' => 'address field do not accept less than 6 character',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $image = $request->file('image');
        $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();

        $destinationPath = public_path('/house');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['imagename']);

        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);

        $this->postImage->add($input);

        $address = new Address;
        $address->code = $request->code;
        $address->town = $request->town;
        $address->lga_id = $request->lga;
        $address->state_id = $request->state;
        $address->user_id = Auth::user()->id;
        $address->save();

        return redirect()->back()->with('success', 'address recorded successfully added');
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'body.required' => 'A message is required',
        ];
    }
}
