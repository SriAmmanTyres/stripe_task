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
         Schema::table('products', function (Blueprint $table) {
             $table->string('image')->nullable(); // Change data type if needed
             // You might consider other attributes for the image field, such as size or file type
         });
     }
 
     public function down()
     {
         Schema::table('products', function (Blueprint $table) {
             $table->dropColumn('image');
         });
     }
};
