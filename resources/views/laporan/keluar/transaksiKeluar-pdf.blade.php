<div style="height: 100%; display: flex; flex-direction: column; justify-content: between; position: relative;">
  <div>
    <div class="header">
      <div style="display: flex; justify-content: center; text-align: center;">
          <h3>PEMERINTAH KECAMATAN GUBUG<br>INVENTARIS BARANG<br>PERIODE 2020-2024</h3>
      </div>
    </div>
    <div style="border: 1px solid #ddd; padding: 10px;">
      <table style="border-collapse: collapse; width: 70%;">
        <tr>
          <td style=" font-weight: bold;">Provinsi</td>
          <td>:</td>
          <td style="">JAWA TENGAH</td>
        </tr>
        <tr>
          <td style=" font-weight: bold;">Kab./Kota</td>
          <td>:</td>
          <td style="">PEMERINTAH KABUPATEN GROBOGAN</td>
        </tr>
        <tr>
          <td style=" font-weight: bold;">Bidang</td>
          <td>:</td>
          <td style="">Bidang Kecamatan</td>
        </tr>
        <tr>
          <td style=" font-weight: bold;">Unit Organisasi</td>
          <td>:</td>
          <td style="">KECAMATAN GUBUG</td>
        </tr>
        <tr>
          <td style=" font-weight: bold;">Sub Unit Organisasi</td>
          <td>:</td>
          <td style="">KECAMATAN GUBUG</td>
        </tr>
        <tr>
          <td style=" font-weight: bold;">UPB</td>
          <td>:</td>
          <td style="">KECAMATAN GUBUG</td>
        </tr>
        <tr>
          <td style=" font-weight: bold;">Ruangan</td>
          <td>:</td>
          <td style="">Tata Pemerintahan</td>
        </tr>
      </table>
    </div>
    <div style="margin-top: 20px;">
      <table cellpadding="10" border cellspacing="0" width="100%">
          <thead style="background-color: #40A1A2">
              <tr>
                  <th>No.</th>
                  <th>Supplier</th>
                  <th>Barang</th>
                  <th>Tanggal Keluar</th>
                  <th>Jumlah Barang</th>
                  <th>Catatan</th>
              </tr>
          </thead>
          <tbody>
              <?php $no = 0; ?>
              @foreach($data as $transaksi_keluar)
              <?php $no++ ?>
              <tr style="<?= $no % 2 === 1 ? 'background-color: #F0F2F5;' : '' ?> text-align: center;">
                  <td>
                      {{ $no }}
                  </td>
                  <td>{{ $transaksi_keluar->nama_penerima }}</td>
                  <td>{{ $transaksi_keluar->barang->nama_barang }}</td>
                  <td>{{ $transaksi_keluar->tanggal_keluar }}</td>
                  <td>{{ $transaksi_keluar->jumlah_barang }}</td>
                  <td>{{ $transaksi_keluar->catatan }}</td>
              </tr>
              @endforeach
          </tbody>
      </table>
    </div>
  </div>
  <div style="width: 100%;  position: absolute; bottom: 0; left: 0;">
    <div style="height: 150px; padding: 8px; width: 210px; border: 1px solid #ddd; text-align: center; display: inline-block;">
      <p style="font-size: 14px;">MENGETAHUI<br>CAMAT GUBUG</p>
      <br>
      <p style="font-size: 14px;">BAMBANG SUPRIYADI, S.Sos<br>NIP.196808082006041008</p>
    </div>
    <div style="height: 150px; padding: 8px; width: 210px; border: 1px solid #ddd; text-align: center; display: inline-block;">
      <p style="font-size: 14px;">Pengurus Barang Dan Aset Daerah</p>
      <br><br>
      <p style="font-size: 14px;">JOKO PURNOMO, SE<br>NIP.197012072008011007</p>
    </div>
    <div style="height: 150px; padding: 8px; width: 210px; border: 1px solid #ddd; text-align: center; display: inline-block;">
      <p style="font-size: 14px;">Penanggung Jawab Ruangan</p>
      <br><br>
      <p style="font-size: 14px;">NUR INDAH RAHMAWATI, SH<br>NIP.197012222007012007</p>
    </div>
  </div>
</div>