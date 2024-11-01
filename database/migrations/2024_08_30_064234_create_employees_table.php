<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel employees.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Kolom ID sebagai primary key dengan tipe integer auto-increment
            $table->string('nama'); // Nama karyawan
            $table->string('jabatan'); // Jabatan karyawan
            $table->string('departemen'); // Departemen karyawan
            $table->date('tanggal_masuk'); // Tanggal mulai bekerja di perusahaan
            $table->decimal('gaji', 10, 2); // Gaji karyawan dengan tipe decimal
            $table->string('telepon')->nullable(); // Nomor telepon karyawan, bisa kosong (opsional)
            $table->string('email')->unique(); // Email karyawan yang harus unik
            $table->text('alamat')->nullable(); // Alamat tempat tinggal karyawan, bisa kosong (opsional)
            $table->date('tanggal_lahir')->nullable(); // Tanggal lahir karyawan, bisa kosong (opsional)
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan', 'lainnya'])->nullable(); // Jenis kelamin karyawan (Laki-laki/Perempuan/Lainnya), bisa kosong (opsional)
            $table->string('manajer')->nullable(); // Nama manajer langsung karyawan, bisa kosong (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at untuk mencatat waktu pembuatan dan pembaruan
        });
    }

    /**
     * Membalikkan migrasi dengan menghapus tabel employees.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
