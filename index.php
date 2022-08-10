<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Searching demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">


  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto mt-5">

        <h3 class="mb-4">Live Data Search in PHP using AJAX (Vanilla JavaScript)</h3>

        <div class="mb-3">
          <label class="form-label fw-bold">Search</label>
          <input type="text" class="form-control" oninput="load_data(this.value)" placeholder="Type anything...">
        </div>

        <table class="table table-light table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>VALUES</th>
            </tr>
          </thead>
          <tbody id="table_data">
          </tbody>
        </table>

      </div>
    </div>
  </div>


  <script>

    function load_data(search='')
    {
      let xhr = new XMLHttpRequest();

      xhr.open("GET","records.php?search="+search,true);

      xhr.onprogress = function(){
        document.getElementById('table_data').innerHTML = `<div class="spinner-border" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>`;
      }

      xhr.onload = function(){
        document.getElementById('table_data').innerHTML = xhr.responseText;
      }

      xhr.send();
    }

    load_data();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>