<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; use Illuminate\Support\Facades\DB; class CreateLogsTable extends Migration { public function up() { Schema::create('logs', function (Blueprint $speb36c4) { $speb36c4->increments('id'); $speb36c4->integer('user_id')->index(); $speb36c4->string('ip'); $speb36c4->integer('action')->default(\App\Log::ACTION_LOGIN); $speb36c4->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP')); }); } public function down() { Schema::dropIfExists('logs'); } }