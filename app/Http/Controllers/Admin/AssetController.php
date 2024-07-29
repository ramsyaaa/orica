<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Models\Asset;
use App\Http\Requests;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Picqer\Barcode\BarcodeGeneratorHTML;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

        $modifieds = $asset->map(function($item){
            $generator = new BarcodeGeneratorPNG;
            $item->barcode = '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($item->id, $generator::TYPE_CODE_128)) . '">';
            $item->qrcode = QrCode::size(100)->generate(route('showAsset',['id' => $item->id]));
            return $item;

        });

        $asset->setCollection($modifieds);
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
        try {
            $requestData = $request->all();
            if($request->hasFile('image'))
            {
                $this->validate($request, [
                    'image' => 'image|mimes:png,jpeg,jpg,svg|max:4096'
                ]);
    
                $file= $request->file('image');
                $image_name = $file->getClientOriginalName();
                $file->move(public_path('uploads/images/'),$image_name);
                $requestData['image'] = $image_name;
            }
            
            Asset::create($requestData);
            alert()->success('New ' . 'Asset'. ' Created!' );
    
            return redirect('admin/asset');
        } catch (\Throwable $th) {
            dd($th);
        }
     
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

        if($request->hasFile('image'))
        {
            $this->validate($request, [
                'image' => 'image|mimes:png,jpeg,jpg,svg|max:4096'
            ]);
            $file= $request->file('image');
            $image_name = $file->getClientOriginalName();
            if($asset->image){
                unlink(public_path('uploads/images/'.$asset->image));
                $file->move(public_path('uploads/images/'),$image_name);
            }else{
                $file->move(public_path('uploads/images/'),$image_name);
            }
            $requestData['image'] = $image_name;
        }

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

    public function showAsset($id){

        $asset = Asset::findOrFail($id);

        return view('admin.asset.show-asset', compact('asset'));
    }
}
