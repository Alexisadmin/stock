<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stock Management Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2 class="mt-5">Stock Management Form</h2>
  <form>
    <div class="form-group">
      <label for="product-name">Product Name</label>
      <input type="text" class="form-control" id="product-name" placeholder="Enter product name" required>
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <select class="form-control" id="category" required>
        <option value="">Select category</option>
        <option value="electronics">Electronics</option>
        <option value="clothing">Clothing</option>
        <option value="groceries">Groceries</option>
        <!-- Add more categories as needed -->
      </select>
    </div>
    <div class="form-group">
      <label for="quantity">Quantity</label>
      <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" required>
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" class="form-control" id="price" placeholder="Enter price" required>
    </div>
    <div class="form-group">
      <label for="supplier">Supplier</label>
      <input type="text" class="form-control" id="supplier" placeholder="Enter supplier name" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
