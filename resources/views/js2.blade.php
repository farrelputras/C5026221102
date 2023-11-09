<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function validateForm() {
        //let x = document.forms["myForm"]["fname"].value;
        var x = document.getElementById("fname");
        var nrp = document.getElementById("nrp");
        //bahwa yang dicek cukup yang invalid
        //lakukan per  jenis validasi, supaya user tahu salahnya apa
        if (x.value == "") {
          //isian kosong berarti textbox tidak diisi
          alert("Nama harus diisi");
          x.focus();
          return false; //function ini ada return value, bukan void
          //stop, tidak dikirim ke server
        }
        if (nrp.value == "") {
          //isian kosong berarti textbox tidak diisi
          alert("NRP harus diisi");
          nrp.focus();
          return false; //function ini ada return value, bukan void
          //stop, tidak dikirim ke server
        }
        if (nrp.value.substring(0,4) != "5026"){
          alert("Bukan mahasiswa SI");
          nrp.focus();
          return false;
        }
        if (nrp.value.substring(4,6) != "21" && nrp.value.substring(4,6) != "22"){
          alert("Bukan 21 ataupun 22");
          nrp.focus();
          return false;
        }
      }
    </script>
  </head>
  <body>
    <center>
      <h2>Pendaftaran Asisten Lab Sistem Informasi</h2>
    </center>

    <form
      name="myForm"
      action="https://www.its.ac.id/si/"
      onsubmit="return validateForm()"
      method="post"
    >
      <label for="fname">Name:</label>
      <input type="text" id="fname" name="fname" class="form-control" />
      <label for="nrp">NRP:</label>
      <input type="text" id="nrp" name="nrp" class="form-control" />

      <input type="submit" value="Submit" class="btn btn-primary" />
      <input type="reset" value="Hapus" class="btn btn-warning" />
    </form>
  </body>
</html>
