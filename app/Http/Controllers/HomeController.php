<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\AwesomePackage;
use App\Models\Destination;
use App\Models\OurService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::with('translations')->get();
        $services = OurService::with('translations')->get();
        $destinations = Destination::with('translations')->get();
        $destinationTL = Destination::with('translations')->withTl()->get();
        $destinationL = Destination::with('translations')->withL()->get();
        $destinationR = Destination::with('translations')->withR()->get();
        $packages = AwesomePackage::with('translations')->get();

        $sectionAboutUsName = str_replace('_', ' ', AboutUs::getTableName());
        $sectionOurServiceName = str_replace('_', ' ', OurService::getTableName());
        $sectionDestinationName = str_replace('_', ' ', Destination::getTableName());
        $sectionAwesomePackageName = str_replace('_', ' ', AwesomePackage::getTableName());

        return view('welcome', compact(
            'aboutUs','services', 'destinations', 'destinationTL', 'destinationL', 'destinationR', 'packages',
            'sectionAboutUsName', 'sectionOurServiceName', 'sectionDestinationName', 'sectionAwesomePackageName'
        ));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(AboutUs $aboutUs)
    {
        //
    }

    public function edit(AboutUs $aboutUs)
    {
        //
    }

    public function update(Request $request, AboutUs $aboutUs)
    {
        //
    }

    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
