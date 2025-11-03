<html>
    <head>
        <title>Contoh Form dengan PHP dan JQuery</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form id="myForm">
            <label for="buah">Pilih Buah:</label>
            <select id="buah" name="buah" required>
                <option value="apel">Apel</option>
                <option value="pisang">Pisang</option>
                <option value="jeruk">Jeruk</option>
                <option value="mangga">Mangga</option>
            </select><br>

            <label>Pilih Warna Favorit:</label><br>
            <input type="checkbox" name="warna[]" value="merah"> Merah<br>
            <input type="checkbox" name="warna[]" value="biru"> Biru<br>
            <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

            <br>

            <label>Pilih Jenis Kelamin:</label>
            <br>
            <input type="radio" name="gender" value="pria" required> Pria <br>
            <input type="radio" name="gender" value="wanita" required> Wanita <br><br>

            <input type="submit" value="Submit">
        </form>
        <div id="hasil">

        </div>

        <script>
            $(document).ready(function() {
                $('#myForm').on('submit', function(event) {
                    event.preventDefault(); // Mencegah form submit secara default

                    var formData = $("#myForm").serialize(); // Mengambil data form

                    $.ajax({
                        url: 'proses_lanjut.php',
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            $('#hasil').html(response); // Menampilkan hasil di div dengan id "hasil"
                        }
                    });
                });
            });
        </script>
    </body>
</html>