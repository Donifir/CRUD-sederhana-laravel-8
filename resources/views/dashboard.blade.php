<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="btn-group mb-4">
                        <a href="barang/create" class="btn btn-primary">Tambah barang</a>
                      </div>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Harha</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($barang as $barangs)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $barangs -> nama_barang }}</td>
                                <td>{{ $barangs -> harga }}</td>
                                <td>{{ $barangs -> stok }}</td>
                                <td>{{ $barangs -> keterangan }}</td>
                                <td>{{ $barangs -> gambar }}</td>
                                <td><a href="/barang/{{ $barangs->id }}" class="btn btn-primary">Baca</a></td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
