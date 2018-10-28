<!DOCTYPE html>
<html>
  <head>
    <title>Title</title>
      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
        <div class="row">
            <form method="get" action="{{ route('index') }}">
                <div class="col-sm-3">
                    <input type="text" value="{{ request()->get('weight') ?? null }}" name="weight" class="form-control" placeholder="Enter Weight">
                </div>

                <div class="col-sm-3">
                    <input type="text" value="{{ request()->get('sender') ?? null }}" name="sender" class="form-control" placeholder="Enter Sender">
                </div>

                <div class="col-sm-3">
                    <input type="text" value="{{ request()->get('recipient') ?? null }}" name="recipient" class="form-control" placeholder="Enter Recipient">
                </div>

                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Price</th>
                    <th scope="col">Weight From</th>
                    <th scope="col">Weight To</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prices as $price)
                    <tr>
                        <th scope="row">{{ $price->id }}</th>
                        <td>{{ $price->price }}</td>
                        <td>{{ $price->weight_from }}</td>
                        <td>{{ $price->weight_to }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
<footer>
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</footer>
</html>
