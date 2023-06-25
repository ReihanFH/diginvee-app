<div wire:ignore>
    <!-- PAGE LOADER -->
    <div id="loading" class="overlay">
        <div class="overlayDoor"></div>
        <div class="overlayContent">
            <div class="loader">
                <div class="inner"></div>
            </div>
        </div>
    </div>

    <!-- COVER -->
    <div class="modal fade" id="cover" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="cover modal-body">
                    <div class="info d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-auto cover-text">
                                    <h1>Arin &amp; Indra</h1>
                                    @if (!is_null($name))
                                        <p class="py-1">Kepada Yth,<br>{{ $name }}</p>
                                    @endif
                                    <div class="col-auto text-center pt-5">
                                        <a type="button" class="btn btn-open" data-bs-dismiss="modal"
                                            data-dismiss="modal" id="open"><i
                                                class="bi bi-envelope-open-heart"></i>&nbsp; Buka Undangan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
                        <div class="carousel-item active" style="background-image: url(assets/img/gallery-pic-0.jpg)">
                        </div>
                        <div class="carousel-item" style="background-image: url(assets/img/gallery-pic-1.jpg)"></div>
                        <div class="carousel-item" style="background-image: url(assets/img/gallery-pic-2.jpg)"></div>
                        <div class="carousel-item" style="background-image: url(assets/img/gallery-pic-3.jpg)"></div>
                        <div class="carousel-item" style="background-image: url(assets/img/gallery-pic-4.jpg)"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MUSIC -->
    <div id="music">
        <div id="play-pause" class="play"></div>
        <audio id="track">
            <source src="assets/audio/music.mp3" type="audio/mpeg" />
        </audio>
    </div>

    <!-- HERO -->
    <section id="hero" class="bg-paper min-vh-100">
        <div class="position-relative" data-aos="fade-down" data-aos-delay="400" id="first-line">
            <img src="assets/img/flower-3-min.png" class="hero-divider position-absolute" />
        </div>
        <div class="hero align-self-center text-center col-md-8 offset-md-2">
            <div class="hero-text">
                <p data-aos="fade-down" class="mb-1">Undangan Resepsi Pernikahan</p>
                <h1 class="my-2" data-aos="zoom-in-down" data-aos-anchor="#first-line">Arin &amp; Indra</h1>
                <div class="about-image mx-auto" data-aos="zoom-in" data-aos-delay="400" data-aos-anchor="#first-line">
                </div>
                <p class="pt-2 mb-0" data-aos="zoom-in-up" data-aos-anchor="#first-line">⇝ Sabtu, 1 Juli 2023 ⇜</p>
                <div id="countdown">
                    <ul class="p-0">
                        <li class="text-center" data-aos="fade-up" data-aos-delay="100" data-aos-anchor="#first-line">
                            <span id="days" class="align-items-center"></span>Hari
                        </li>
                        <li class="text-center" data-aos="fade-up" data-aos-delay="300" data-aos-anchor="#first-line">
                            <span id="hours" class="align-items-center"></span>Jam
                        </li>
                        <li class="text-center" data-aos="fade-up" data-aos-delay="500" data-aos-anchor="#first-line">
                            <span id="minutes" class="align-items-center"></span>Menit
                        </li>
                        <li class="text-center" data-aos="fade-up" data-aos-delay="700" data-aos-anchor="#first-line">
                            <span id="seconds" class="align-items-center"></span>Detik
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="py-5">
        <div class="position-relative" data-aos="fade-up" data-aos-delay="400" data-aos-anchor="#first-line">
            <img src="assets/img/flower-3-min.png" class="about-divider position-absolute my-3" />
        </div>
        <div class="text-center mt-3">
            <!-- <div class="about-image mx-auto mb-3" data-aos="fade-up"></div> -->
            <h2 data-aos="fade-up">Aswarin Prastiani, SKM</h2>
            <p class="about-parents mx-auto mb-1" data-aos="fade-up">Putri pertama dari :</p>
            <p class="about-parents mx-auto" data-aos="fade-up">
                Drs. Budi Priyatmono, MH <br />&<br />
                Astianingsih
            </p>
            <h1 data-aos="fade-up">&amp;</h1>
            <!-- <div class="about-image mx-auto mb-3" data-aos="fade-up"></div> -->
            <h2 data-aos="fade-up">dr. Indra Putra Prakasa</h2>
            <p class="about-parents mx-auto mb-1" data-aos="fade-up">Putra pertama dari :</p>
            <p class="about-parents mx-auto" data-aos="fade-up">
                Drs. Bardono <br />&<br />
                Ely Rahmawati
            </p>
        </div>
    </section>

    <!-- EVENT -->
    <section id="event" class="event bg-paper text-center">
        <div class="position-relative">
            <img src="assets/img/flower-4-min.png" class="event-divider-1 position-absolute my-3"
                data-aos="fade-up" />
        </div>
        <div class="row align-items-center py-3 py-sm-5 my-auto mx-4">
            <div class="col-12">
                <div class="card event-card border-2 border-light-subtle mx-auto" data-aos="fade-up">
                    <div class="card-body text-center row align-items-center">
                        <div class="mx-auto">
                            <h2 class="mb-3" data-aos="fade-up">Resepsi Pernikahan</h2>
                            <p class="card-date my-3" data-aos="fade-up">⇝ Sabtu, 1 Juli 2023 ⇜</p>
                            <p class="card-text my-2" data-aos="fade-up"><i class="bi bi-clock"></i>&nbsp;
                                11.00 — 13.00 WIB
                            </p>
                            <p class="card-text my-2" data-aos="fade-up">
                                <i class="bi bi-geo-alt"></i>&nbsp;Gedung Auditorium BPSDM Hukum dan HAM<br />
                                Jl. Raya Gandul No. 4, Cinere <br />Kota Depok
                            </p>
                            <a href="https://maps.app.goo.gl/Bb7B4WQRPREBPaNK9?g_st=ic"
                                class="btn btn-outline-secondary my-3" target="_blank" data-aos="fade-up"><i
                                    class="bi bi-map"></i>&nbsp; Buka Maps</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QR Code -->
    @if ($code == null)
        <section id="qr" class="qr py-2">
            <div class="row align-items-center py-3 mx-4">
                <div class="col-md-4 mx-auto text-center">
                    <h2 data-aos="fade-up">QR Code</h2>
                    <p data-aos="fade-up" class="text-qr">Mohon tunjukkan QR Code saat menghadiri acara resepsi</p>
                    <img data-aos="fade-up" src="data:image/png;base64, {!! base64_encode(
                        QrCode::format('png')->size(500)->margin(2)->generate('cfcd208495d5'),
                    ) !!}"
                        class="mx-auto col-md-4" style="width: 100%; height: auto">
                </div>
            </div>
        </section>
    @else
        <section id="qr" class="qr py-2">
            <div class="row align-items-center py-3 mx-4">
                <div class="col-md-4 mx-auto text-center">
                    <h2 data-aos="fade-up">QR Code</h2>
                    <p data-aos="fade-up" class="text-qr">Mohon tunjukkan QR Code saat menghadiri acara resepsi</p>
                    <img data-aos="fade-up" src="data:image/png;base64, {!! base64_encode(
                        QrCode::format('png')->size(500)->margin(2)->generate($code),
                    ) !!}"
                        class="mx-auto col-md-4" style="width: 100%; height: auto">
                </div>
            </div>
        </section>
    @endif

    @if ($note == 'OMba Arin')
        <!-- GIFT -->
        <section id="gift" class="gift bg-paper py-3">
            <div class="container mt-5 mb-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-md-8 text-center mb-3">
                        <h2 data-aos="fade-up">Kirim Hadiah</h2>
                        <div class="gift-icon" data-aos="fade-up">
                            <i class="bi bi-gift"></i>
                        </div>
                        <p class="text-gift" data-aos="fade-up">Klik tombol di bawah ini untuk mengirim hadiah</p>
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
                            data-bs-target="#gift-modal" data-aos="fade-up"><i class="bi bi-gift"></i>&nbsp;
                            Kirim
                            Hadiah</button>
                    </div>
                </div>
            </div>

            <!-- GIFT MODAL -->
            <div class="modal fade" id="gift-modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="text-end">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="text-center">
                                <h2 data-aos="fade-up">Hadiah Pernikahan</h2>
                                <p class="text-gift" data-aos="fade-up">Bagi Bapak/Ibu/Saudara/i yang ingin
                                    memberikan hadiah, dapat dilakukan melalui nomor rekening ataupun dompet digital
                                    berikut :</p>
                            </div>
                            <div class="creditcard">
                                <div class="text-end">
                                    <img class="img-fluid w-25" src="assets/img/logo-bca.png" />
                                </div>
                                <div>
                                    <div class="my-4">
                                        <div class="chip">
                                            <div class="chip-line"></div>
                                            <div class="chip-line"></div>
                                            <div class="chip-line"></div>
                                            <div class="chip-line"></div>
                                            <div class="chip-main"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <div>
                                                <input hidden id="giftBCA" type="text" value="1672219226" />
                                                <p class="creditcard-number mb-1">
                                                    1672219226&nbsp;&nbsp;
                                                    <a type="button" id="copyBCA" onclick="copyBCA()"
                                                        class="copy-number"><i class="bi bi-files"></i></a>
                                                </p>
                                            </div>
                                            <p class="creditcard-text mb-1">Aswarin Prastiani</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="creditcard">
                                <div class="text-end">
                                    <img class="img-fluid w-25" src="assets/img/logo-dana.svg" />
                                </div>
                                <div>
                                    <div class="my-4">
                                        <div class="chip">
                                            <div class="chip-line"></div>
                                            <div class="chip-line"></div>
                                            <div class="chip-line"></div>
                                            <div class="chip-line"></div>
                                            <div class="chip-main"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <div>
                                                <input hidden id="giftDANA" type="text" value="081328307474" />
                                                <p class="creditcard-number mb-1">
                                                    081328307474&nbsp;&nbsp;
                                                    <a type="button" id="copyDANA" onclick="copyDANA()"
                                                        class="copy-number"><i class="bi bi-files"></i></a>
                                                </p>
                                            </div>
                                            <p class="creditcard-text mb-1">Indra Putra Prakasa</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="copied-success" class="copied">
                                <span>Tersalin!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- GALLERY -->
    <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">
            <div class="text-center pt-5 pb-5">
                <h2 data-aos="fade-up">Galeri</h2>
            </div>

            <div class="row gy-3 pb-5">
                <div class="col-lg-4 col-6 gallery-item" data-aos="zoom-in-up" data-aos-delay="200">
                    <a href="assets/img/gallery-pic-1.jpg" class="glightbox"><img src="assets/img/gallery-pic-1.jpg"
                            class="gallery-img img-fluid rounded-3" alt="" /></a>
                </div>

                <div class="col-lg-4 col-6 gallery-item" data-aos="zoom-in-up" data-aos-delay="400">
                    <a href="assets/img/gallery-pic-2.jpg" class="glightbox"><img src="assets/img/gallery-pic-2.jpg"
                            class="gallery-img img-fluid rounded-3" alt="" /></a>
                </div>

                <div class="col-lg-4 col-6 gallery-item" data-aos="zoom-in-up" data-aos-delay="400">
                    <a href="assets/img/gallery-pic-3.jpg" class="glightbox"><img src="assets/img/gallery-pic-3.jpg"
                            class="gallery-img img-fluid rounded-3" alt="" /></a>
                </div>

                <div class="col-lg-4 col-6 gallery-item" data-aos="zoom-in-up" data-aos-delay="200">
                    <a href="assets/img/gallery-pic-4.jpg" class="glightbox"><img src="assets/img/gallery-pic-4.jpg"
                            class="gallery-img img-fluid rounded-3" alt="" /></a>
                </div>

                <div class="col-lg-4 col-6 gallery-item" data-aos="zoom-in-up" data-aos-delay="200">
                    <a href="assets/img/gallery-pic-5.jpg" class="glightbox"><img src="assets/img/gallery-pic-5.jpg"
                            class="gallery-img img-fluid rounded-3" alt="" /></a>
                </div>

                <div class="col-lg-4 col-6 gallery-item" data-aos="zoom-in-up" data-aos-delay="400">
                    <a href="assets/img/gallery-pic-6.jpg" class="glightbox"><img src="assets/img/gallery-pic-6.jpg"
                            class="gallery-img img-fluid rounded-3" alt="" /></a>
                </div>
            </div>
        </div>
    </section>


    <!-- EVENT -->
    <section id="event" class="event bg-paper text-center">
        <div class="position-relative">
            <img src="assets/img/flower-4-min.png" class="event-divider-1 position-absolute my-3"
                data-aos="fade-up" />
        </div>
        <div class="row align-items-center py-3 py-sm-5 my-auto mx-4">
            <div class="col-12">
                <div class="card event-card border-2 border-light-subtle mx-auto" data-aos="fade-up">
                    <div class="card-body row align-items-center">
                        <div class="mx-md-auto">
                            <p class="about-verse mx-auto" data-aos="fade-up">
                                “Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu pasangan-pasangan
                                dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan
                                dijadikan-Nya
                                diantaramu rasa kasih dan sayang.
                                Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang
                                berfikir.”
                            </p>
                            <p class="about-surah mx-auto mb-0" data-aos="fade-up">(QS. Ar-Rum Ayat 21)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WISHES -->
    <section id="wishes" class="wishes">
        <div class="container mt-5 mb-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-8 text-center mb-3">
                    <h2 data-aos="fade-up">Doa dan Ucapan</h2>
                    <p class="text-wishes" data-aos="fade-up">Kirimkan Doa & Ucapan Untuk Kami</p>
                </div>
                @if (!is_null($name))
                    <form wire:submit.prevent="saveWish" class="col-12 col-md-8">
                        <input wire:model="name" type="text" class="form-control mb-3"
                            value="{{ $name }}" data-aos="fade-up" style="color: #888d73" disabled />
                        <div class="form-floating mb-3" data-aos="fade-up">
                            <textarea wire:model="wish" class="form-control" placeholder="Doa dan Ucapan" id="wishes-form"
                                style="height: 100px" @if (!is_null($guestwish)) @if ($guestwish->name == $name) disabled @endif @endif></textarea>
                            <label for="wishes-form">Doa dan Ucapan</label>
                        </div>
                        <select wire:model="attendance" class="form-select" data-aos="fade-up"
                            style="color: #888d73"
                            @if (!is_null($guestwish)) @if ($guestwish->name == $name) disabled @endif
                            @endif>
                            <option value="" selected disabled>Konfirmasi Kehadiran</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Tidak Hadir">Tidak Hadir</option>
                        </select>
                        <div class="mt-4 d-grid text-center" data-aos="fade-up">
                            <button type="submit" class="btn btn-outline-secondary"
                                @if (!is_null($guestwish)) @if ($guestwish->name == $name) disabled @endif
                                @endif><i class="bi bi-send"></i>&nbsp;
                                Kirim</button>
                        </div>
                    </form>
                @endif
                <div class="col-md-8 @if (!is_null($name)) mt-5 @endif">
                    <div class="card mb-2" data-aos="fade-up">
                        <div class="d-flex flex-row p-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row align-items-center">
                                        <span class="user" data-aos="fade-up">
                                            diginvee&nbsp;
                                            <i class="bi bi-envelope-paper-heart"></i>
                                        </span>
                                    </div>
                                </div>
                                <p class="text-justify comment-text my-2" data-aos="fade-up">Dear Arin and Indra, May
                                    your union be a beacon of inspiration for us all. Congratulations on your wedding
                                    day, and may your love story continue to flourish in the years to come.</p>
                                {{-- <div class="row">
                                    <small class="col-6" data-aos="fade-up">18 June 2023, 12:00:43</small>
                                    <a class="col-6 text-end btn-reply" href="#" data-aos="fade-up"><i
                                            class="bi bi-reply"></i>&nbsp;Reply</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    @forelse ($wishes as $row)
                        <div class="card mb-2" data-aos="fade-up">
                            <div class="d-flex flex-row p-3">
                                <div class="w-100">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex flex-row align-items-center">
                                            <span class="user" data-aos="fade-up">{{ $row->name }}</span>
                                        </div>
                                    </div>
                                    <p class="text-justify comment-text my-2" data-aos="fade-up">{{ $row->wish }}
                                    </p>
                                    <div class="row">
                                        <small class="col-6" data-aos="fade-up">{{ $row->created_at }}</small>
                                        {{-- <a class="col-6 text-end btn-reply" href="#" data-aos="fade-up"><i
                                                class="bi bi-reply"></i>&nbsp;Reply</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                    {{-- <div class="text-center mt-3">
                        <a wire:click="load" class="btn btn-outline-secondary" data-aos="fade-up">Load More</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <footer>
        <svg viewBox="0 0 120 28">
            <defs>
                <mask id="xxx">
                    <circle cx="7" cy="12" r="40" fill="#fff" />
                </mask>

                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur" />
                    <feColorMatrix in="blur" mode="matrix"
                        values="
                 1 0 0 0 0  
                 0 1 0 0 0  
                 0 0 1 0 0  
                 0 0 0 13 -9"
                        result="goo" />
                    <feBlend in="SourceGraphic" in2="goo" />
                </filter>
                <path id="wave"
                    d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
            </defs>

            <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2"></use>
            <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0"></use>

            <g class="gooeff"></g>
            <circle class="drop drop1" cx="20" cy="2" r="1.8" />
            <circle class="drop drop2" cx="25" cy="2.5" r="1.5" />
            <circle class="drop drop3" cx="16" cy="2.8" r="1.2" />
            <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />
        </svg>

        <div class="footer px-4 px-lg-5 pt-0 pb-5">
            <p>DESIGNED BY</p>
            <img src="assets/img/logo-diginvee.png" class="credits mb-2" />
            <ul class="list-inline mb-3">
                <a class="text-white mx-3" href="https://www.instagram.com/diginvee/" target="_blank">
                    <i class="bi bi-instagram"></i>
                </a>
                <a class="text-white mx-3" href="https://api.whatsapp.com/send/?phone=6285780131516" target="_blank">
                    <i class="bi bi-whatsapp"></i>
                </a>
            </ul>
        </div>
    </footer>
</div>
