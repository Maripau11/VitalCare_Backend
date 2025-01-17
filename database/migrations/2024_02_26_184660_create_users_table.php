<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('role_id')->default(3)->constrained('roles')->onDelete('cascade');
            $table->string('phone_number')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name'=>'Maria Paula',
            'role_id' => 3, //Asigna el ID del Rol Correspondiente 
            'phone_number'=>'3155575147',
            'email'=>'mpaula.tq@gmail.com',
            'password'=>Hash::make('12345678'),//Contraseña estandar
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
