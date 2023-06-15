@csrf


<label for="uppercase text-gray-700 text-xs">Título</label>
<span class="text-xs text-red-600">@error('name') {{ $message }} @enderror</span>

<input type="text" name="name" class="rounded border-gray-200 w-full mb-4" value="{{ old('name',  $product->name) }}">

<label for="uppercase text-gray-700 text-xs">Sabor</label>
<span class="text-xs text-red-600">@error('flavor') {{ $message }} @enderror</span>

<input type="text" name="flavor" class="rounded border-gray-200 w-full mb-4" value="{{ old('flavor',  $product->flavor) }}">

<label for="uppercase text-gray-700 text-xs">Precio</label>
<span class="text-xs text-red-600">@error('price') {{ $message }} @enderror</span>

<input type="number" name="price" class="rounded border-gray-200 w-full mb-4" value="{{ old('price',  $product->price) }}">

<label for="uppercase text-gray-700 text-xs">Contenido</label>
<span class="text-xs text-red-600">@error('description') {{ $message }} @enderror</span>

<textarea name="description" id="" rows="5" class="rounded border-gray-200 w-full mb-4">{{ old('description', $product->description) }}</textarea>

<label for="uppercase text-gray-700 text-xs">Path Imagen</label>
<span class="text-xs text-red-600">@error('image_path') {{ $message }} @enderror</span>

<input type="text" name="image_path" class="rounded border-gray-200 w-full mb-4" value="{{ old('image_path',  $product->image_path) }}">

<div class="flex justify-between items-center">
    <a href="{{ route('products.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>