<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\States;
use App\Models\Lgas;
use App\Models\Postcodes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PostcodeController extends Controller
{


    public function index()
    {
        return view('validate');
    }


    public function viewPostcode($id = null)
    {

        // dd(States::findOrFail($id)->id);
        // get state_id from url if it is empty 
        // choose 1 as the default value
        $state_id = $id == null ? 1 : States::findOrFail($id)->id;
        // get all states database table
        $states = States::get();
        // get all lgas data from database table
        $lgas = Lgas::where('state_id', $state_id)->get();
        return view('address.postcode', compact(
            'states',
            'lgas',
            'state_id'
        ));
    }

    public function addPostcode(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'country' => ['required', 'string', 'max:225'],
                'state' => 'required|numeric|digits_between:1,10',
                'lga' => 'required|numeric|digits_between:1,10',
                'town' => ['required', 'string', 'min:3', 'max:225', 'unique:postcodes'],
                'code' => 'required|numeric|digits:6',
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
                'code.required' => 'Postcode field can not be empty.',
                'code.numeric' => 'Postcode field can not accept any other value than numbers.',
                'code.digits' => 'Postcode field do not accept less or greater than 6 characters',
                // 'code.min' => 'Postcode field do not accept less than 6 character',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $postcode = new Postcodes;
        $postcode->code = $request->code;
        $postcode->town = $request->town;
        $postcode->lga_id = $request->lga;
        $postcode->state_id = $request->state;
        $postcode->user_id = Auth::user()->id;
        $postcode->save();

        return redirect()->back()->with('success', 'Postcode successfully added');
    }
}
