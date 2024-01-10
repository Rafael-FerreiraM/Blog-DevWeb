<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
       
$this->forge->addField([
    'ProdutoId' => [
        'type'           => 'INT',
        'constraint'     => 11,
        'usigned'        => TRUE,
        'auto_increment' => TRUE
    ],

    'Nome' => [
        'type'       => 'VARCHAR',
        'constraint' => 128
    ],

    'Qtde' => [
        'type' => 'INT'
    ],

    'Valor' => [
        'type' => 'DOUBLE'
    ],
]);

$this->forge->addKey('ProdutoId', TRUE);
$this->forge->createTable('produtos');

    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}
