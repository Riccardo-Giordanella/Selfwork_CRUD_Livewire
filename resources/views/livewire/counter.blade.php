<div>
    <section class="container my-4">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <h2>Live Component</h2>
            </div>
        </div>
    </section>

    <section class="d-flex justify-content-center flex-column align-items-center">
        <div class="display-2">
            {{$count}}
        </div>
    </section>
    <div class="d-flex justify-content-center">
        <button class="btn btn-primary" wire:click="increment">+1</button>
        <button class="btn btn-danger" wire:click="decrement">-1</button>
        <button class="btn btn-info" wire:click="incrementByNum({{$number}})">+{{$number}}</button>
        <button class="btn btn-warning" wire:click="decrementByNum({{$number}})">-{{$number}}</button>
    </div>
</div>
