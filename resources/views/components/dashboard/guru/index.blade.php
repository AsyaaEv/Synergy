<div class="w-full h-screen mt-2 px-2 sm:px-0 transition-all">
    <div class="w-full h-full rounded-[10px] sm:pl-[15rem] overflow-auto pb-[5rem] table-responsive">
        <div class="w-full h-auto mb-2 flex justify-between items-center">
            <div class="w-full h-auto">
                <div class="text-xl text-white font-bold">Dashboard</div>
                <div class="text-white/50">Guru Produktif PPLG</div>
            </div>
            <div class="px-2  py-3 rounded-[10px] flex justify-between items-center absolute transition-all  @if (!empty(session('alert'))) {{ session('alert') }}  @else d-none @endif" id="alert">
                <div class="w-full h-auto flex justify-center items-center gap-2 text-secD">
                    <i class="ph-fill @if (!empty(session('alert'))) ph-{{session('icon')}} text-xl text-{{session('iconColor')}} @endif"></i>
                    @if (!empty(session('alert')))
                    {{ session('msg') }}
                @endif
                </div>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="toggleAlert()"></button>
            </div>
            <div class="w-full h-auto flex justify-end px-2 gap-2">
                <div class="w-auto h-8 px-2 py-2 bg-white rounded-[10px] flex justify-center items-center decoration-transparent">
                    <i class="ph-bold ph-magnifying-glass text-secD text-2xl"></i>
                    <input type="text" placeholder="Search Guru" class="outline-none text-medium" wire:model.live='search'>
                </div>
                <a href="/dashboard/guru/add" class="w-[2rem] lg:w-auto h-8 px-2 py-2 bg-white rounded-[10px] flex justify-center items-center decoration-transparent">
                    <i class="ph-fill ph-student text-secD text-2xl"></i>
                    <div class="text-secD font-semibold hidden lg:block">Tambah Guru</div>
                </a>
            </div>
        </div>
        <table class="table table-striped table-dark table-sm align-middle">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Kode</th>
                <th scope="col">Mapel</th>
                <th scope="col">NIP</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($guru as $item)
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td><img src="{{Storage::url($item->foto)}}" class="w-[3rem] h-[3rem] object-cover" alt=""></td>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->kode}}</td>
                  <td>{{$item->mapel}}</td>
                  <td>{{$item->nip}}</td>
                  <td>{{$item->email}}</td>
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
                    <div class="w-full h-full flex justify-center mt-[5rem]">
                        <div class="w-[25rem] h-[10rem] bg-primaryD rounded-[10px] border-[1px] flex justify-center items-center gap-2">
                            <i class="ph-fill ph-warning text-5xl text-white"></i>
                            <div class="text-xl text-white font-medium">Data Guru Tidak Ada!</div>
                        </div>
                    </div>
                @endforelse
            </tbody>
          </table>
    </div>
</div>

<script>
   const alert = document.getElementById('alert')

   function toggleAlert(){
    alert.classList.add('-translate-x-[20rem]')
   }
</script>