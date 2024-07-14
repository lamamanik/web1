<?php require "connect.php"; ?>

<!DOCTYPE html>
<html>

<head>
  <title>TRAVEL|Dashboardd</title>
  <link rel="stylesheet" type="text/css" href="dasboard.css" />
</head>

<body>
  <div class="container">
    <div class="sidebar">
      <div class="logo">
        <img src="images/mountain.png" alt="" />
        <h3>LessGO</h3>
      </div>
      <ul>
        <li>
          <button class="select-button" onclick="Opensection('dashboard')">
            Dashboard
          </button>
        </li>

        <li>
          <button class="select-button" onclick="Opensection('widget')">
            Contents test
          </button>
        </li>
        <li>
          <button class="select-button" onclick="Opensection('reports')">
            Reports
          </button>
        </li>
        <li>
          <button class="select-button" onclick="Opensection('setting')">
            setting
          </button>
        </li>
      </ul>
    </div>

    <!-- ******************************************************************************************************************************* -->

    <div class="section" id="dashboard" style="display: none">
      <div>
        <h3>UPDATE FOR WEBSITE</h3>
      </div>

      <div class="form-container">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required />

          <input type="file" name="photo" />

          <label for="description">Description:</label>
          <textarea id="description" name="description" rows="5" required></textarea>

          <input type="submit" value="Submit" />
        </form>
      </div>
    </div>

    <!-- *************************************************************************************************************************************** -->

    <div class="section" id="widget" style="display: relative">
      <h2>contents on website</h2>

      <div class="datatable">
        <table>
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">filepath</th>
              <th scope="col">description</th>
              <th scope="col">operation</th>

            </tr>
          </thead>
          <tbody>
            <?php


            $sql = "SELECT * FROM `photos`";

            $result = mysqli_query($conn, $sql);

            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['file_name'];
                $filepath = $row['file_path'];
                $description = $row['description'];

                echo '

    <tr>
    <td scope = "row">' . $id . '</td>
    <td scope = "row">' . $name . '</td>
    <td scope = "row">' . $filepath . '</td>
    <td scope = "row">' . $description . '</td>
    <td scope ="row"> <button class="btn"><a  href="delete.php?deleteid=' . $id . '">Delete</a></button></td>
    </tr>

    ';
              }
            }
            ?>
          </tbody>
        </table>

      </div>

    </div>

    <!-- ****************************************************************************************************************************************************** -->

    <div class="section" id="reports" style="display: none">
      <h2>REports</h2>
      <p>This is the reports.</p>
    </div>

    <div class="section" id="setting" style="display: none">
      <h2>setting</h2>
      <p>This is the setting</p>
    </div>
  </div>
  <script src="index.js
    "></script>
</body>

</html>