<html>

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h2>Form Input dengan Validasi</h2>
    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" name="submit" value="Submit">
    </form>
    <div id="hasil">

    </div>
    <script>
        $(document).ready(function() {
            $('#myForm').on('submit',function(event) {
                event.preventDefault(); // Mencegah form submit secara default
                var email = $('#email').val();
                var nama = $('#nama').val();
                var password = $('#password').val();
                var valid = true;
                if (nama === '') {
                    $('#nama-error').text('Nama harus diisi');
                    valid = false;
                } else {
                    $('#nama-error').text('');
                }
                if (email === '') {
                    $('#email-error').text('Email harus diisi');
                    valid = false;
                } else {
                    $('#email-error').text('');
                }
                if (password.length < 8) {
                    $('#password-error').text('Password harus minimal 8 karakter');
                    valid = false;
                } else {
                    $('#password-error').text('');
                }
                if (!valid) {
                    event.preventDefault(); // Hentikan eksekusi jika ada kesalahan validasi
                }
                
                $.ajax({
                    url: 'proses_validasi.php',
                    type: 'POST',
                    data: { nama: nama, email: email, password: password },
                    success: function(response) {
                        $('#hasil').html(response); // Menampilkan hasil di div dengan id "hasil"
                    }
                });
            });
        });
    </script>
</body>

</html>