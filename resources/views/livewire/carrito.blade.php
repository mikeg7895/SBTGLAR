<div>
        <header class="masthead">
            <div class="container">
            <div class="masthead-subheading">Carrito</div>
            </div>
        </header>
        <div class="untree_co-section before-footer-section" style="margin-top: 20px">
            <div class="container">
            <div class="row mb-5">
                <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table">
                    <thead>
                        <tr>
                        <th class="product-thumbnail">Imagen</th>
                        <th class="product-name">Producto</th>
                        <th class="product-price">Precio</th>
                        <th class="product-quantity">Cantidad</th>
                        <th class="product-total">Total</th>
                        <th class="product-remove">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($productos as $producto)
                            <tr>
                                <td class="product-thumbnail">
                                    <img src="{{asset('storage/images/'.$producto->imagen)}}" alt="Image" class="img-fluid" style="width: 180px">
                                </td>
                                <td class="product-name">
                                    <h2 class="h5 text-black">{{$producto->name}}</h2>
                                </td>
                                <td>${{$producto->precio}}</td>
                                <td>
                                    <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                    <div class="input-group-prepend">
                                        <button {{ $producto->pivot->cantidad == 0 ? 'disabled' : '' }} class="btn btn-outline-black decrease" type="button" wire:click="operar({{$producto->id}}, 0)">&minus;</button>
                                    </div>
                                    <input type="text" class="form-control text-center quantity-amount" value="{{$producto->pivot->cantidad}}" wire:keydown.enter.prevent='setCantidad($event.target.value, {{$producto->id}})' aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-black increase" type="button" wire:click="operar({{$producto->id}}, 1)">&plus;</button>
                                    </div>
                                    </div>
            
                                </td>
                                <td>${{ $producto->precio * $producto->pivot->cantidad }}</td>
                                <td><a wire:click="delete({{$producto->id}})" class="btn btn-black btn-sm">X</a></td>
                            </tr>
                        @empty
                            <p class="text-muted">No hay productos en el carrito</p>
                        @endforelse
                        
                    </tbody>
                    </table>
                </div>
                </form>
            </div>
    
            <div class="row">
                <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                    <a class="btn btn-black btn-sm btn-block" href="{{ route("shop") }}">Continua comprando</a>
                    </div>
                </div>
                </div>
                <div class="col-md-6 pl-5">
                <div class="row justify-content-end">
                    <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                        <h3 class="text-black h4 text-uppercase">Total de tus compras</h3>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6">
                        <span class="text-black">Total</span>
                        </div>
                        <div class="col-md-6 text-right">
                        <strong class="text-black">{{$total}}</strong>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-12">
                        <a class="btn btn-black btn-lg py-3 btn-block" href="{{route('checkout')}}">Comprar</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        
</div>
