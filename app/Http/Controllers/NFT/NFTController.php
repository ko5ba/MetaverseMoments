<?php

namespace App\Http\Controllers\NFT;

use App\Http\Controllers\Controller;
use App\Http\Requests\NFT\StoreRequest;
use App\Http\Requests\NFT\UpdateRequest;
use App\Http\Resources\NFT\NFTResource;
use App\Models\NFT;

class NFTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return NFTResource::collection(NFT::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $nft = NFT::create($data);

        return new NFTResource($nft);
    }

    /**
     * Display the specified resource.
     */
    public function show(NFT $nft)
    {
        return new NFTResource($nft);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, NFT $nft)
    {
        $data = $request->validated();
        $nft->update($data);
        $nft->fresh();

        return new NFTResource($nft);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NFT $nft)
    {
        $nft->delete();

        return response()->json([
            'message' => 'NFT было успешно удалено'
        ]);
    }
}
