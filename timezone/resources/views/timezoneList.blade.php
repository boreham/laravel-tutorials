<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Generate Timezone List in Dropdown List</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"/>
</head>
<body>
  
  <div class="container mt-4">
    <h2>Laravel Generate Timezone List in Dropdown List</h2>
  
    <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Select Timezone:</label>
  
        <select class="form-control mb-2" name="timezone_id">
            <option value="">Please select...</option>
            @foreach($timezones as $timezone)
            <option value="{{ $timezone->id }}">{{ $timezone->name }} ({{ $timezone->offset }})</option>
            @endforeach
        </select>
  
      </div>
    </form>
  </div>
  
</body>
</html>