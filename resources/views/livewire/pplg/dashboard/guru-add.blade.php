<div class="w-full h-screen flex justify-center items-center">
    <div class="card container">
        <button class="btn btn-info text-black" disabled>Tambah Guru</button>
        
        <form action="" class="mt-4" enctype="multipart/form-data" wire:submit.prevent='save'>
            <div class="input-group mb-3">
                <input type="text" class="form-control  @error('nama') is-invalid @enderror" placeholder="Nama" wire:model='nama' aria-label="Username" aria-describedby="basic-addon1">
                <div class="invalid-feedback">
                    @error('nama')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control  @error('nama') is-invalid @enderror" placeholder="Kode Guru" wire:model='kode' aria-label="Username" aria-describedby="basic-addon1">
                <div class="invalid-feedback">
                    @error('kode')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control  @error('mapel') is-invalid @enderror" placeholder="Mapel" wire:model='mapel' aria-label="Username" aria-describedby="basic-addon1">
                <div class="invalid-feedback">
                    @error('mapel')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nip" wire:model='nip' aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Email" wire:model='email' aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" wire:model='foto' aria-label="Username" aria-describedby="basic-addon1">
            </div>
            @if($foto)
                    <img src="{{ $foto->temporaryUrl()}}" alt="" class="mt-3 object-cover" style="width: 100px; height:100px;">
                @endif
            <button class="btn btn-primary my-2" >Tambah</button>
        </form>
    </div>
</div>
