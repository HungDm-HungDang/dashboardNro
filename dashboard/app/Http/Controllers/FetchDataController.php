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
        $fetchPercentTask = $this->countTask();
        dd($fetchDataAcc);;
        return view('home',compact('fetchDataAcc','fetchDataPlayer','fetchDataClan','fetchDataTask','fetchPercentTask'));
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
        $taskName = config('task');
        $fetchData = $fetchData->map(function($player) use ($taskName) {
            $dataTask = json_decode($player->data_task, true);
            $taskMain = $dataTask[0] ?? 0;
            $player->task_main = $taskMain;
            $player->task_sub = $dataTask[1] ?? 0;
            $player->task_process = $dataTask[2] ?? 0;
            $player->task_name = $taskName[$taskMain] ?? 'Nhiệm vụ chưa xác định';
            return $player;
        });
        $topPlayer = $fetchData->sort(function($a, $b) {
            return [$b->task_main, $b->task_sub, $b->task_process] <=> [$a->task_main, $a->task_sub, $a->task_process];
        })->take(20);

        $topCook = $fetchData->sort(function($a, $b) {
            return [$a->task_main, $a->task_sub, $a->task_process] <=> [$b->task_main, $b->task_sub, $b->task_process];
        })->take(40);
        return compact('topPlayer','topCook');
    }
    public function countTask()
    {
        $fetchData = Player::fetchData();
        $totalPlayers = $fetchData->count(); // Tổng số người chơi

        $taskCounts = [];

        foreach ($fetchData as $player) {
            $dataTask = json_decode($player->data_task, true);

            if (isset($dataTask[0])) { // Lấy nhiệm vụ chính mà người chơi đang thực hiện (dataTask[0])
                $taskMain = $dataTask[0];

                // Đếm số lượng người chơi đang thực hiện nhiệm vụ này
                if (!isset($taskCounts[$taskMain])) {
                    $taskCounts[$taskMain] = 0;
                }
                $taskCounts[$taskMain]++;
            }
        }

        // Tính phần trăm từng nhiệm vụ
        $taskPercents = [];

        for ($i = 0; $i <= 34; $i++) { // nhiệm vụ từ 0 đến 34
            $count = $taskCounts[$i] ?? 0; // Nếu chưa có thì là 0
            $taskPercents[$i] = round(($count / $totalPlayers) * 100, 2); // Phần trăm
        }

        return compact('taskPercents');
    }


    public function test()
    {
        return view('test');
    }
}
