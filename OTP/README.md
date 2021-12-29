# DOKUMENTASI PROJECT

### Ex: edit controllerA.php - keterangan tambah function delete

## CRUD Items: Created - Untested

- Admin.php = nambah buat CRUD Items nya (Belum sama Image)
- itemsModel = (file baru) model items
- Data dummy belum ada, view blm ada blm bisa dicoba

## Update 0.0.1

Nonaktif login filter -> User tidak perlu login dahulu
Add dropdown menu untuk user pada homepage

### File Changed:

- Views/Pages/navbar.php = Nambah fitur buat ngecek status login filter
- App/Config/Filters.php = Nonaktif login filter
- App/Config/Routes.php = Set default route Admin::index
- App/Controllers/Admin.php = Benerin return view buat tiap-tiap user

## Update 0.0.2

Rename beberapa controller dan function
Nambah view buat profile user

## Update 0.0.3
- Bagian Profile sudah fix (error sudah diperbaiki)
- Bagian List Items sudah fix (join dihilangkan, sedikit perubahan pada ItemsModel untuk penyesuaian)
- Nambah dummy satu biji di bagian items dan items list (dummy juga di tabel customer buat tes method update profile) Harap update DB di lokal klean pake DB yang baru. (Folder Backup DB berisi database yang belum berisi dummy)
=======
- Booking view done (Baru frontend belum di konek ke model)
- Remove beberapa menu navbar
- Remake view user profile

### File Added:
- View/Pages/Book/rooms.php = List room yang bisa dipesan
- View/Pages/Book/details.php = Untuk konfirmasi pemesanan

## Update 0.0.4
- Nambah view register
- Navbar sudah di fix posisinya
