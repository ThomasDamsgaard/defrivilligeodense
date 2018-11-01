<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    <title></title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">

        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Navn</th>
              <th scope="col">Forening</th>
              <th scope="col">Opgave</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($data as $userName)
            <tr>
              <td>
                {{$userName->name}}
              </td>
              <td>
                {{$userName->organization}}
              </td>
              <td></td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <!-- Table -->

      </div>
    </div>

  </div>
</body>
</html>
