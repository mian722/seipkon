<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\OffersPool;
use App\Offer;
use DB;

class OffersPoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pools = OffersPool::all();

        return view('admin.offer-pool', compact('pools'));
    }

    /**
     * Create a Pool resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_pool()
    {
        return view('admin.create-pool');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $offer_pool = new OffersPool;
        $offer_pool->name = $request->name;
        $offer_pool->note = $request->note;
        $offer_pool->status = ($request->status == "Active") ? 1 : 0;
        $offer_pool->admin_id = Auth::user()->id;
        $offer_pool->save();
        if (!empty($offer_pool) ) {
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pool = OffersPool::with('offers.restrictions')->where('id', $id)->get();
        $alloffer = Offer::all();
        return view('admin.detail-pool', compact('pool', 'alloffer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addoffertopool(Request $request)
    {
        foreach ($request->offers as $offerid) {
            $values = array('offer_id' => $offerid,'offerspool_id' => $request->poolid);
            DB::table('pool_relation')->insert($values);
        }
        return redirect()->back()->with('success', 'Succesfully Added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteofferfrompool($oid, $pid)
    {
        DB::table('pool_relation')->where('offerspool_id', $pid)->where('offer_id', $oid)->delete();
        return redirect()->back()->with('success', 'Succesfully Deleted');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatename(Request $request, $id)
    {
        return OffersPool::where('id', $id)->update(['name' => $request->value]);
        
    }
    public function updatestatus(Request $request, $id)
    {
        return OffersPool::where('id', $id)->update(['status' => $request->value]);
        
    }
    public function updatenote(Request $request, $id)
    {
        return OffersPool::where('id', $id)->update(['note' => $request->value]);   
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
