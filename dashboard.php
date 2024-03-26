<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stock Management Dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* Additional styles can be added here */
  </style>
</head>
<body>

<div class="container">
  <h2 class="mt-5 mb-4">Stock Management Dashboard</h2>
  
  <!-- Stock Summary -->
  <div class="card mb-4">
    <div class="card-header">
      Stock Summary
    </div>
    <div class="card-body">
      <p>Total Products: <span id="total-products">100</span></p>
      <p>Total Stock Value: $<span id="total-stock-value">10000</span></p>
      <!-- Additional summary metrics can be added here -->
    </div>
  </div>
  
  <!-- Category-wise Distribution -->
  <!-- <div class="card mb-4">
    <div class="card-header">
      Category-wise Distribution
    </div>
    <div class="card-body">
      <canvas id="category-chart"></canvas>
    </div>
  </div> -->
  
  <!-- Recent Stock Activity -->
  <div class="card">
    <div class="card-header">
      Recent Stock Activity
    </div>
    <div class="card-body">
      <ul class="list-group">
        <li class="list-group-item">Product A added <span class="badge badge-success">+10</span></li>
        <li class="list-group-item">Product B sold <span class="badge badge-danger">-5</span></li>
        <!-- Additional activity items can be added here -->
      </ul>
    </div>
  </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Chart.js for charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
  // Sample data for category-wise distribution
  var categoryData = {
    labels: ['Electronics', 'Clothing', 'Groceries'],
    datasets: [{
      label: 'Category Distribution',
      data: [30, 40, 30], // Sample data, you can replace it with your actual data
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
      ],
      borderWidth: 1
    }]
  };

  // Initialize the category chart
  var ctx = document.getElementById('category-chart').getContext('2d');
  var categoryChart = new Chart(ctx, {
    type: 'bar',
    data: categoryData,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

</body>
</html>
