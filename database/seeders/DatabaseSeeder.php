<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'tbl_articulos',
            'tbl_ciudades',
            'tbl_roles',
            'tbl_usuarios',
            'tbl_empresas'
            // 'tbl_facturas',
            // 'tbl_facturas',
        ]);

        $this->call(tbl_articuloseedr::class);
        $this->call(tbl_ciudadeseedr::class);
        $this->call(tbl_roleseedr::class);
        $this->call(tbl_usuarioseedr::class);
        $this->call(tbl_empresaseedr::class);
        
    }

    protected function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }       
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
