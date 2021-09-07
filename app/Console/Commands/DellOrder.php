<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Ads;
use App\Models\User;
class DellOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dell:order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $id=Auth::user()->id;
        
        $start_date = Auth::user()->updated_at; 
    
        $end_date = $start_date->addDays(30);
        
        $diff=\Carbon\Carbon::now();
        if($diff <= 30){
            $ads = ads::where('updated_at','<=',$end_date)->where('updated_at','>=',$start_date)->delete();
           if($ads){
           }
           else{
               return "error";
           }
            }
    }
}
