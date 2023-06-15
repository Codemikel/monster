@csrf


<label for="uppercase text-gray-700 text-xs">Estado</label>
<span class="text-xs text-red-600">@error('status') {{ $message }} @enderror</span>

<input type="text" name="status" class="rounded border-gray-200 w-full mb-4" value="{{ old('status',  $product->status) }}">

<label for="uppercase text-gray-700 text-xs">Precio</label>
<span class="text-xs text-red-600">@error('quantity') {{ $message }} @enderror</span>

<input type="number" name="quantity" class="rounded border-gray-200 w-full mb-4" value="{{ old('quantity',  $product->quantity) }}">

<div class="flex justify-between items-center">
    <a href="{{ route('orders.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>