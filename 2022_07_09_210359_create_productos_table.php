<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table -> string('producto');
            $table -> date('caducidad');
            $table -> integer('cantidad');
            $table -> decimal('precio');

            $table->timestamp( column: 'created_at' ) -> useCurrent();
            $table->timestamp( column: 'updated_at' ) -> useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
