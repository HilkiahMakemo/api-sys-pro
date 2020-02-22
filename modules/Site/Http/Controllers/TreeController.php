<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Site\Http\Resources\TreeResource;
use Modules\Site\Models\SiteTree;

class TreeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(SiteTree $Tree)
    {
        $where['site_tree_id'] = request('id') ?? -1;

        $Resource = $Tree->where($where)->get();

        return TreeResource::collection($Resource);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('site::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(SiteTree $Tree,Request $request)
    {
        //
        return $Tree->firstOrCreate($request->input());
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show(SiteTree $Tree, $id)
    {
        return $Tree->find($id) ?? [];
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('site::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
