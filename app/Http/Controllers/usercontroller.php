
<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UserRepository;
use App\User;
use App\Proyecto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class usercontroller extends Controller
{
    /**
     * @var UserRepository
     */
    protected $users;

    /**
     * UserController constructor.
     *
     * @param UserRepository $users
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * Show user homepage.
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */

    

     public function store()
     {

        return "aki esto"
     }
    }