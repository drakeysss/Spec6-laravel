<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();  // Auto-incrementing ID
            $table->string('name');  // User's name
            $table->string('email')->unique();  // User's email (unique constraint)
            $table->timestamp('email_verified_at')->nullable();  // Email verification timestamp
            $table->string('password');  // User's hashed password
            $table->rememberToken();  // For "remember me" functionality
            $table->timestamps();  // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');  // Drop the users table if this migration is rolled back
    }
}
