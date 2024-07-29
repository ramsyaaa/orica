<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use App\Models\Asset;
use App\Models\Location;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = 25;
        $asset = Asset::latest()->paginate($perPage);
        $location = Location::pluck('location_name', 'id');
        $data['location'] = $location;
        $data['asset'] = $asset;
        return view('admin.asset.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.asset.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Asset::create($requestData);
        alert()->success('New ' . 'Asset'. ' Created!' );

        return redirect('admin/asset');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $asset = Asset::findOrFail($id);

        return view('admin.asset.show', compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $asset = Asset::findOrFail($id);
        $location = Location::pluck('location_name', 'id');
        $data['location'] = $location;
        $data['asset'] = $asset;
        return view('admin.asset.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $asset = Asset::findOrFail($id);
        alert()->success('Record Updated!' );
        $asset->update($requestData);

        return redirect('admin/asset');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        alert()->success('Record Deleted!' );
        Asset::destroy($id);

        return redirect('admin/asset');
    }
}
