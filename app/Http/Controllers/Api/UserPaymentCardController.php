<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserPaymentCardRequest;
use App\Http\Requests\UpdateUserPaymentCardRequest;
use App\Models\UserPaymentCard;

class UserPaymentCardController extends Controller
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
     * @param  \App\Http\Requests\StoreUserPaymentCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPaymentCardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserPaymentCard  $userPaymentCard
     * @return \Illuminate\Http\Response
     */
    public function show(UserPaymentCard $userPaymentCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserPaymentCard  $userPaymentCard
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPaymentCard $userPaymentCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserPaymentCardRequest  $request
     * @param  \App\Models\UserPaymentCard  $userPaymentCard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPaymentCardRequest $request, UserPaymentCard $userPaymentCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserPaymentCard  $userPaymentCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPaymentCard $userPaymentCard)
    {
        //
    }
}
