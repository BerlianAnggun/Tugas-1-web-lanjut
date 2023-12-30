<x-app-layout>
    <x-slot name="harder">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{__('Cabang')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shodow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- CONTENT HERE -->
                    <x-table>
                        <x-slot name="harder">
                            <tr>
                                <th>#</th>
                                <th>id_cabang</th>
                                <th>nama_cabang</th>
                                <th>alamat</th>
                                <th>telepon</th>
                                <th>pegawai</th>
                                <th>created_at</th>
                                <th>update_at</th>
                            </tr>
                        </x-slot>
                        @php $num=1; @endphp
                        @foreach($cabangs as $cabang )
                        <tr>
                            <td>{{ $num++ }} </td>
                            <td>{{ $cabang->id_cabang}}</td>
                            <td>{{ $cabang->nama_cabang}}</td>
                            <td>{{ $cabang->alamat}}</td>
                            <td>{{ $cabang->telepon}}</td>
                            <td>{{ $cabang->pegawai}}</td>
                            <td>{{ $cabang->created_at}}</td>
                            <td>{{ $cabang->updated_at}}</td>
                            <td>
                                <img src="{{ asset('storage/Cabang/'.$cabang->toko)}}" width="100px"/>
                            </td>
                            <td>{{ $cabang->quantity }}</td>
                            <td>{{ $cabang->cabangshelf->code }}-{{ $cabang->cabangshelf->name }}</td>
                        </tr> 
                        @endforeach
                    </x-table>
                        </x-slot>
                </div>
            </div>
        </div>
    </div>