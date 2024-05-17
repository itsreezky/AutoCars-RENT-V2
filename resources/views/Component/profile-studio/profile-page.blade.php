<div class="ecommerce-homepage pt-2 mb-9">
    <section class="pt-5 pb-9">
        <div class="container-small">
            <nav class="mb-2" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('market')}}">Market</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
            <div class="row align-items-center justify-content-between g-3 mb-4">
                <div class="col-auto">
                    <h2 class="mb-0">Profile</h2>
                </div>
                <div class="col-auto">
                    <div class="row g-2 g-sm-3">
                        <div class="col-auto">
                            <button class="btn btn-phoenix-secondary" data-bs-target="#editprofile"
                                title="View and Edit Profile" data-bs-toggle="modal">
                                <span class="fas fa-edit me-2"></span>Edit Profile</button>
                            <a href="{{route('logout')}}" data-confirm-delete="true"><button
                                    class="btn btn-phoenix-danger">
                                    <span class="fa-solid fa-right-from-bracket me-2"></span>Sign
                                    out</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3 mb-6">
                <div class="col-12 col-lg-8">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="border-bottom border-dashed pb-4">
                                <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">
                                    <div class="col-12 col-sm-auto">
                                        <input class="d-none" id="foto_profile" type="file" name="foto_profile" /><label
                                            class="cursor-pointer avatar avatar-5xl" for="avatarFile">

                                            @if(Auth::user()->foto_profile)
                                            <img class="rounded-circle" src="{{ url(Auth::user()->foto_profile) }}"
                                                alt="" /></label>

                                        @else

                                        <img class="rounded-circle"
                                            src="{{asset ('assets/img/reezky/default-profile.png') }}" alt="" /></label>
                                        @endif

                                        <br>
                                        <button class="btn btn-sm btn-phoenix-secondary ms-3 mt-2"
                                            data-bs-target="#editfoto" title="View and Edit Profile"
                                            data-bs-toggle="modal">
                                            <span class="fas fa-edit me-2"></span>Edit Foto</button>
                                    </div>


                                    <div class="col-12 col-sm-auto flex-1 mb-5">
                                        <h3>{{ (Auth::user()->nama) }}

                                        </h3>

                                        @if(Auth::user()->status == 'Verified Member')

                                        <span class="badge badge-phoenix fs-10 badge-phoenix-info">
                                            <span class="badge-label">{{ (Auth::user()->status)
                                                }}</span>
                                            <span class="ms-1" data-feather="check"
                                                style="height:12.8px;width:12.8px;"></span>
                                        </span>

                                        @else

                                        <span class="badge badge-phoenix fs-10 badge-phoenix-secondary">
                                            <span class="badge-label">{{ (Auth::user()->status)
                                                }}</span>
                                        </span>

                                        @endif

                                        <br>
                                        <small>ID : {{ (Auth::user()->uuid) }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-between-center pt-4">

                                @if(Auth::user()->status == 'Verified Member')

                                <div class="text-start">
                                    <h6 class="mb-2 text-body-secondary">Total Rent</h6>

                                    <h4 class="fs-8 text-body-highlight mb-0">0</h4>
                                </div>

                                <div class="text-center ms-5">
                                    <h6 class="mb-2 text-body-secondary">Location</h6>
                                    <h4 class="fs-8 text-body-highlight mb-0">Kota {{ (Auth::user()->kota)
                                        }}</h4>
                                </div>
                                <div class="text-end">
                                    <h6 class="mb-2 text-body-secondary">Registered since</h6>
                                    <h4 class="fs-8 text-body-highlight mb-0"> {{ (Auth::user()->created_at)
                                        }}</h4>
                                </div>

                                @else

                                <div>
                                    <h6 class="mb-2 text-body-secondary">Verified Status</h6>

                                    <h4 class="fs-8 text-body-highlight mb-0">Not Verified</h4>
                                </div>

                                <div class="text-end ms-4">
                                    <h6 class="mb-2 text-body-secondary"></h6>
                                    <h4 class="fs-8 text-body-highlight mb-0">
                                        <a href="{{ url('verified/'.Auth::user()->uuid) }}"><button
                                                class="btn btn-phoenix-success">
                                                Verify Account Now <span
                                                    class="fa-solid fa-check ms-2"></span></button></a>
                                    </h4>
                                </div>

                                <div class="text-end">
                                    <h6 class="mb-2 text-body-secondary">Registered since</h6>
                                    <h4 class="fs-8 text-body-highlight mb-0"> {{ (Auth::user()->created_at)
                                        }}</h4>
                                </div>

                                @endif


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="border-bottom border-dashed">
                                <h4 class="mb-3">Information
                                </h4>
                            </div>
                            <div class="pt-4 mb-7 mb-lg-4 mb-xl-7">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <h5 class="text-body-highlight">Address</h5>
                                    </div>
                                    <div class="col-auto">
                                        <p class="text-body-secondary">{{ (Auth::user()->alamat) }},<br>{{
                                            (Auth::user()->kota) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-dashed pt-4">
                                <div class="row flex-between-center mb-2">
                                    <div class="col-auto">
                                        <h5 class="text-body-highlight mb-0">Email</h5>
                                    </div>
                                    <div class="col-auto"><a class="lh-1" href="mailto:{{ (Auth::user()->email) }}">{{
                                            (Auth::user()->email)
                                            }}</a></div>
                                </div>
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                        <h5 class="text-body-highlight mb-0">Phone</h5>
                                    </div>
                                    <div class="col-auto"><a href="tel:+62{{ (Auth::user()->hp) }}">{{
                                            (Auth::user()->hp) }}</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(Auth::user()->status == 'Verified Member')

            <div>
                <div class="scrollbar">
                    <ul class="nav nav-underline fs-9 flex-nowrap mb-3 pb-1" id="myTab" role="tablist">
                        <li class="nav-item me-3"><a class="nav-link text-nowrap active" id="orders-tab"
                                data-bs-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders"
                                aria-selected="true"><span class="fa-solid fa-car me-2"></span>History Rent</a></li>
                    </ul>
                </div>



                <div class="tab-content" id="profileTabContent">
                    <div class="tab-pane fade show active" id="tab-orders" role="tabpanel" aria-labelledby="orders-tab">
                        <div class="border-top border-bottom border-translucent" id="profileOrdersTable"
                            data-list='{"valueNames":["id","rent_id","kode_mobil","pemilik","tanggal_rent","akhir_rent","lama_sewa","tarif_rent","total_rent","bukti_pembayaran", "status"],"page":6,"pagination":true}'>
                            <div class="table-responsive scrollbar">
                                <table class="table fs-9 mb-0">
                                    <thead>
                                        <tr>
                                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                                data-sort="id" style="width:10%; min-width:50px">ID</th>
                                            <th class="sort align-middle pe-3" scope="col" data-sort="rent_id"
                                                style="width:10%; min-width:50px">RENT ID
                                            </th>
                                            <th class="sort align-middle text-start" scope="col" data-sort="pemilik"
                                                style="width:10%; min-width:50px">
                                                PEMILIK</th>
                                            <th class="sort align-middle pe-0 text-end" scope="col"
                                                data-sort="tanggal_rent" style="width:15%; min-width:50px">TANGGAL RENT
                                            </th>
                                            <th class="sort align-middle text-end" scope="col" data-sort="akhir_rent"
                                                style="width:10%; min-width:50px">AKHIR RENT
                                            </th>
                                            <th class="sort align-middle text-end" scope="col" data-sort="lama_sewa"
                                                style="width:10%; min-width:50px">LAMA RENT
                                            </th>
                                            <th class="sort align-middle text-end" scope="col" data-sort="tarif_rent"
                                                style="width:10%; min-width:50px">TARIF RENT
                                            </th>
                                            <th class="sort align-middle text-end" scope="col" data-sort="total_rent"
                                                style="width:10%; min-width:50px">TOTAL RENT
                                            </th>
                                            <th class="sort align-middle text-end" scope="col" data-sort="bukti_pembayaran"
                                            style="width: 10%; min-widht:50px">Pembayaran</th>
                                            <th class="sort align-middle text-end" scope="col" data-sort="status"
                                                style="width:10%; min-width:50px">STATUS
                                            </th>
                                        </tr>
                                    </thead>
                                    @foreach ($carsrent as $datarent )
                                    <tbody class="list" id="profile-order-table-body">
                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                            <td class="id align-middle white-space-nowrap py-2 ps-0">
                                                <p class="fw-semibold text-body-highlight mb-0"> {{ $datarent->id }}
                                                </p>
                                            </td>
                                            <td class="rent_id align-middle white-space-nowrap py-2">
                                                <p class="fw-semibold text-body-highlight mb-0"> {{ $datarent->rent_id
                                                    }}
                                                </p>
                                            </td>
                                            <td class="pemilik align-middle white-space-nowrap py-2">
                                                <p class="fw-semibold text-body-highlight mb-0"> {{ $datarent->pemilik
                                                    }}
                                                </p>
                                            </td>
                                            <td class="tanggal_rent align-middle white-space-nowrap py-2 text-end">
                                                <p class="fw-semibold text-body-highlight mb-0"> {{
                                                    $datarent->tanggal_rent }}
                                                </p>
                                            </td>
                                            <td class="akhir_rent
                                                align-middle white-space-nowrap py-2 text-end">
                                                <p class="fw-semibold text-body-highlight mb-0"> {{
                                                    $datarent->akhir_rent }}
                                                </p>
                                            </td>
                                            <td class="lama_sewa
                                                align-middle white-space-nowrap py-2 text-end">
                                                <p class="fw-semibold text-body-highlight mb-0"> {{ $datarent->lama_sewa
                                                    }} Hari
                                                </p>

                                            </td>
                                            <td class="tarif_rent
                                                align-middle white-space-nowrap py-2 text-end">
                                                <p class="fw-semibold text-body-highlight mb-0"> @currency($datarent->tarif_rent)
                                                </p>
                                            </td>
                                            <td class="total_rent
                                                align-middle white-space-nowrap py-2 text-end">
                                                <p class="fw-semibold text-body-highlight mb-0"> @currency($datarent->total_rent)
                                                </p>
                                            </td>
                                            <td class="bukti_pembayaran align-middle white-space-nowrap py-2 text-end">
                                                <p class="fw-semibold text-body-highlight mb-0"> {{ $datarent->bukti_pembayaran }}
                                                </p>
                                            </td>
                                            <td class="status align-middle white-space-nowrap py-2 text-end">
                                                <p class="fw-semibold text-body-highlight mb-0"> {{ $datarent->status }}
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                                <div class="col-auto d-flex">
                                    <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                                        data-list-info="data-list-info"></p><a class="fw-semibold" href="#!"
                                        data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                            data-fa-transform="down-1"></span></a><a class="fw-semibold d-none"
                                        href="#!" data-list-view="less">View
                                        Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                                </div>
                                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                                            class="fas fa-chevron-left"></span></button>
                                    <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                        data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            @endif

        </div><!-- end of .container-->
    </section>

    <!-- ===============================================-->
    <!--                 Support Chat                   -->
    <!-- ===============================================-->

    @include('Component.public.support')

</div>
