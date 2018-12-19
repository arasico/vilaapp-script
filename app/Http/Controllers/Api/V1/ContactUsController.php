<?php

namespace App\Http\Controllers\Api\V1;

use App\ContactUs;
use App\Exceptions\ApiException;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class ContactUsController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'email',
        ]);
        if (!$request->input("name"))
            throw new ApiException(
                ApiException::EXCEPTION_BAD_REQUEST_400,
                "plz check your name"
            );
        ContactUs::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "phone" => $request->input("phone"),
            "message" => $request->input("message"),
        ]);
        return $this->respond(["status" => "success"], null);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
