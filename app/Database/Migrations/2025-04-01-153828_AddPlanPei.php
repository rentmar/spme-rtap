<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPlanPei extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'idpei' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name_pei' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
        ]);
        $this->forge->addPrimaryKey('idpei');
        $this->forge->createTable('pei');
    }

    public function down()
    {
        //
        $this->forge->dropTable('pei');
    }
}
