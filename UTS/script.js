// array kosong
let daftarMahasiswa = [];

        function tambahMahasiswa() {
            // ambil data
            const nama = document.getElementById('nama').value.trim();
            const nim = document.getElementById('nim').value.trim();
            const semester = document.getElementById('semester').value.trim();
            const prodi = document.getElementById('prodi').value;
            const email = document.getElementById('email').value.trim();

            const mahasiswa = {
                nama: nama,
                nim: nim,
                semester: semester,
                prodi: prodi,
                email: email
            };

            // simpan ke array
            daftarMahasiswa.push(mahasiswa);

            // tampilkan di tabel
            tambahKeTabel(mahasiswa, daftarMahasiswa.length);
            
            // update jumlah data
            document.getElementById('jumlah').textContent = daftarMahasiswa.length;

            // tampilkan di console
            console.log("Data baru:", mahasiswa);
            console.log("Total data:", daftarMahasiswa.length);
            

            // kosongkan form
            document.getElementById('nama').value = '';
            document.getElementById('nim').value = '';
            document.getElementById('semester').value = '';
            document.getElementById('prodi').value = '';
            document.getElementById('email').value = '';
        }

        function tambahKeTabel(data, nomor) {
            const tbody = document.querySelector('#tabel tbody');
            const baris = document.createElement('tr');

            baris.innerHTML = `
                <td>${nomor}</td>
                <td>${data.nama}</td>
                <td>
                    <b>Semester:</b> ${data.semester}<br>
                    <b>Prodi:</b> ${data.prodi}<br>
                </td>
            `;

            tbody.appendChild(baris);
        }


        