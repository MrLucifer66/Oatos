<?php
 
namespace App\View\Components;
 
use Illuminate\View\Component;
use App\Models\User;
 
class UsersList extends Component
{
    public $users;
 
    public function __construct()
    {
        $this->users = User::all();
    }
 
    public function render()
    {
        return view('components.users-list');
    }
}