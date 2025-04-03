<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inul</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 overflow-x-hidden">

  <header class="bg-blue-600 text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
      <h1 class="text-2xl font-bold">Inul StarZ</h1>
      <nav>
        <ul class="flex space-x-4">
          <li><a href="#about" class="hover:underline">Tentang</a></li>
          <li><a href="#strategy" class="hover:underline">Strategi</a></li>
          <li><a href="#branding" class="hover:underline">Branding</a></li>
          <li><a href="#facilities" class="hover:underline">Fasilitas</a></li>
          <li><a href="#team" class="hover:underline">Team</a></li>
          <li><a href="#contact" class="hover:underline">Hubungi Kami</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="w-full min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('cover.png');">
    <div class="w-full min-h-screen bg-blue-900 bg-opacity-50 flex items-center justify-center">
      <div class="text-center text-white px-4">
        <h2 class="text-4xl font-bold mb-4">Rebranding Inul StarZ</h2>
        <p class="text-xl">Gen Z Bernyanyi, Gen Z Berekspresi</p>
      </div>
    </div>
  </section>

  <!-- Tentang / What We Do -->
  <section id="about" class="container mx-auto py-16 px-4">
    <h2 class="text-3xl font-bold mb-6">Apa yang Kami Lakukan?</h2>
    <p class="mb-4">
      Inul Vizta adalah jaringan karaoke keluarga yang populer di Indonesia, sedangkan Inul StarZ adalah bisnis hiburan dengan konsep trendy yang khusus ditujukan untuk Gen Z (17-25 tahun, all gender). Konsep ini menekankan pengalaman unik, interaktif, dan affordable dengan kualitas terbaik.
    </p>
    <p>
      Sub-brand dari Inul Vizta ini menyediakan ruang karaoke yang mendukung ekspresi diri, dilengkapi dengan fasilitas premium dan ruangan dengan tema yang aesthetic, sesuai dengan gaya hidup dan tren Gen Z.
    </p>
  </section>

  <!-- Strategi Marketing -->
  <section id="strategy" class="bg-gray-100 py-16 px-4">
    <div class="container mx-auto">
      <h2 class="text-3xl font-bold mb-6">Strategi Marketing</h2>
      <div class="space-y-8">
        <div>
          <h3 class="text-2xl font-semibold">Segmentasi & Targeting</h3>
          <p class="mt-2">
            Target pasar Inul StarZ adalah Gen Z berusia 18-25 tahun, aktif di media sosial, dan memiliki gaya hidup yang trendy serta mencari pengalaman bernyanyi yang unik. 
          </p>
        </div>
        <div>
          <h3 class="text-2xl font-semibold">Positioning & Diferensiasi</h3>
          <p class="mt-2">
            Dengan konsep “Trendy, Terjangkau, dan Tepat Sasaran”, Inul StarZ memposisikan dirinya sebagai rumah karaoke yang dikhususkan untuk Gen Z. Penawaran harga yang affordable serta fasilitas premium seperti photobooth, mini bar, dan ruangan tematik menjadi nilai pembeda.
          </p>
        </div>
        <div>
          <h3 class="text-2xl font-semibold">Channel dan Target Sales</h3>
          <ul class="list-disc ml-6 mt-2">
            <li>Iklan online dan media sosial (Instagram, TikTok, YouTube).</li>
            <li>Outlet strategis di kota-kota besar dekat area remaja seperti sekolah, kampus, pusat perbelanjaan, dan taman.</li>
            <li>Harga sewa ruangan karaoke yang bervariasi mulai dari Rp20.000 hingga Rp150.000, dengan penawaran khusus pada jam tertentu.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Branding -->
  <section id="branding" class="container mx-auto py-16 px-4">
    <h2 class="text-3xl font-bold mb-6">Branding & Identitas</h2>
    <div class="space-y-8">
      <div>
        <h3 class="text-2xl font-semibold">Brand Logo</h3>
        <p class="mt-2">
          Logo Inul StarZ didesain dengan style wavy, gradient color, dan detail yang menggambarkan konsep modern dan futuristik. Elemen detail seperti huruf “Z” dan simbol bintang menunjukkan bahwa setiap Gen Z bisa menjadi bintang.
        </p>
      </div>
      <div>
        <h3 class="text-2xl font-semibold">Makna Brand</h3>
        <p class="mt-2">
          Nama “StarZ” mengandung makna bintang dan sekaligus melambangkan Gen Z yang berani berekspresi. Tagline “Gen Z Bernyanyi, Gen Z Berekspresi” menegaskan nilai-nilai kebebasan berekspresi dan keceriaan.
        </p>
      </div>
      <div>
        <h3 class="text-2xl font-semibold">Room Charge</h3>
        <div class="overflow-x-auto mt-4">
          <table class="min-w-full bg-white border border-gray-200">
            <thead>
              <tr class="bg-blue-600 text-white">
                <th class="py-2 px-4 border">Room Type</th>
                <th class="py-2 px-4 border">Charge</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <td class="py-2 px-4 border">Small</td>
                <td class="py-2 px-4 border">Rp. 20.000</td>
              </tr>
              <tr class="text-center bg-gray-100">
                <td class="py-2 px-4 border">Medium</td>
                <td class="py-2 px-4 border">Rp. 35.000</td>
              </tr>
              <tr class="text-center">
                <td class="py-2 px-4 border">Large</td>
                <td class="py-2 px-4 border">Rp. 50.000</td>
              </tr>
              <tr class="text-center bg-gray-100">
                <td class="py-2 px-4 border">Deluxe</td>
                <td class="py-2 px-4 border">Rp. 80.000</td>
              </tr>
              <tr class="text-center">
                <td class="py-2 px-4 border">VIP</td>
                <td class="py-2 px-4 border">Rp. 120.000</td>
              </tr>
              <tr class="text-center bg-gray-100">
                <td class="py-2 px-4 border">VVIP</td>
                <td class="py-2 px-4 border">Rp. 130.000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="mt-2 text-sm italic">
          * Happy Hour (10:00 - 15:00) Diskon 30%, Weekend + Rp15.000, Belum Termasuk Tax 20% & Service 5%.
        </p>
      </div>
    </div>
  </section>

  <!-- Facilities & Room Layout -->
  <section id="facilities" class="bg-gray-500 py-16 px-4">
    <div class="container mx-auto">
      <h2 class="text-3xl font-bold text-white mb-6 text-center">Fasilitas Unggulan</h2>
      <div class="grid grid-cols-1 gap-8">
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-xl font-semibold mb-2">Photobooth (Self Studio)</h3>
          <p>Setiap room dilengkapi dengan set up kamera untuk menangkap momen, sangat cocok untuk kebutuhan konten media sosial.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-xl font-semibold mb-2">Mini Bar</h3>
          <p>Menyediakan makanan dan minuman kekinian dengan harga yang terjangkau untuk menemani pengalaman karaoke.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-xl font-semibold mb-2">Membership</h3>
          <p>Sistem membership dengan keuntungan seperti welcome drink, diskon membership, dan integrasi dengan Spotify untuk playlist personal.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-xl font-semibold mb-2">Comfort Room</h3>
          <p>Ruang berkonsep kekinian yang menawarkan kenyamanan dan variasi ruangan sesuai keinginan pelanggan.</p>
        </div>
      </div>
      
      <h2 class="text-3xl font-bold text-white mb-6 text-center mt-16">Room Layout</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow">
          <img src="room1.png" alt="Room 1" class="w-full h-60 object-cover rounded-lg">
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
          <img src="room2.png" alt="Room 2" class="w-full h-60 object-cover rounded-lg">
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
          <img src="room3.png" alt="Room 3" class="w-full h-60 object-cover rounded-lg">
        </div>
      </div>            
    </div>
  </section>

  <!-- Team -->
  <section id="team" class="container mx-auto py-16 px-4">
    <h2 class="text-3xl font-bold mb-6">Meet Our Team</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <div class="bg-white p-6 rounded-lg shadow text-center">
        <img src="foto1.png" alt="Foto Panji Pramudia P" class="w-32 h-32 rounded-full mx-auto mb-4">
        <h3 class="font-bold">Panji Pramudia P</h3>
        <p class="text-sm">Art Director & Illustrator</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow text-center">
        <img src="foto2.png" alt="Foto Jesika Sofiyanti" class="w-32 h-32 rounded-full mx-auto mb-4">
        <h3 class="font-bold">Jesika Sofiyanti</h3>
        <p class="text-sm">Departemen Strategi & Client Service</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow text-center">
        <img src="foto3.png" alt="Foto Jordan Roman Z" class="w-32 h-32 rounded-full mx-auto mb-4">
        <h3 class="font-bold">Jordan Roman Z</h3>
        <p class="text-sm">Departemen Media & Produksi</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow text-center">
        <img src="foto4.png" alt="Foto Roy Is Shobron G" class="w-32 h-32 rounded-full mx-auto mb-4">
        <h3 class="font-bold">Roy Is Shobron G</h3>
        <p class="text-sm">Departemen Digital Marketing & Teknologi</p>
      </div>
    </div>
  </section>

  <!-- Footer / Contact -->
  <footer id="contact" class="bg-blue-600 text-white py-8">
    <div class="container mx-auto px-4 text-center">
      <p class="mb-4">Cheers Advertising - PT. Vizta Internasional Indonesia</p>
      <p>Let's Connect With Us</p>
    </div>
  </footer>

  <a href="https://wa.me/6281234567890" target="_blank" class="fixed bottom-4 right-4 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 16 16">
      <path d="M13.601 2.337C12.122.857 10.189.022 8.004 0 3.787 0 .208 3.578.01 7.788-.11 10.364.83 12.707 2.62 14.495c.199.198.465.309.744.309.182 0 .363-.044.53-.13l1.977-.993a.847.847 0 01.782.04c1.068.597 2.236.902 3.457.902h.01c4.18 0 7.586-3.396 7.6-7.57.01-2.02-.788-3.91-2.119-5.216zM8.006 13.283c-1.08 0-2.13-.288-3.045-.83l-.218-.13-1.294.65.268-1.403-.146-.23c-1.052-1.166-1.59-2.63-1.505-4.166C2.157 4.044 4.847 1.348 8.006 1.348c1.603 0 3.108.624 4.243 1.76 1.137 1.135 1.76 2.64 1.75 4.243-.013 3.159-2.71 5.852-5.993 5.852zm3.275-4.234c-.179-.09-1.06-.52-1.224-.58-.164-.06-.283-.09-.402.09-.119.179-.463.58-.57.7-.105.119-.21.134-.389.045-.179-.09-.758-.28-1.443-.891-.534-.476-.892-1.067-.997-1.246-.105-.179-.011-.276.08-.365.082-.08.179-.208.269-.312.09-.105.12-.179.179-.298.06-.119.03-.224-.015-.313-.045-.09-.402-.97-.55-1.33-.146-.357-.296-.307-.402-.313-.105-.007-.224-.007-.343-.007-.119 0-.313.045-.48.224-.165.179-.63.617-.63 1.504 0 .886.645 1.74.734 1.859.09.119 1.269 1.938 3.077 2.718.429.185.76.296 1.02.378.428.136.82.117 1.13.071.345-.052 1.06-.431 1.21-.85.149-.417.149-.774.105-.85-.044-.075-.164-.119-.343-.208z"/>
    </svg>
  </a>

</body>
</html>