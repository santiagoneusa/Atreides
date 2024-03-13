<?php

namespace App\Http\Controllers;

use App\Models\Worm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class WormController extends Controller
{
    public function index(): View
    {
        $viewData = [];

        $viewData['title'] = 'Worms - Atreides';
        $viewData['subtitle'] = 'List of Worms';
        $viewData['worms'] = Worm::orderBy('velocity', 'desc')->get();

        return view('worm.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Worms - Atreides';
        $viewData['subtitle'] = 'Create Worm';

        return view('worm.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        Worm::validation($request);

        $Worm = Worm::create($request->only(['name', 'type', 'velocity']));

        Session::flash('success', 'Worm '.$Worm->getId().' created successfully.');

        return redirect()->route('worm.index');
    }

    public function statistics(Request $request): View
    {
        $viewData = [];
        $viewData['title'] = 'Worms - Atreides';
        $viewData['subtitle'] = 'Worm Statistics';

        $viewData['total'] = Worm::count();
        $viewData['averageVelocity'] = Worm::avg('velocity');
        $viewData['totalSand'] = Worm::where('type', 'sand')->count();
        $viewData['averageSandVelocity'] = Worm::where('type', 'sand')->avg('velocity');
        $viewData['totalSpacial'] = Worm::where('type', 'spacial')->count();
        $viewData['averageSpacialVelocity'] = Worm::where('type', 'spacial')->avg('velocity');

        return view('worm.statistics')->with('viewData', $viewData);
    }
}
