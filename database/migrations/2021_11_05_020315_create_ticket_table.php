<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->string("ref");
            $table->string("sujet");
            $table->string("description")->nullable();
            $table->string("service")->default('');
            $table->string("criticité")->default('');
            $table->string("status")->default('');
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('assignedto')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('dispotech')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
        
        
           
        });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket');
    }
}
