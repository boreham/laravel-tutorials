<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter and Join Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <h1>Order Details</h1>
        <div class="card">
            <div class="card-header">
                <form class="row row-cols-lg-auto g-1">
                    <div class="col">
                        <select class="form-select" name="category_id">
                            <option value="">All Category</option>
                            @foreach($categories as $category)
                            @if($category->category_id==$category_id)
                            <option value="{{ $category->category_id }}" selected>{{ $category->category_name }}</option>
                            @else
                            <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class=" col">
                        <div class="input-group">
                            <input class="form-control" type="date" name="start" value="{{ $start }}" />
                            <input class="form-control" type="date" name="end" value="{{ $end }}" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <select class="form-select" name="total_operator" onchange="hide_total_value_end()">
                                <option value="">All Total</option>
                                @foreach($operators as $key => $val)
                                @if($key==$total_operator)
                                <option value="{{ $key }}" selected>Total {{ $val }}</option>
                                @else
                                <option value="{{ $key }}">Total {{ $val }}</option>
                                @endif
                                @endforeach
                            </select>
                            <input class="form-control" type="text" name="total_value" value="{{ $total_value }}" size="4" />
                            <input class="form-control" type="text" name="total_value_end" value="{{ $total_value_end }}" size="4" />
                        </div>
                    </div>
                    <div class=" col">
                        <input class="form-control" type="text" name="q" value="{{ $q }}" placeholder="Search here..." />
                    </div>
                    <div class="col">
                        <button class="btn btn-success">Search</button>
                    </div>
                </form>
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered table-striped table-hover table-sm m-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>OrderID</th>
                            <th>OrderDate</th>
                            <th>CustomerID</th>
                            <th>CustomerName</th>
                            <th>ProductID</th>
                            <th>ProductName</th>
                            <th>CategoryID</th>
                            <th>CategoryName</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <?php
                    $i = $order_details->firstItem();
                    ?>
                    @foreach($order_details as $order_detail)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $order_detail->order_id }}</td>
                        <td>{{ date('M d Y', strtotime($order_detail->order_date)) }}</td>
                        <td>{{ $order_detail->customer_id }}</td>
                        <td>{{ $order_detail->customer_name }}</td>
                        <td>{{ $order_detail->product_id }}</td>
                        <td>{{ $order_detail->product_name }}</td>
                        <td>{{ $order_detail->category_id }}</td>
                        <td>{{ $order_detail->category_name }}</td>
                        <td>{{ $order_detail->quantity }}</td>
                        <td>{{ $order_detail->price }}</td>
                        <td>{{ $order_detail->total }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @if($order_details->hasPages())
            <div class="card-footer">
                {{ $order_details->links() }}
            </div>
            @endif
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function() {
            hide_total_value_end();
        })

        function hide_total_value_end() {
            if ($('select[name="total_operator"]').val() == 'between')
                $('input[name="total_value_end"]').show();
            else
                $('input[name="total_value_end"]').hide();
        }
    </script>
</body>

</html>