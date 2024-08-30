<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Pagination Laravel</title>
</head>

<body>
    <div class="container">
        <h1>Customers</h1>
        <div class="card">
            <div class="card-header">
                <form class="row row-cols-lg-auto g-1">
                    <div class="col">
                        <input class="form-control" type="text" name="q" value="{{ $q }}" placeholder="Search here..." />
                    </div>
                    <div class="col">
                        <button class="btn btn-success">Search</button>
                    </div>
                </form>
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered table-striped table-hover m-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>Contact Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Postal Code</th>
                            <th>Country</th>
                        </tr>
                    </thead>
                    <?php
                    $i = $customers->firstItem();
                    ?>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $customer->customer_name }}</td>
                        <td>{{ $customer->contact_name }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->city }}</td>
                        <td>{{ $customer->postal_code }}</td>
                        <td>{{ $customer->country }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @if($customers->hasPages())
            <div class="card-footer">
                {{ $customers->links() }}
            </div>
            @endif
        </div>
    </div>
</body>

</html>