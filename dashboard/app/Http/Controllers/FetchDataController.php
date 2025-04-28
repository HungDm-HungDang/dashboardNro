<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\ClanSv1;
use App\Models\Player;

class FetchDataController extends Controller
{
    public function home()
    {
        $fetchDataAcc = $this->fetchDataAcc();
        $fetchDataPlayer = $this->fetchDataPlayer();
        $fetchDataClan = $this->fetchDataClan();
        $fetchDataTask = $this->fetchDataTask();
        return view('home',compact('fetchDataAcc','fetchDataPlayer','fetchDataClan'));
    }

    public function fetchDataAcc()
    {
        $fetchData = Account::fetchData();
        $countAccount = count($fetchData);
        $newAccount = $fetchData->whereBetween('create_time', [now()->subDay(), now()]);
        $countNewAccount = count($newAccount);
        $countPercentAccount = ceil((count($newAccount)/$countAccount * 100));
        return compact('fetchData', 'countAccount', 'countNewAccount', 'countPercentAccount');
    }

    public function fetchDataPlayer()
    {
        $fetchData = Player::fetchData();
        $gender0 = count($fetchData->where('gender','0'));
        $gender1 = count($fetchData->where('gender','1'));
        $gender2 = count($fetchData->where('gender','2'));
        $countPlayer = $gender0 + $gender1 + $gender2;
        return compact('fetchData', 'gender0', 'gender1', 'gender2','countPlayer');
    }

    public function fetchDataClan() {
        $fetchData = ClanSv1::fetchData();
        $countClan = count($fetchData);
        $newClan = $fetchData->whereBetween('create_time', [now()->subDay(), now()]);
        $countNewClan = count($newClan);
        $countPercentClan = ceil((count($newClan)/$countClan * 100));
        return compact('fetchData', 'countClan', 'countNewClan', 'countPercentClan');
    }

    public function fetchDataTask() {
        $fetchData = Player::fetchData();
        $fetchData = $fetchData->map(function($player) {
            $dataTask = json_decode($player->data_task, true);
            $player->task = $dataTask[0];
            return $player;
        })->sortByDesc('task');
        $topPlayer = $fetchData->take(10);
        return compact('topPlayer');
    }

    public function test()
    {

        return view('test');
    }
}
