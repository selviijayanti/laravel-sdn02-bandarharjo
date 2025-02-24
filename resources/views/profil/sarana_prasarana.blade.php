@extends("layouts.main")

@section("title", "Sarana Prasarana - SDN BANDARHARJO 02 SEMARANG")

@section("content")
  <section class="d-flex justify-content-center">
    <div style="width: 1000px">
      <div
        class="fw-bold rounded"
        style="
          height: 50px;
          background-color: #cccccc;
          color: var(--color-primary);
        "
      >
        <div class="d-flex justify-content-center">SARANA & PRASARANA</div>
        <div class="d-flex justify-content-center">SDN BANDARHARJO 02</div>
      </div>
      <div class="border-blue rounded mt-4">
        <p
          class="d-flex align-items-center px-4 py-3"
          style="background-color: #bce8f1; height: 30px; color: #31708f"
        >
          DATA SARPRAS
        </p>
        <table class="table table-striped text-center mb-3">
          <thead style="border-bottom: 3px solid #dddddd">
            <tr style="font-size: 14px">
              <th>Jenis Sarpras</th>
              <th>No</th>
              <th>Jml 2020 Ganjil</th>
              <th>Jml 2020 Genap</th>
            </tr>
          </thead>
          <tbody class="text-table" style="font-size: 14px">
            <tr>
              <td>Ruang Kelas</td>
              <td>1</td>
              <td>8</td>
              <td>8</td>
            </tr>
            <tr>
              <td>Ruang Perpustakaan</td>
              <td>2</td>
              <td>1</td>
              <td>1</td>
            </tr>
            <tr>
              <td>Ruang Laboratorium</td>
              <td>3</td>
              <td>1</td>
              <td>1</td>
            </tr>
            <tr>
              <td>Ruang Praktik</td>
              <td>4</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <td>Ruang Pimpinan / KS</td>
              <td>1</td>
              <td>8</td>
              <td>8</td>
            </tr>
            <tr>
              <td>Ruang Guru</td>
              <td>1</td>
              <td>8</td>
              <td>8</td>
            </tr>
            <tr>
              <td>Ruang Ibadah</td>
              <td>1</td>
              <td>8</td>
              <td>8</td>
            </tr>
            <tr>
              <td>Ruang UKS</td>
              <td>1</td>
              <td>8</td>
              <td>8</td>
            </tr>
            <tr>
              <td>Ruang Toilet</td>
              <td>1</td>
              <td>8</td>
              <td>8</td>
            </tr>
            <tr>
              <td>Ruang Gudang</td>
              <td>1</td>
              <td>8</td>
              <td>8</td>
            </tr>
            <tr>
              <td>Ruang Sirkulasi</td>
              <td>1</td>
              <td>8</td>
              <td>8</td>
            </tr>
            <tr>
              <td>Ruang Bermain / Olahraga</td>
              <td>1</td>
              <td>8</td>
              <td>8</td>
            </tr>
            <tr>
              <td>Ruang TU</td>
              <td>1</td>
              <td>8</td>
              <td>8</td>
            </tr>
            <tr>
              <td>Ruang Konseling</td>
              <td>1</td>
              <td>8</td>
              <td>8</td>
            </tr>
            <tr>
              <td>Ruang OSIS</td>
              <td>1</td>
              <td>8</td>
              <td>8</td>
            </tr>
            <tr>
              <td>Ruang Bangunan</td>
              <td>1</td>
              <td>8</td>
              <td>8</td>
            </tr>
          </tbody>
          <tfoot>
            <tr class="fw-bold" style="font-size: 14px;">
              <td colspan="2">Total</td>
              <td>25</td>
              <td>25</td>
            </tr>
            <tr>
              <td colspan="4" class="text-start" style="font-size: 12px;">
                <small class="fst-italic">Sumber: <span class="fw-bold">https://dopo.kemendikbud.go.id</span></small>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </section>
@endsection
