<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/admin.css">
    <title>ADMIN</title>
  </head>
  <body>
    <div id="admin-form">
    <h1>ADMIN</h1>
    <form action="admin-submit.php" method="post">
        <div class="col-md-3">
      <label for="action" class="form-label">Pasirinkite veiksmą:</label>
      <select name="action" id="action" class="form-select">
        <option selected>Pasirinkti</option>
        <option value="add">Pridėti</option>
        <option value="update">Atnaujinti</option>
        <option value="delete">Ištrinti</option>
      </select>
    </div>
    <div class="col-md6">
      <label for="id" class="form-label">ID:</label>
      <input type="text" name="id" id="id" class="form-control" required>
</div>
      <label for="name" class="form-label">Produkto pavadinimas:</label>
      <input type="text" name="name" id="name" class="form-control">
      <br>
      <label for="price" class="form-label">Produkto kaina:</label>
      <input type="text" name="price" id="price" class="form-control">
      <br>
      <label for="description" class="form-label">Produkto aprašymas:</label>
      <textarea name="description" id="description" class="form-control"></textarea>
      <br>
      <label for="image_url" class="form-label">Produkto nuotraukos URL:</label>
      <input type="text" name="image_url" id="image_url" class="form-control" placeholder="/assets/images/#######.jpg">
      <br>
      <input type="submit" value="Pradėti veiksmą" class="btn btn-outline-success">
    </form>
</div>
  </body>
</html>
