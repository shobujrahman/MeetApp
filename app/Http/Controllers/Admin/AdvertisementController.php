<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Advertisement;
use Session;

class AdvertisementController extends Controller
{
    public function index(){
        session::put('page','advertisement');
        return view('admin.advertisement')->with('advertisement',Advertisement::first());
    }

    //Update advertisement Details
    public function update(Request $request){
        $advertisement = Advertisement::first();

        $advertisement->admob_inter = $request->input('admob_inter');
        $advertisement->admob_native = $request->input('admob_native');
        $advertisement->admob_banner = $request->input('admob_banner');
        $advertisement->admob_reward = $request->input('admob_reward');
        $advertisement->fb_inter = $request->input('fb_inter');
        $advertisement->fb_native = $request->input('fb_native');
        $advertisement->fb_banner = $request->input('fb_banner');
        $advertisement->fb_reward = $request->input('fb_reward');
        $advertisement->startup_inter = $request->input('startup_inter');
        $advertisement->startup_banner = $request->input('startup_banner');
	    $advertisement->native_ads = $request->input('native_ads');
        $advertisement->industrial_interval = $request->input('industrial_interval');
       
        
        $advertisement->ad_types = $request->input('ads_type');

        // dd($setting);
        $advertisement->update();
        return redirect()->back()->with('message', 'Ads Updated!');
    }
}
