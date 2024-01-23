<div class="w-full h-screen flex justify-center items-center">
    <div class="card container">
        <div class="w-full h-auto mt-2 flex justify-end">
            <div class="alert @if (!empty(session('alert'))) alert-{{ session('alert') }} @else d-none @endif">
                @if (!empty(session('alert')))
                    {{ session('msg') }}
                @endif
            </div>
            <a href="{{ url('/dashboard/guru/add') }}">
                <button class="btn btn-primary">tambah Guru</button>
            </a>
        </div>
        <table class="table table-striped">
            <thead>
                @if (!$guru)
                    <tr class="hidden">
                        <th scope="col">#ID</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Mapel</th>
                        <th scope="col">Nip</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                @else
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Mapel</th>
                        <th scope="col">Nip</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                @endif
            </thead>
            <tbody>
                @forelse ($guru as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>
                            <img src="{{ Storage::url(($item->foto) ? $item->foto : 'no_profile.webp') }}" alt="" class="w-[5rem] h-[5rem]">
                        </td>
                        
                        <td>{{ $item->nama }}</td>
                        <td>{{$item->kode}}</td>
                        <td>{{ $item->mapel }}</td>
                        <td>{{ $item->nip }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a href="{{ url('/dashboard/guru/edit/' . $item->id) }}" class="decoration-transparent"><i
                                    class="ph-fill ph-pencil text-2xl text-blue-500"></i></a>
                            <i class="ph-fill ph-trash text-2xl text-red-500 hover:cursor-pointer" data-bs-toggle="modal" data-bs-target="#deletekategori{{$item->id}}"></i>
                        </td>
                        <div class="modal fade " id="deletekategori{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Guru</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus Guru <b>{{$item->nama}}</b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary bg-slate-600" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" wire:click='hapusGuru({{$item->id}})' data-bs-dismiss="modal" class="btn btn-primary bg-blue-950">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @empty
                    <div class="">Empty</div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
