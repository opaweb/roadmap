<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show($projectId, $itemId)
    {
        $project = Project::findOrFail($projectId);

        $item = $project->items()->findOrfail($itemId);

        return view('item', [
            'project' => $project,
            'item' => $item
        ]);
    }
}