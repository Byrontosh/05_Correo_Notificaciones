<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{

    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->uuid('id')->primary(); // ID incrementable
            $table->string('type'); // Tipo de notificación
            $table->morphs('notifiable'); // dos campos para saber a que tipo de usuario se realizo la notificación 
            $table->text('data'); // Almacena la información de la notificación en formato JSON
            $table->timestamp('read_at')->nullable(); // Información para saber la hora de lectura de la notificación
            $table->timestamps(); // Para almacenar la creación de la notificaión
        });
    }


    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
