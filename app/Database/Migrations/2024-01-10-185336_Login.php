<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'LoginId' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'usigned'        => TRUE,
                'auto_increment' => TRUE
            ],
        
            'Usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],
        
            'Senha' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],
        ]);
        
        $this->forge->addKey('LoginId', TRUE);
        $this->forge->createTable('login');
    }

    public function down()
    {
        $this->forge->dropTable('login');
    }
}
