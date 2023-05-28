<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../styles/./services.css">
  <title>Sharadiya</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="shortcut icon" href="../Sharadiya/Assets/images/favicon.png" type="image/x-icon" sizes="16x16 32x32" />
</head>

<body id="body">
  <!-- Banner/Hero -->
  <nav class="navbar navbar-expand-lg nav_design">
    <div class="container-fluid">
      <a class="navbar-brand" href="./welcome.php">Sharadiya</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">

          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="./welcome.php">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="./upload-page.php">Upload</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="./services-page.php">Services</a>
          </li>

          <li class="nav-item mx-2">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <a href="../Sharadiya/./Assets/PHP/logout.php" class="log" style="text-decoration: none; color: white">Log out</a>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header  -->
  <span class="header center">
    <p id="aa">List Services</p>
  </span>

  <!-- FORM -->
  <div class="center">
    <div class="form-main-container">
      <form action="./services.php">
        <p class="upload">List Services.</p>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Name" required /><br /><br />

        <label for="number">Contact Number:</label>
        <input type="text" id="number" name="number" placeholder="+91" pattern="[6-9]{1}[0-9]{9}" required /><br /><br />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Email" required /><br /><br />

        <div class="flex">
          <label for="services">Looking for:</label>
          <select class="form-select" aria-label="Default select example" id="sel" name="service" required>
            <option selected>Select Services</option>
            <option value="purohit">Purohit</option>
            <option value="murtikar">Murtikar</option>
            <option value="pandal-decorators">Pandal Decorators</option>
            <option value="dhakis">Dhakis</option>
            <option value="volunteer">Volunteer</option>
          </select>
        </div>
        <br />

        <label for="email">Joing Date:</label>
        <input type="date" name="date" />

        <div class="upl1">
          <input type="submit" value="UPLOAD" id="submit" />
        </div>
      </form>
    </div>
  </div>

  <script>
    const submitBtn = document.getElementById("submit");
    const submitBtnhovered = document.getElementById("submit").value;

    submitBtn.onmouseover = function() {
      submitBtn.value = "CONFIRM UPLOAD";
    };
    submitBtn.onmouseout = function() {
      submitBtn.value = submitBtnhovered;
    };
  </script>
  <script src=".././scripts/./main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>