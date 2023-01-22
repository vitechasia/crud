<?php

namespace Vdes\Crud\Commands;

use Illuminate\Console\Command;
use Vdes\PermisionRoles\Models\Permission;

class InsertPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:permissions {routes}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menambahkan Permesion Otomatis Sesuai dengan nama modul yang dibuat';

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
     * @return int
     */
    public function handle()
    {
        $name_route = $this->argument('routes');
        $input = [
            [
                'name'=>ucwords($name_route.' List'),
                'slug'=>$name_route.'s-list'
            ],
            [
                'name'=>ucwords($name_route.' Create'),
                'slug'=>$name_route.'s-create'
            ],
            [
                'name'=>ucwords($name_route.' Edit'),
                'slug'=>$name_route.'s-edit'
            ],
            [
                'name'=>ucwords($name_route.' Delete'),
                'slug'=>$name_route.'s-delete'
            ]
        ];
        Permission::insert($input);
    }
}
