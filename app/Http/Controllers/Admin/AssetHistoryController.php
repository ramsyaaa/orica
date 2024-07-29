<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use App\Models\AssetHistory;
use Illuminate\Http\Request;

class AssetHistoryController extends Controller
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
        $assethistory = AssetHistory::latest()->paginate($perPage);
        $data['assethistory'] = $assethistory;
        return view('admin.asset-history.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.asset-history.create');
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
        
        AssetHistory::create($requestData);
        alert()->success('New ' . 'AssetHistory'. ' Created!' );

        return redirect('admin/asset-history');
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
        $assethistory = AssetHistory::findOrFail($id);

        return view('admin.asset-history.show', compact('assethistory'));
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
        $assethistory = AssetHistory::findOrFail($id);
        $data['assethistory'] = $assethistory;
        return view('admin.asset-history.edit', $data);
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
        
        $assethistory = AssetHistory::findOrFail($id);
        alert()->success('Record Updated!' );
        $assethistory->update($requestData);

        return redirect('admin/asset-history');
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
        AssetHistory::destroy($id);

        return redirect('admin/asset-history');
    }
}
