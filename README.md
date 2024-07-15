Untuk meminify file JavaScript `assets/js/main.js` menggunakan Terser, Anda dapat mengikuti langkah-langkah berikut:

### 1. Install Terser
Pertama, Anda perlu menginstall Terser melalui NPM. Pastikan Anda sudah memiliki Node.js dan NPM terinstal di sistem Anda.

Buka terminal atau command prompt dan jalankan perintah berikut:
```bash
npm install terser --save-dev
```

### 2. Minify Menggunakan Terser
Setelah Terser terinstal, Anda bisa menggunakan perintah `npx` untuk menjalankan Terser dan meminify file JavaScript Anda.

Berikut adalah perintah untuk meminify `assets/js/main.js` dan output-nya ke file `assets/js/main.min.js`:
```bash
npx terser assets/js/main.js -o assets/js/main.min.js
```

### 3. Menambahkan Script ke package.json
Untuk memudahkan, Anda juga bisa menambahkan script ke file `package.json` sehingga Anda hanya perlu menjalankan perintah sederhana untuk meminify file JavaScript.

1. Buka file `package.json` Anda.
2. Tambahkan script berikut di bagian `scripts`:
   ```json
   "scripts": {
     "minify-js": "terser assets/js/main.js -o assets/js/main.min.js"
   }
   ```

3. Jalankan script ini dengan perintah:
   ```bash
   npm run minify-js
   ```

### Contoh Lengkap package.json
Berikut adalah contoh lengkap dari file `package.json`:
```json
{
  "name": "your-project-name",
  "version": "1.0.0",
  "description": "Your project description",
  "main": "index.js",
  "scripts": {
    "minify-js": "terser assets/js/main.js -o assets/js/main.min.js"
  },
  "author": "Your Name",
  "license": "ISC",
  "devDependencies": {
    "terser": "^5.7.0"
  }
}
```

### Menjalankan Proses Minifikasi
Setelah menambahkan script di `package.json`, Anda dapat menjalankan proses minifikasi kapan saja dengan perintah:
```bash
npm run minify-js
```

Ini akan menjalankan Terser dan meminify `assets/js/main.js`, lalu menyimpan hasilnya ke `assets/js/main.min.js`.
