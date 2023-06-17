<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetail;
use App\Models\UserGroup;
use App\Http\Requests\userCreate;

class userController extends Controller
{
    //    
    /**
     * Method userCreate
     *
     * @return void
     */
    public function userCreate()
    {
        return view('game.create');
    }

    public function userStore(userCreate $request)
    {
        $input      = $request->all();
        $users      = $input['name']; // Array of users
        $groups     = array_chunk($users, 2); // Split users into groups of 2
        $winners    = [];
        $groupNames = ['Group1', 'Group2'];

        $result = [];

        foreach ($groups as $key => $group) {

            $groupName          = isset($groupNames[$key]) ? $groupNames[$key] : 'Group' . ($key + 1);
            $result[$groupName] = $group;
            
        }

        // Outputting the result
        foreach ($result as $groupName => $groupMembers) {
            $winnerIndex    = array_rand($groupMembers);
            $winners[]      = $groupMembers[$winnerIndex];

            $userGroup= UserGroup::create([
                'user_name'     => implode(", ", $groupMembers),
                'name'          => $groupName,
                'winner_name'   => $groupMembers[$winnerIndex]
                
            ]);
        }

        return redirect()->route('index');
    }
    
    /**
     * Method index
     *
     * @return void
     */
    public function index()
    {

        $userGroupWinners = UserGroup::pluck('winner_name')->toArray();
        $users            = $userGroupWinners;
        $groups           = [];
        
        // Create groups
        while (count($users) > 0) {
            $group    = array_splice($users, 0, 2);
            $groups[] = $group;
        }

        foreach ($groups as $group) 
        {
            $groupName[]  = implode(",",$group);
        }

        //Determine winners from each group
        $winners = [];
    
        foreach ($groups as $group) {
            $winnerIndex    = array_rand($group);
            $winner         = $group[$winnerIndex];
            $winners[]      = $winner;
        }

        $thirdGroup     = $winners;
        $finalgroups    = [];

        while (count($thirdGroup) > 0) {
            $finalGroup     = array_splice($thirdGroup, 0, 2);
            $finalGroups[]  = $finalGroup;
        }

        $finalWinners = [];

        foreach ($finalGroups as $finalGroup) 
        {
            $finalGroupName[]  = implode(",",$finalGroup);
            $finalWinnerIndex  = array_rand($finalGroup);
            $finalWinner       = $finalGroup[$finalWinnerIndex];
            $finalWinners[]    = $finalWinner;
        }

        $userGroupDetails = UserGroup::get();
        return view('game.tournament',compact('userGroupDetails','groupName','winners','finalGroupName','finalWinners'));
        
    } 
}
