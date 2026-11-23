<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Profil Mahasiswa</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container mt-5">
        <div class="card mx-auto shadow" style="max-width: 400px;">
            <div class="card-header bg-primary text-white text-center">
                <h4>Profil Mahasiswa</h4>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                    <img src="https://ui-avatars.com/api/?name=Putra+Arreval&background=random&size=150" class="rounded-circle img-thumbnail" alt="Profile Image">
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>Putra Arreval Rasyanda</td>
                        </tr>
                        <tr>
                            <th>Program Studi</th>
                            <td>Sistem Informasi</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>IS-08-04</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center mt-4">
                    <a href="https://contoh.ac.id/portofolio" class="btn btn-outline-primary" target="_blank">Lihat Portofolio</a>
                    <a href="{{ url('/routing') }}" class="btn btn-secondary">Menu Utama</a>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
