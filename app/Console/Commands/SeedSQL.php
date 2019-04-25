<?php

namespace App\Console\Commands;

use App\User;
use App\Link;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Faker\Factory as Faker;

class SeedSQL extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:dummy {counter}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh DB & Seed Database with Dummy Data';

    private $faker;
    private $counter;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->faker = Faker::create();
        $this->counter = 1;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $counter = $this->argument("counter");
        $this->counter = $counter;
        $this->info("Starting...");
        $this->info($this->description);

        // reset migration
        $this->call("migrate:reset");
        $this->call("migrate");

        // Seed user n link
        $i = 1;
        while($i <= $counter) {
            $this->seedUser();
            $i++;
        }

        $this->info("Done!");
    }

    private function seedUser() {
        $user = new User();
        $user->name = $this->faker->name;
        $user->email = $this->faker->email;
        $user->password = bcrypt('123123');
        $user->sitename = str_slug($user->name);
        $user->save();
        $this->ddInfo("user", $user->name);

        // create links
        $i = 1;
        while($i <= $this->counter) {
            $this->seedLink($user);
            $i++;
        }
    }

    private function seedLink(User $user) {
        $data = new Link();
        $data->user_id = $user->id;
        $data->url = $this->faker->url;
        $data->name = $this->faker->city;
        $data->save();

        $this->ddInfo("link", $data->url);
    }

    private function ddInfo($clsName, $label, $withSeparator=false) {
        $clsName = strtoupper($clsName);
        if($withSeparator) {
            $this->info(str_repeat("=", 80));
            $this->info("||--  [$clsName] $label - Created.  --|| ");
            $this->info(str_repeat("=", 80));
        }
        else {
            $this->info("[$clsName] $label - Created.");
        }
    }
}
