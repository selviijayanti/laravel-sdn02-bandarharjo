@extends("layouts.main")

@section("title", "Visi Misi - SDN BANDARHARJO 02 SEMARANG")

@section("content")
  <section class="d-flex flex-column justify-content-center align-items-center">
    {{-- title --}}
    <h1
      class="font-passion-one text-center text-white px-2 py-1 rounded"
      style="
        background-color: var(--color-primary);
        box-shadow: -5px 10px #854600;
      "
    >
      VISI DAN MISI
    </h1>
    <h1
      class="font-passion-one text-center text-white px-2 py-1 rounded"
      style="
        background-color: var(--color-primary);
        box-shadow: -5px 5px #854600;
        margin-top: -12px;
        margin-bottom: 100px;
      "
    >
      SDN BANDARHARJO 02
    </h1>
    <div
      class="font-passion-one position-relative py-4 px-3 rounded-3"
      style="
        width: 750px;
        background-color: #fbbe07;
        color: #a45600;
        box-shadow: -5px 5px #cf6d01;
        border: 2px solid black;
        margin-bottom: 100px;
      "
    >
      <div
        class="position-absolute py-2 z-3 font-passion-one fs-3 rounded-3 text-white text-center"
        style="
          width: 250px;
          margin-top: -9%;
          margin-left: -25px;
          border: 2px solid black;
          background-color: var(--color-primary);
          box-shadow: -5px 5px #854600;
        "
      >
        VISI SEKOLAH
      </div>
      “Membentuk Manusia Beriman jujur, mandiri, beretika, santun dalam budaya,
      unggul dalam IPTEK, dan menciptakan lingkungan ramah anak serta
      fasilitatif terhadap keberagaman peserta didik.”
    </div>
    <div
      class="font-passion-one position-relative py-4 px-3 rounded-3"
      style="
        width: 750px;
        background-color: #fbbe07;
        color: #a45600;
        box-shadow: -5px 5px #cf6d01;
        border: 2px solid black;
      "
    >
      <div
        class="position-absolute py-2 z-3 font-passion-one fs-3 rounded-3 text-white text-center"
        style="
          width: 250px;
          margin-top: -9%;
          margin-left: 490px;
          border: 2px solid black;
          background-color: var(--color-primary);
          box-shadow: -5px 5px #854600;
        "
      >
        MISI SEKOLAH
      </div>
      <ul>
        <li>Menyiapkan sumber daya manusia yang berbudaya, cerdas, terampil, dan berbudi pekerti luhur.</li>
        <li>Meningkatkan wawasan dan kreativitas berbudaya.</li>
        <li>Menciptakan kualitas dan efektivitas proses belajar mengajar.</li>
        <li>Menciptakan lingkungan sekolah yang kondusif, aman, dan nyaman.</li>
        <li>Menumbuhkembangkan semangat berprestasi secara kompetitif, jujur, dan suportif.</li>
        <li>Menumbuhkembangkan penghayatan dan pengalaman ajaran agama yang dianut atau kepercayaannya sehingga terbangun insan yang beriman, bertaqwa serta berakhlak mulia.</li>
        <li>Memberikan fasilitas pembelajaran pada anak berkebutuhan khusus sesuai dengan kondisi yang dimiliki.</li>
      </ul>
    </div>
  </section>
@endsection
