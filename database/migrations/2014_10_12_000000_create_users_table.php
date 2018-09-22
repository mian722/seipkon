<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('contactno');
            $table->string('password');
            $table->string('imid');
            $table->string('imaccount');
            $table->string('subdomain');
            $table->string('country')->nullable();
            $table->string('website')->nullable();
            $table->string('company')->nullable();
            $table->string('managerid')->nullable();
            $table->string('whitelist')->nullable();
            $table->string('securitycode')->nullable();
            $table->tinyInteger('roles_id')->nullable();
            $table->tinyInteger('admin_id');
            $table->tinyInteger('status')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
