<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Home;
use App\Light;
use App\ReceivingHome;
use App\SendingHome;
use App\HomePassword;
use App\User;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
    	$user = Auth::user();

    	return view('admin.dashboard', compact('user'));
    }

    public function overview()
    {
    	$user = Auth::user();

    	return view('admin.ihome.ihomes', compact('user'));
    }

    public function addIhome()
    {
    	return view('admin.ihome.add');
    }

    public function storeIhome(Request $request)
    {
    	$this->validate($request, [
            'password' => 'required',
            'receivingName' => 'required',
            'receivingLocation' => 'required',
            'sendingName' => 'required',
            'sendingLocation' => 'required',
            'homeName' => 'required'
        ]);

    	$password = $request->password;

    	if (HomePassword::where('password', '=' , $password)->exists()) {
    		$receivingHome = new ReceivingHome();
    		$receivingHome->name = $request->receivingName;
	    	$receivingHome->location = $request->receivingLocation;
	    	$receivingHome->save();

	    	$sendingHome = new SendingHome();
    		$sendingHome->name = $request->sendingName;
	    	$sendingHome->location = $request->sendingLocation;
	    	$sendingHome->save();

    		$home = new Home();
            $home->password = $password;
    		$home->sending_home_id = $sendingHome->id;
    		$home->receiving_home_id = $receivingHome->id;
    		$home->user_id = Auth::User()->id;
    		$home->name = $request->homeName;
	    	$home->save();

	    	$lights = ['white', 'red', 'green', 'orange'];

	    	foreach ($lights as $light) {
	    		$newLight = new Light();
	    		$newLight->color = $light;
	    		$newLight->message = $request->$light;
	    		$newLight->home_id = $home->id;
	    		$newLight->save();
	    	}

	    	return redirect('/admin/dashboard')->with('message', ['success', 'iHome successfully added.']);
    	}

    	return back()->withInput()->with('message', ['danger', 'The code you entered is not correct.']);    	
    }

    public function editIhome(Home $ihome)
    {
    	return view('admin.ihome.edit', compact('ihome'));
    }

    public function updateIhome(Request $request, home $ihome)
    {
    	$this->validate($request, [
            'receivingName' => 'required',
            'receivingLocation' => 'required',
            'sendingName' => 'required',
            'sendingLocation' => 'required',
            'homeName' => 'required'
        ]);

        $ihome->name = $request->homeName;
        $ihome->save();

        $receiver = $ihome->ReceivingHome;
        $receiver->name = $request->receivingName;
        $receiver->location = $request->receivingLocation;
        $receiver->save();

        $sender = $ihome->SendingHome;
        $sender->name = $request->sendingName;
        $sender->location = $request->sendingLocation;
        $sender->save();

        return redirect('/admin/ihomes')->with('message', ['success', 'iHome successfully edited.']);
    }

    public function deleteIhome(Home $ihome)
    {
    	if ($ihome->delete()) {
    		return back()->with('message', ['success', 'iHome successfully deleted.']);
    	}
    	return back()->with('message', ['danger', 'iHome failed to get deleted.']);
    }

    public function ligthOverview()
    {
        $homes = Auth::User()->Homes;

        return view('admin.ihome.lights', compact('homes'));
    }

    public function editLights(Home $ihome)
    {
        return view('admin.ihome.editLights', compact('ihome'));
    }

    public function updateLights(Request $request, Home $ihome)
    {
        $this->validate($request, [
            'red' => 'required',
            'green' => 'required',
            'white' => 'required',
            'orange' => 'required',
        ]);

        $lights = $ihome->Lights;

        $saved = true;

        foreach ($lights as $light) {
            switch ($light->color) {
                case 'red':
                    $light->message = $request->red;
                    break;

                case 'orange':
                    $light->message = $request->orange;
                    break;

                case 'white':
                    $light->message = $request->white;
                    break;

                case 'green':
                    $light->message = $request->green;
                    break;
            }

            if (!$light->save()) {
                $saved = $false;
            }
        }
        if ($saved) {
            return redirect('/admin/lights')->with('message', ['success', 'Light messages successfully edited.']);
        }
        return back()->withInput()->with('message', ['danger', 'Failed to edit all light messages.']);
    }

    public function profile(User $user)
    {
        return view('admin.profile.index', compact('user'));
    }

    public function profileEdit(User $user)
    {
        return view('admin.profile.edit', compact('user'));
    }

    public function profileUpdate(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'place_of_residence' => 'required',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->place_of_residence = $request->place_of_residence;

        if ($request->file('photo')) {
            $image_name = $request->file('photo')->getClientOriginalName();

            $image_name = uniqid() . $image_name;

            $request->file('photo')->move(public_path(). '/images', $image_name);

            $user->photo = $image_name;
        }

        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        if ($password != "" || $password != null) {
            if ($password != $password_confirmation) {
                return back()->withInput()->with('message', ['danger', "Password confirmation doesn't match password"]);
            }
            $user->password = Hash::make($password);
        }

        if ($user->save()) {
            return redirect('/admin/profile/'.$user->id)->with('message', ['success', 'Profile successfully edited.']);
        }
        return back()->withInput()->with('message', ['danger', 'Failed to edit profile.']);
    }
}
