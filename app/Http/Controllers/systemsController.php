<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class systemsController extends Controller
{
    public function tickets()
    {
        return view('systems.tickets');
    }
    public function calendar()
    {
        return view('systems.calendar');
    }
    public function binnacle_temperatures()
    {
        return view('systems.binnacle_temperatures');
    }
    public function query_moper()
    {
        return view('systems.query_moper');
    }
    public function documents_generate()
    {
        return view('systems.documents_generate');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

}
