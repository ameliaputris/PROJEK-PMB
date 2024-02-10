<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProgramStudi;
use DateTime;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create ProgramStudi
        ProgramStudi::create([
            'id_prodi' => 'PRD001',
            'nama_prodi' => 'S1 Akuntasi',
            'jenjang_prodi' => 'Strata-1',
            'foto_prodi' => 'foto prodi/Prodi1706969419-bisnis.jpg',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_prodi' => 'PRD002',
            'nama_prodi' => 'S1 Manajemen',
            'jenjang_prodi' => 'DiplStrata-1',
            'foto_prodi' => 'foto prodi/Prodi1706969419-bisnis.jpg',
            'created_at' => now()
        ]);
        ProgramStudi::create([
            'id_prodi' => 'PRD003',
            'nama_prodi' => 'S1 Biokewirausahaan',
            'jenjang_prodi' => 'Strata-1',
            'foto_prodi' => 'foto prodi/Prodi1706969419-bisnis.jpg',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_prodi' => 'PRD004',
            'nama_prodi' => 'S1 Sistem Informasi',
            'jenjang_prodi' => 'Strata-1',
            'foto_prodi' => 'foto prodi/Prodi1706969515-sitipar.jpg',
            'created_at' => now()
        ]);
        
        ProgramStudi::create([
            'id_prodi' => 'PRD005',
            'nama_prodi' => 'S1 Teknik Informasi',
            'jenjang_prodi' => 'Strata-1',
            'foto_prodi' => 'foto prodi/Prodi1706969515-sitipar.jpg',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_prodi' => 'PRD006',
            'nama_prodi' => 'S1 Pariwisata',
            'jenjang_prodi' => 'Strata-1',
            'foto_prodi' => 'foto prodi/Prodi1706969515-sitipar.jpg',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_prodi' => 'PRD007',
            'nama_prodi' => 'D3 Akuntasi Bisnis Digital',
            'jenjang_prodi' => 'Diploma-3',
            'foto_prodi' => 'foto prodi/Prodi1706969755-vokasi.jpg',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_prodi' => 'PRD008',
            'nama_prodi' => 'D3 Perbankan dan Keuangan',
            'jenjang_prodi' => 'Diploma-3',
            'foto_prodi' => 'foto prodi/Prodi1706969755-vokasi.jpg',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_prodi' => 'PRD009',
            'nama_prodi' => 'D3 Manajemen Pemasaran',
            'jenjang_prodi' => 'Diploma-3',
            'foto_prodi' => 'foto prodi/Prodi1706969755-vokasi.jpg',
            'created_at' => now()
        ]);
    }
}
