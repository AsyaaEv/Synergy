<div class="w-full h-screen flex justify-center items-center">
    <div class="w-full border-2 h-full container bg-gray-100 gap-[10px] ">
        <div class="w-full h-auto border-2 my-[2rem] flex">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Guru
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <table class="table table-striped">
            <thead>
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
            </thead>
            <tbody>
                @forelse ($guru as $item)
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td><img src="{{Storage::url($item->foto)}}" alt="" class="w-[2rem] h-[2rem]"></td>
                  <td>{{$item->nama}}</td>
                  <td>00</td>
                  <td>{{$item->mapel}}</td>
                  <td>{{$item->nip}}</td>
                  <td>{{$item->email}}</td>
                  <td></td>
                </tr>
                @empty
                    <div class="">Not FOund</div>
                @endforelse
            </tbody>
          </table>
    </div>
    {{-- <div>
        @if (session()->has('msg'))
            <div class="alert @if (!empty(session('alert'))) alert-{{ session('alert') }} @else d-none @endif"">
                @if (!empty(session('alert')))
                    {{ session('msg') }} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                @endif
            </div>
        @endif
    </div>
    <form class="" wire:submit.prevent='save'>
        <div class="input-group mb-3">
            <input type="text" class="form-control" wire:model='nama' placeholder="Username" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" wire:model='mapel' placeholder="Mapel" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" wire:model='nip' placeholder="Nip" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" wire:model='email' placeholder="email" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" wire:model='foto' aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form> --}}

</div>
