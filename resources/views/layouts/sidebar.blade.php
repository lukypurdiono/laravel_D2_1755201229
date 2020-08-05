
<div class="list-group list-group-item bg-light">
<h4 class="text-center font-weight-bold">MENU</h4>
  <a href="/mhs" class="list-group-item list-group-item-action {{ (request()->is('mhs')) ? 'active' : '' }}">Mahasiswa</a>
  <a href="#" class="list-group-item list-group-item-action">Dosen</a>
  <a href="/prodi" class="list-group-item list-group-item-action {{ (request()->is('prodi')) ? 'active' : '' }}">Program Studi</a>
  <a href="#" class="list-group-item list-group-item-action">Mata Kuliah</a>
  <a href="#" class="list-group-item list-group-item-action">Kerja Praktek</a>
  <a href="#" class="list-group-item list-group-item-action">Skripsi</a>
</div>
