<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMitra extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'nik' => [
                'type'           => 'char',
                'constraint'     => 16,
            ],
            'nama_mitra' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'jenis_kelamin' => [
                'type'       => 'char',
                'constraint' => '100',
            ],
            'tanggal_lahir' => [
                'type'       => 'date',

            ],
            'umur' => [
                'type'       => 'char',
                'constraint' => '5',
            ],
            'pendidikan' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],

        ]);
        $this->forge->addKey('nik', true);
        $this->forge->createTable('mitra');
        $this->forge->addField([
            'id_kegiatan' => [
                'type'           => 'int',
                'constraint'     => 11,
            ],
            'nama_kegiatan' => [
                'type'       => 'varchar',
                'constraint' => '50',
            ],
            'jenis_kelamin' => [
                'type'       => 'char',
                'constraint' => '100',
            ],
            'devisi' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'periode' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],

        ]);
        $this->forge->addKey('id_kegiatan', true);
        $this->forge->createTable('kegiatan');
    }

    public function down()
    {
        // $this->forge->dropTable('mitra');
    }
}
