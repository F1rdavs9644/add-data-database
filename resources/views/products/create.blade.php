<form action="{{ route('products.store') }}" method="POST">
    @csrf
    @error('title')
        <p style="color: red;">{{ $message }}</p>
    @enderror
    <input type="text" name="title" placeholder="Title">
    @error('description')
        <p style="color: red;">{{ $message }}</p>
    @enderror
    <input type="text" name="description" placeholder="Description">
    @error('price')
        <p style="color: red;">{{ $message }}</p>
    @enderror
    <input type="number" name="price" placeholder="Price">
    @error('discount')
        <p style="color: red;">{{ $message }}</p>
    @enderror
    <input type="number" name="discount"placeholder="Discount">
    <button type="submit">Submit</button>
</form>
