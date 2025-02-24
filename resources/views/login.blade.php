@extends("layouts.login")

@section("title", "Login - SDN BANDARHARJO 02 SEMARANG")

@section("content")
  <section class="d-flex justify-content-center align-items-center">
    <div
      class="bg-white p-5 text-center relative font-righteous rounded-2"
      style="border: 2px solid black; width: 480px; height: 490px"
    >
      <div class="d-flex pb-5">
        <img
          src="/images/logo SD.png"
          alt="Logo SD"
          style="width: 50px; height: 50px"
        />
        <h2 class="d-flex justify-content-center align-items-center ms-4">
          Login Pengguna
        </h2>
      </div>
      <form action="/" method="GET">
        <div class="d-flex justify-content-start">
          <label for="nama">Nama Pengguna</label>
        </div>
        <div class="input-group">
          <input
            type="text"
            id="nama"
            class="form-control rounded-start-4"
            style="border: 2px solid black; border-right: none"
          />
          <span
            class="input-group-text bg-white rounded-end-4"
            style="border: 2px solid black; border-left: none"
          >
            <img
              src="/images/user-icon.png"
              alt="User Icon"
              style="width: 20px; height: 20px"
            />
          </span>
        </div>
        <div class="d-flex justify-content-start mt-4">
          <label for="password">Password</label>
        </div>
        <div class="input-group">
          <input
            type="text"
            id="nama"
            class="form-control rounded-start-4"
            style="border: 2px solid black; border-right: none"
          />
          <span
            class="input-group-text bg-white rounded-end-4"
            style="border: 2px solid black; border-left: none"
          >
            <img
              src="/images/key-icon.png"
              alt="User Icon"
              style="width: 20px; height: 20px"
            />
          </span>
        </div>
        <small
          class="d-flex justify-content-start mt-1"
          style="font-size: 12px"
        >
          <a href="#">Lupa Kata Sandi</a>
        </small>
        <div>
          <button
            type="submit"
            class="rounded-3 py-2 text-white"
            style="
              background-color: #00a825;
              width: 255px;
              border: none;
              margin-top: 70px;
            "
          >
            Masuk
          </button>
        </div>
      </form>
    </div>
  </section>
@endsection
