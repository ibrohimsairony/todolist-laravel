<div>
    <h3 class="mb-5">Todolist Laravel</h3>
    <form  wire:submit="save" class="mb-4">
        <div class="mb-3">
            <label for="title" class="mb-3">Todo</label>
            <input type="text" wire:model="title" id="title" class="form-control shadow-none">
        </div>
        <button type="submit" class="btn btn-primary">{{$isEdit ? "Edit Todo": "Tambah"}}</button>
    </form>

    <hr class="mb-4">

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Title</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $key => $item)
                <tr>
                    <td>{{++$key}}</td>
                    <td class="{{$item->checked ? "text-decoration-line-through text-secondary" : ""}}">{{$item->title}}</td>
                    <td class="d-flex gap-1">
                        <button type="button" wire:click="checked({{$item->id}},{{$item->checked}})" class="btn btn-secondary btn-sm w-5">
                            {{$item->checked ? "Hapus Tanda" : "Tandai"}}
                        </button>
                        <button type="button" wire:click="edit({{$item->id}})" class="btn btn-warning btn-sm">
                            Edit
                        </button>
                        <button type="button" wire:click="delete({{$item->id}})" wire:confirm="apakah anda yakin?" class="btn btn-danger btn-sm">
                            delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
