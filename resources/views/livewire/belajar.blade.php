<div>
    <div class="mb-3">
        {{-- <input type="text" class="form-control" wire:model="name"> --}}
        {{-- <textarea class="form-control" wire:model="name"></textarea> --}}
        {{-- <input type="radio" name="jenis-kelamin" value="senang" wire:model="name">Senang
        <input type="radio" name="jenis-kelamin" value="sangsen" wire:model="name">Senang Sangat --}}
    
        {{-- <select class="form-select" wire:model="name">
            <option hidden>Pilih Jenis Kelamin</option>
            <option value="laki">Laki</option>
            <option value="perempuan">Perempuan</option>
        </select> --}}

        <input 
            @if ($show_password == "show")
                type="text" 
            @else
                type="password"
            @endif
        class="form-control" wire:model="name">

        <label for="">Show password</label>
        <input type="checkbox" wire:model="show_password" value="show">
    </div>
    {{-- <h3>Hi, my name is {{$name}}</h3> --}}
</div>
