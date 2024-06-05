<?php

use App\Enums\GenderStatusEnum;
use App\Enums\ProviderStatusEnum;
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
            $table->ulid("id")->primary()->autoIncrement();
            $table->string('first_name');
            $table->string('last_name');
            $table->tinyInteger('gender')->default(GenderStatusEnum::male);
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string("verification_code")->nullable();
            $table->timestamp('verification_code_expire')->nullable();
            $table->string('password');
            $table->tinyInteger('provider')->default(ProviderStatusEnum::zhavstudio);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
