<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Barang') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <isindex> --}}
                        <form form action="/dashboard" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                              <input type="teks" class="form-control"  name="nama_barang"
                              value="{{ old('nama_barang') ? old('nama_barang') :$barang ->nama_barang }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Harga</label>
                                <input type="teks" class="form-control" name="harga"
                                value="{{ old('harga') ? old('harga') :$barang ->harga }}"  >
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Stok</label>
                                <input type="teks" class="form-control" name="stok"
                                value="{{ old('stok') ? old('stok') :$barang ->stok }}"  >
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                <input type="teks" class="form-control" name="keterangan"
                                 value="{{ old('keterangan') ? old('keterangan') :$barang ->keterangan }}"  >
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">gambar</label>
                                <input type="file" class="form-control" name="gambar"
                                value="{{ old('gambar') ? old('gambar') :$barang ->gambar }}"  >
                              </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    {{-- <isindex> --}}


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
