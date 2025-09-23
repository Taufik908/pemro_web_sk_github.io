from fpdf import FPDF
import os

# Buat folder output jika belum ada
output_path = "D:/Coding/P web 2/Laporan_Praktikum_Web_Taufiq.pdf"

class PDF(FPDF):
    def header(self):
        self.set_font("Arial", 'B', 14)
        self.cell(0, 10, "Laporan Praktikum Web", ln=True, align='C')
        self.ln(5)

    def chapter_title(self, title):
        self.set_font("Arial", 'B', 12)
        self.cell(0, 10, title, ln=True)
        self.ln(2)

    def chapter_body(self, body):
        self.set_font("Arial", '', 11)
        self.multi_cell(0, 8, body)
        self.ln()

    def add_section(self, title, content):
        self.chapter_title(title)
        self.chapter_body(content)

pdf = PDF()
pdf.set_auto_page_break(auto=True, margin=15)
pdf.add_page()

# Cover
pdf.set_font("Arial", 'B', 16)
pdf.cell(0, 10, "LAPORAN PRAKTIKUM", ln=True, align='C')
pdf.set_font("Arial", '', 14)
pdf.cell(0, 10, "Konsep Dasar Web dan Internet & Fondasi Virtual Web (CSS)", ln=True, align='C')
pdf.ln(10)
pdf.set_font("Arial", '', 12)
pdf.cell(0, 10, "Nama: Taufiq", ln=True)
pdf.cell(0, 10, "Tanggal Praktikum: 23 September 2025", ln=True)
pdf.cell(0, 10, "Dosen Pengampu: (Isi Nama Dosen)", ln=True)
pdf.cell(0, 10, "Program Studi: (Isi Prodi)", ln=True)
pdf.cell(0, 10, "Fakultas: (Isi Fakultas)", ln=True)
pdf.cell(0, 10, "Universitas: (Isi Universitas)", ln=True)
pdf.add_page()

# BAB I - Konsep Dasar Web dan Internet
pdf.chapter_title("BAB I - Konsep Dasar Web dan Internet")
pdf.add_section("Tujuan", "- Memahami pengertian dan komponen utama web serta internet.\n- Mengetahui cara kerja komunikasi data antara client dan server.\n- Mampu membuat halaman web sederhana menggunakan HTML.")
pdf.add_section("Dasar Teori", "Web adalah sistem informasi berbasis dokumen yang diakses melalui internet menggunakan protokol HTTP/HTTPS. Internet adalah jaringan global yang menghubungkan jutaan komputer untuk bertukar data. Model client-server memungkinkan client mengirim permintaan (request) dan server mengirim balasan (response). HTML (HyperText Markup Language) adalah bahasa markup untuk membuat struktur halaman web.")
pdf.add_section("Alat dan Bahan", "- Laptop/PC dengan koneksi internet.\n- Browser (Chrome, Firefox, Edge).\n- Text editor (VS Code, Sublime Text, Notepad++).")
pdf.add_section("Langkah Kerja", "1. Membuka text editor dan membuat file index.html.\n2. Menulis struktur dasar HTML.\n3. Menyimpan file dan membukanya di browser.\n4. Mengamati tampilan halaman dan memahami proses request–response.")
pdf.add_section("Hasil", "Halaman web sederhana berhasil ditampilkan di browser. Struktur HTML dikenali oleh browser dan dirender sesuai tag.")
pdf.add_section("Pembahasan", "HTML adalah pondasi utama web. Browser membaca file HTML dan menampilkan konten sesuai struktur setelah menerima respon dari server atau file lokal.")
pdf.add_section("Kesimpulan", "- Web dan internet saling terkait: internet sebagai infrastruktur, web sebagai layanan.\n- HTML adalah bahasa markup dasar untuk membangun halaman web.")

# BAB II - Fondasi Virtual Web (CSS)
pdf.add_page()
pdf.chapter_title("BAB II - Fondasi Virtual Web (CSS)")
pdf.add_section("Tujuan", "- Memahami fungsi CSS dalam mempercantik dan mengatur tampilan web.\n- Mampu menghubungkan file CSS dengan HTML.\n- Menggunakan selector dan properti CSS dasar.")
pdf.add_section("Dasar Teori", "CSS (Cascading Style Sheets) adalah bahasa stylesheet untuk mengatur tampilan elemen HTML. Selector menentukan elemen yang akan diberi gaya, sedangkan properti dan nilai menentukan aspek visual seperti warna, ukuran, dan margin. Konsep Box Model menjelaskan tata letak elemen (content, padding, border, margin).")
pdf.add_section("Alat dan Bahan", "- Laptop/PC dengan koneksi internet.\n- Browser.\n- Text editor.")
pdf.add_section("Langkah Kerja", "1. Membuat file style.css.\n2. Menghubungkan CSS ke HTML.\n3. Membuka file HTML di browser dan mengamati perubahan tampilan.")
pdf.add_section("Hasil", "Tampilan halaman berubah sesuai gaya yang ditentukan di CSS. Warna latar belakang, warna teks, dan tata letak berhasil diatur.")
pdf.add_section("Pembahasan", "CSS memisahkan konten (HTML) dari tampilan (style), sehingga memudahkan pengelolaan desain. Dengan CSS, tampilan web menjadi lebih menarik dan konsisten.")
pdf.add_section("Kesimpulan", "- CSS adalah fondasi visual web yang mengatur estetika dan tata letak.\n- Pemisahan HTML dan CSS meningkatkan efisiensi pengembangan web.")

# Lampiran Kode
pdf.add_page()
pdf.chapter_title("Lampiran Kode HTML")
pdf.set_font("Arial", '', 10)
pdf.multi_cell(0, 6, """<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Web Dasar</title>
</head>
<body>
    <h1>Halo Dunia!</h1>
    <p>Ini adalah halaman web pertama saya.</p>
</body>
</html>""")

pdf.chapter_title("Lampiran Kode CSS")
pdf.multi_cell(0, 6, """body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
}
h1 {
    color: blue;
    text-align: center;
}
p {
    color: #333;
    font-size: 16px;
}""")

# Simpan PDF
pdf.output(output_path)
print("Laporan PDF berhasil dibuat:", output_path)
