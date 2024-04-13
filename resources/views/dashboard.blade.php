<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layout.layout')
    @section('dashboard')

    <div class="main-title">
        <h2>DASHBOARD</h2>
      </div>

      <div class="main-cards">

        <div class="card">
          <div class="card-inner">
            <h3>PRODUCTS</h3>
            <span class="material-icons-outlined">inventory_2</span>
          </div>
          <h1>249</h1>
        </div>

        <div class="card">
          <div class="card-inner">
            <h3>CATEGORIES</h3>
            <span class="material-icons-outlined">category</span>
          </div>
          <h1>25</h1>
        </div>

        <div class="card">
          <div class="card-inner">
            <h3>CUSTOMERS</h3>
            <span class="material-icons-outlined">groups</span>
          </div>
          <h1>1500</h1>
        </div>

        <div class="card">
          <div class="card-inner">
            <h3>ALERTS</h3>
            <span class="material-icons-outlined">notification_important</span>
          </div>
          <h1>56</h1>
        </div>

      </div>

      <div class="charts">

        <div class="charts-card">
          <h2 class="chart-title">Top 5 Products</h2>
          <div id="bar-chart"></div>
        </div>

        <div class="charts-card">
          <h2 class="chart-title">Purchase and Sales Orders</h2>
          <div id="area-chart"></div>
        </div>

      </div>
    @endsection
</body>
</html>
