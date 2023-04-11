<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\model\Test;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function chunk(){
        Test::where('status', true)
            ->chunk(10, function (Collection $tests) {
                $tests->each->update(['status' => false]);
            });
    }
    public function chunkById(){
        Test::where('status', true)
            ->chunkById(200, function (Collection $tests) {
                $tests->each->update(['status' => false]);
            }, $column = 'id');
    }
}
