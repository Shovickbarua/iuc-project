<?php

use Carbon\Carbon;
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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status');
            $table->timestamps();
        });
        DB::table('rooms')->insert([
            [
            'name'      => 'single-room',
            'status'        =>  1,
            'created_at'    =>Carbon::now()
            ], 
            [
            'name'      => 'deluxe-room',
            'status'        =>  1,
            'created_at'    =>Carbon::now()
            ],
            [
            'name'      => 'couple-room',
            'status'        =>  1,
            'created_at'    =>Carbon::now()
            ],
            [
            'name'      => 'presidential-room',
            'status'        =>  1,
            'created_at'    =>Carbon::now()
            ],
            [
            'name'      => 'royal-suite',
            'status'        =>  1,
            'created_at'    =>Carbon::now()
            ],
            [
            'name'      => 'executive-suite',
            'status'        =>  1,
            'created_at'    =>Carbon::now()
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
