<section class="pt-5 pb-9">
    <div class="container-small">
      <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('market')}}">Market</a></li>
            <li class="breadcrumb-item"><a href="/market/{{ $cars->kode_mobil }}">Cars Detail</a></li>
            <li class="breadcrumb-item active" aria-current="page">Rentcars</li>
        </ol>
      </nav>
      <h2 class="mb-5">Form Request Rent</h2>
      <div class="row justify-content-between">
        <div class="col-lg-7 col-xl-7">
            <div class="d-flex align-items-end">
              <h3 class="mb-0 me-3">Detail Penyewa</h3>
            </div>
            <table class="table table-borderless mt-4">
              <tbody>
                <tr>
                  <td class="py-2 ps-0">
                    <div class="d-flex"><span class="fs-3 me-2" data-feather="user" style="height:16px; width:16px;"> </span>
                      <h5 class="lh-sm me-4">Nama</h5>
                    </div>
                  </td>
                  <td class="py-2 fw-bold lh-sm">:</td>
                  <td class="py-2 px-3">
                    <h5 class="lh-sm fw-normal text-body-secondary">{{ Auth::user()->nama }}</h5>
                  </td>
                </tr>
                <tr>
                  <td class="py-2 ps-0">
                    <div class="d-flex"><span class="fs-3 me-2" data-feather="home" style="height:16px; width:16px;"> </span>
                      <h5 class="lh-sm me-4">Alamat</h5>
                    </div>
                  </td>
                  <td class="py-2 fw-bold lh-sm">:</td>
                  <td class="py-2 px-3">
                    <h5 class="lh-lg fw-normal text-body-secondary">{{ Auth::user()->alamat }}<br> {{ Auth::user()->kota }}</h5>
                  </td>
                </tr>
                <tr>
                  <td class="py-2 ps-0">
                    <div class="d-flex"><span class="fs-3 me-2" data-feather="phone" style="height:16px; width:16px;"> </span>
                      <h5 class="lh-sm me-4">No.HP</h5>
                    </div>
                  </td>
                  <td class="py-2 fw-bold lh-sm">: </td>
                  <td class="py-2 px-3">
                    <h5 class="lh-sm fw-normal text-body-secondary">{{ Auth::user()->hp }}</h5>
                  </td>
                </tr>
              </tbody>
            </table>
            <hr class="my-6">
            <h3 class="mb-0 me-3">Detail Pemilik <small>({{ $owners->owner_id }})</small> </h3>
            <table class="table table-borderless mt-4">
              <tbody>
                <tr>
                  <td class="py-2 ps-0">
                    <div class="d-flex"><span class="fs-3 me-2" data-feather="user" style="height:16px; width:16px;"> </span>
                      <h5 class="lh-sm me-4">Nama</h5>
                    </div>
                  </td>
                  <td class="py-2 fw-bold lh-sm">:</td>
                  <td class="py-2 px-3">
                    <h5 class="lh-sm fw-normal text-body-secondary">{{ $owners->nama }}</h5>
                  </td>
                </tr>
                <tr>
                  <td class="py-2 ps-0">
                    <div class="d-flex"><span class="fs-3 me-2" data-feather="home" style="height:16px; width:16px;"> </span>
                      <h5 class="lh-sm me-4">Alamat Garasi</h5>
                    </div>
                  </td>
                  <td class="py-2 fw-bold lh-sm">:</td>
                  <td class="py-2 px-3">
                    <h5 class="lh-lg fw-normal text-body-secondary">{{ $owners->alamat_garasi }}<br> {{ $owners->kota }}</h5>
                  </td>
                </tr>
                <tr>
                  <td class="py-2 ps-0">
                    <div class="d-flex"><span class="fs-3 me-2" data-feather="phone" style="height:16px; width:16px;"> </span>
                      <h5 class="lh-sm me-4">No.HP</h5>
                    </div>
                  </td>
                  <td class="py-2 fw-bold lh-sm">:</td>
                  <td class="py-2 px-3">
                    <h5 class="lh-sm fw-normal text-body-secondary">{{ $owners->hp }}</h5>
                  </td>
                </tr>
              </tbody>
            </table>
            <hr class="my-6">
            <h3 class="mb-0 me-3">Detail Cars</h3>
            <table class="table table-borderless mt-4">
              <tbody>
                <tr>
                  <td class="py-2 ps-0">
                    <div class="d-flex">
                      <h5 class="lh-sm me-4">Kode Mobil</h5>
                    </div>
                  </td>
                  <td class="py-2 fw-bold lh-sm">:</td>
                  <td class="py-2 px-3">
                    <h5 class="lh-sm fw-normal text-body-secondary">{{ $cars->kode_mobil }}</h5>
                  </td>
                </tr>
                <tr>
                  <td class="py-2 ps-0">
                    <div class="d-flex">
                      <h5 class="lh-sm me-4">Merk</h5>
                    </div>
                  </td>
                  <td class="py-2 fw-bold lh-sm">:</td>
                  <td class="py-2 px-3">
                    <h5 class="lh-lg fw-normal text-body-secondary">{{ $cars->merk }}</h5>
                  </td>
                </tr>
                <tr>
                    <td class="py-2 ps-0">
                      <div class="d-flex">
                        <h5 class="lh-sm me-4">Model</h5>
                      </div>
                    </td>
                    <td class="py-2 fw-bold lh-sm">:</td>
                    <td class="py-2 px-3">
                      <h5 class="lh-lg fw-normal text-body-secondary">{{ $cars->model }}</h5>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-2 ps-0">
                      <div class="d-flex">
                        <h5 class="lh-sm me-4">Plat</h5>
                      </div>
                    </td>
                    <td class="py-2 fw-bold lh-sm">:</td>
                    <td class="py-2 px-3">
                      <h5 class="lh-lg fw-normal text-body-secondary">{{ $cars->plat }}</h5>
                    </td>
                  </tr>


              </tbody>
            </table>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="card mt-3 mt-lg-0">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between">
                <h3 class="mb-0">Rincian</h3>
              </div>
              <div class="border-dashed border-bottom border-translucent mt-4">
                <div class="ms-n2">
                  <div class="row align-items-center mb-2 g-3">
                    <div class="col-8 col-md-7 col-lg-8">
                      <div class="d-flex align-items-center">
                            <img class="rounded-circle" width="50" height="50" src="../{{ $owners->foto_profile }}"
                                alt="" />
                        <h6 class="fw-semibold text-body-highlight lh-base ms-3">{{ $owners->nama }}</h6>
                      </div>
                    </div>
                    <div class="col-4 ps-0">
                        <span class="badge badge-phoenix fs-10 badge-phoenix-success">
                            <span class="badge-label">{{ $owners->status }}</span>
                            <span class="ms-1" data-feather="check"
                                style="height:12.8px;width:12.8px;"></span>
                        </span>
                    </div>
                  </div>
                  <div class="row align-items-center mb-2 g-3">
                    <div class="col-8 col-md-7 col-lg-8">
                      <div class="d-flex align-items-center">
                            <img class="rounded-circle" width="50" height="50" src="../{{ Auth::user()->foto_profile }}"
                                alt="" />
                        <h6 class="fw-semibold text-body-highlight lh-base ms-3">{{ Auth::user()->nama }}</h6>
                      </div>
                    </div>
                    <div class="col-4 ps-0">
                        <span class="badge badge-phoenix fs-10 badge-phoenix-success">
                            <span class="badge-label">{{ Auth::user()->status }}</span>
                            <span class="ms-1" data-feather="check"
                                style="height:12.8px;width:12.8px;"></span>
                        </span>
                    </div>
                  </div>
                  <div class="row align-items-center mb-2 g-3">
                    <div class="col-8 col-md-7 col-lg-8">
                      <div class="d-flex align-items-center">
                            <img class="rounded-circle" width="50" height="50" src="../{{ $cars->foto_mobil }}"
                                alt="" />
                        <h6 class="fw-semibold text-body-highlight lh-base ms-3">{{ $cars->merk }} {{ $cars->model }}</h6>
                      </div>
                    </div>
                    <div class="col-4 ps-0">
                        <span class="fs-10 fw-bolder">
                            <span class="badge-label">@currency($cars->tarif)/24 Jam</span>

                        </span>
                    </div>
                  </div>
                </div>
              </div>
              @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

              <form action="{{route('requestRent')}}" method="POST">

                @csrf

                {{-- INPUT DATA TO CARSRENT --}}
                <input type="hidden" name="kode_mobil" id="kode_mobil" value="{{ $cars->kode_mobil }}">
                <input type="hidden" name="uuid_penyewa" id="uuid_penyewa" value="{{ Auth::user()->uuid }}">
                <input type="hidden" name="penyewa" id="penyewa" value="{{ Auth::user()->nama }}">
                <input type="hidden" name="pemilik" id="pemilik" value="{{ $owners->nama }}">
                <input type="hidden" name="bukti_pembayaran" id="bukti_pembayaran" value="Belum Upload">
                    <div class="border-dashed border-bottom border-translucent mt-4">
                    <div class="d-flex justify-content-between mb-2">
                    <h5 class="text-body fw-semibold">Tanggal Sewa: </h5>
                    <h5 class="text-body fw-semibold">
                    <input type="date" class="form-control" id="tanggal_rent" name="tanggal_rent" onchange="cal()" />
                    </h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                    <h5 class="text-body fw-semibold">Tanggal Kembali: </h5>
                    <h5 class="text-body fw-semibold">
                    <input type="date" id="akhir_rent" class="form-control" name="akhir_rent" onchange="cal()"/>
                    </h5>
                    </div>

                    <div class="d-flex justify-content-between mb-2" id="numdays">
                    <h5 class="text-body fw-semibold">Lama Sewa: </h5>
                    <h5 class="text-body fw-semibold">
                        <input type="text" class="form-control" id="lama_sewa_display" readonly/>
                        <input type="hidden" class="form-control" name="lama_sewa" id="lama_sewa" readonly/>
                    </h5>
                    </div>

                    <div class="d-flex justify-content-between mb-2" id="numdays">
                        <h5 class="text-body fw-semibold">Tarif Sewa / 24 Jam: </h5>
                        <h5 class="text-body fw-semibold"><input type="hidden" class="form-control" id="tarif_rent" name="tarif_rent" value="{{ $cars->tarif }}" readonly/>@currency($cars->tarif)</h5>
                        </div>
                    <div class="d-flex justify-content-between mb-2">
                    <h5 class="text-body fw-semibold">Total Harga: </h5>
                    <h5 class="text-body fw-semibold">
                        <span id="total_rent_display" readonly></span>
                        <input type="hidden" class="form-control" name="total_rent" id="total_rent" onchange="updateTotalRentDisplay()" readonly/>
                    </div>
                    <center>
                        <a href="/market/{{ $cars->kode_mobil }}">
                    <button type="button" class="btn btn-secondary">Back To Cars Detail</button></a>
                    <button type="submit" class="btn btn-success mt-3">Request Rent Now!</button>
                    </center>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
