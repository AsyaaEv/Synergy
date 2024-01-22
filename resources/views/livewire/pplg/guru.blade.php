<div class="w-full h-screen flex justify-center items-center">
    <div>
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
    </form>

</div>
