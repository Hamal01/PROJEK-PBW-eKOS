<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jeniskelamin', ['lakilaki','perempuan']);
            $table->biginteger('notelpon');
            $table->string('nomorkamar');
            $table->string('jumlahmenginap');
            $table->string('tanggalmasuk');
            $table->enum('status', ['Lunas','Belumbayar']);
            Route::get('/', function () {
    return view('welcome');
});


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
        Schema::dropIfExists('employees');
    }
}
