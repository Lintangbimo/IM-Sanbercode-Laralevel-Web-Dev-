<form action="/products" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name">
    <input type="number" name="price">
    <input type="number" name="stock">

    <input type="file" name="image">

    <button type="submit">Simpan</button>
</form>