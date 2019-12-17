<?php

namespace App\Http\Controllers;

use App\Intern;
use Validator;
use Illuminate\Http\Request;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interns = Intern::All();

        return response()->json([
            'state' => 'success',
            'description' => $interns
        ]);
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lastname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'age' => 'required|integer|max:255',
            'phone_number' => 'required|unique:interns|max:255',
            'email' => 'required|unique:interns|max:255',
        ]);

        if ($validator->fails()) {
            // return redirect('post/create')
            //             ->withErrors($validator)
            //             ->withInput();
            return response()->json([
                'state' => 'error',
                'message' => $validator->errors()
            ]);
        } else {


        $intern = new Intern([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'age' => $request->age,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
        ]);

        

        $intern->save();
        return response()->json([
            'state' => 'success',
            'message' => 'Intern created',
        ]);
        
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function show(Intern $intern)
    {
        $apprenant=Intern::find($intern);
        return response()->json([
            'state' => 'success',
            'description' => $apprenant,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function edit(Intern $intern)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intern $intern)
    {
        $apprenant = Intern::find($intern->id);
        // Faire update :
        $apprenant->firstname = $request->firstname;
        $apprenant->lastname = $request->lastname;
        $apprenant->age = $request->age;
        $apprenant->email = $request->email;
        $apprenant->phone_number = $request->phone_number;
        
        $apprenant->save();

        $validator = Validator::make($request->all(), [
            'lastname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'age' => 'required|integer|max:255',
            'phone_number' => 'required|unique:interns|max:255',
            'email' => 'required|unique:interns|max:255',
        ]);

        if ($validator->fails()) {
            // return redirect('post/create')
            //             ->withErrors($validator)
            //             ->withInput();
            return response()->json([
                'state' => 'error',
                'message' => $validator->errors()
            ]);
        } else {

        return response()->json([
            'state' => 'success',
            'message' => 'Intern updated.'
        ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function destroy(Intern $intern)
    {
        $apprenant = Intern::find($intern->id);

        $apprenant->delete();

        return response()->json([
            'state' => 'success',
            'message' => 'Intern deleted.'
        ]);
    }
}
