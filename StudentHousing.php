<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Housing</title>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/Booking.css">
   <link rel="stylesheet" href="css/StudentHousing.css">
</head>
<body>
  <?php include 'includes/header.php'; ?> 
  <div class="student-housing-container">
    <img src="images/image5.jpg" alt="Student Housing" class="banner">

    <h1>Select Governorate</h1>
    <form id="housingForm">
      <!-- Governorates Dropdown -->
      <select name="governorate" id="governorate" onchange="showAreas()" required>
        <option value="">-- Select Governorate --</option>
        <option value="cairo">Cairo</option>
        <option value="giza">Giza</option>
        <option value="alex">Alexandria</option>
      </select>

      <!-- Areas Dropdown -->
      <div id="areas-box" style="margin-top:15px; display:none;">
        <h2>Select Area</h2>
        <select name="area" id="area" required></select>
      </div>

      <button type="button" onclick="goToDetails()">Next</button>
    </form>
  </div>

  <script>
    function showAreas() {
      const gov = document.getElementById("governorate").value;
      const areaSelect = document.getElementById("area");
      const areasBox = document.getElementById("areas-box");

      areaSelect.innerHTML = ""; 

      if (gov === "cairo") {
        areasBox.style.display = "block";
        areaSelect.innerHTML += "<option value='nasr_city'>Nasr City</option>";
        areaSelect.innerHTML += "<option value='heliopolis'>Heliopolis</option>";
        areaSelect.innerHTML += "<option value='sheraton'>Sheraton</option>";
        areaSelect.innerHTML += "<option value='shoubra'>Shoubra</option>";
      } else if (gov === "giza") {
        areasBox.style.display = "block";
        areaSelect.innerHTML += "<option value='dokki'>Dokki</option>";
        areaSelect.innerHTML += "<option value='mohandessin'>Mohandessin</option>";
        areaSelect.innerHTML += "<option value='haram'>Haram</option>";
      } else if (gov === "alex") {
        areasBox.style.display = "block";
        areaSelect.innerHTML += "<option value='smouha'>Smouha</option>";
        areaSelect.innerHTML += "<option value='stanley'>Stanley</option>";
        areaSelect.innerHTML += "<option value='agamy'>Agamy</option>";
      } else {
        areasBox.style.display = "none";
      }
    }

    function goToDetails() {
      const gov = document.getElementById("governorate").value;
      const area = document.getElementById("area").value;

      if (gov === "cairo" && area === "sheraton") {
        window.location.href = "details-cairo.php";
      } else if (gov === "alex" && area === "agamy") {
        window.location.href = "details-alex.php";
      } else if (gov === "giza" && area === "mohandessin") {
        window.location.href = "details-giza.php";
      } else {
        alert("No details page available for this selection yet.");
      }
    }
  </script>
  <?php include 'includes/footer.php'; ?>
</body>

</html>
