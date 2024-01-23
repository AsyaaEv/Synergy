<div class="w-full h-screen flex justify-center items-center">
    <div class="card container">
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
                  <td><img src="{{Storage::url($item->foto)}}" alt="" class="w-[5rem] h-[5rem]"></td>
                  <td>{{$item->nama}}</td>
                  <td>--</td>
                  <td>{{$item->mapel}}</td>
                  <td>{{$item->nip}}</td>
                  <td>{{$item->email}}</td>
                  <td>

                    <a href="{{url('/dashboard/guru/edit/' . $item->id)}}" class="decoration-transparent"><i class="ph-fill ph-pencil text-2xl text-blue-500"></i></a>
                    <i class="ph-fill ph-trash text-2xl text-red-500"></i>
                  </td>
                </tr>
                @empty
                    <div class="">Empty</div>
                @endforelse
            </tbody>
          </table>
    </div>
</div>
