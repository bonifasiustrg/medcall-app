<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Emergency Call</title>
</head>
<body>
  <div id="emergency-call-screen">
    <div id="emergency-call-header">
      <h1>Emergency Call</h1>
    </div>
    <div id="emergency-call-body">
      <p>Silahkan menekan tombol WhatsApp atau tombol telpon untuk melakukan panggilan emergency.</p>
      <div id="emergency-call-buttons">
        <button id="emergency-call-whatsapp">WhatsApp</button>
        <button id="emergency-call-phone">Telpon</button>
      </div>
    </div>
  </div>

  <script>
    const emergencyCallNumber = "085694532122";

    document.getElementById("emergency-call-whatsapp").addEventListener("click", () => {
      // Buka aplikasi WhatsApp dengan nomor darurat
      window.open("https://wa.me/" + emergencyCallNumber);
    });

    document.getElementById("emergency-call-phone").addEventListener("click", () => {
      // Lakukan panggilan telepon ke nomor darurat
      window.open("tel:" + emergencyCallNumber);
    });
  </script>
</body>
</html>
