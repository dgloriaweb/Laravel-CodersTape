<?php

namespace App\Console\Commands;

use App\Company;
use Illuminate\Console\Command;

class AddCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:company';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a new company';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->ask('Company name?');
        $phone = $this->ask('Phone?');
        // $company = Company::create([
        //     'name' => $this->argument('name'),
        //     'phone' => $this->argument('phone')
        // ]);
        // $this->info('string here');
        // $this->warn('warning here');
        // $this->error('error here');

        if ($this->confirm('I add this new ' . $name . ', and ' . $phone . ' to the database, OK?')) {
            $company = Company::create([
                'name' => $name,
                'phone' => $phone
            ]);
            return $this->info('Added: '. $company->name);
        }
        return $this->warn('nothing added');

        // $this->info($name);
        // $this->info($phone);
    }
}
