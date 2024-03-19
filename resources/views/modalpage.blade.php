@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 d-flex">
                <i class="fa-brands fa-spotify mx-2"></i>
                <div class="mx-2">
                    <div>Spotfy</div>
                </div>
            </div>
            <div class="col-4 d-flex">
                <a class="nav-link text-white mx-2" href="">Cookies</a>
                <span> | </span>
                <a class="nav-link text-white mx-2" href="#" data-toggle="modal" data-target="#sessionModal">Session</a>

            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-7 ">
                <h1 class="fs-7">Passa a Premium gratis Per <br> 1 mese</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-2">
                <p class="">Al termine Dell'offerta, solo €9,99 al mese . Annulla in qualsiasi momento</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-2">
                <button>VEDI PIANI</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-2">
                <p class="my-2">Si applicano termini e codinzioni. L'offerta di 1 meser gratis non e disponibile per gli
                    utenti che hanno gia provato spotify premium</p>
            </div>
        </div>
        <div class="modal fade" id="sessionModal" tabindex="-1" role="dialog" aria-labelledby="sessionModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bgGreen justify-content-center">
                        <div class="modal-title" id="sessionModalLabel">
                            <div class="col-8 d-flex">
                                <i class="fa-brands fa-spotify mx-2"></i>
                                <div class="mx-2 ">
                                    <div>Spotfy</div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btnCloseStyle" data-dismiss="modal" aria-label="Close">
                            <div class="">
                                <i class="fa-solid fa-x text-black"></i>
                            </div>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-black text-center">$7.90</h1>
                            </div>
                            <div class="col-12">
                                <p class="text-black text-center fs-8">Per Month</p>
                            </div>
                            <div class="col-12">
                                <p class="text-black ms-3 fw-bold">Includes</p>
                            </div>
                            <div class="col-12">
                                <ul class="text-black">
                                    <li class="listitemStyle">A spotify premium subscription</li>
                                    <li class="listitemStyle">No data Changes Form muisic</li>
                                    <li class="listitemStyle"> 12-month contact applies</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Subscribe</button>
                        <div class="col-12">
                            <p class=" ms-3 colorgreen">Oppure 9,99 per mese sensa contaratto</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    h1 {
        font-weight: bold
    }

    .mt-7 {
        margin-top: 100px !important;
    }

    .fs-7 {
        font-size: 60px !important;
    }

    .fs-8 {
        font-size: 10px !important;
    }

    button {
        background-color: black;
        border-radius: 20px !important;
        color: white;
        padding: 5px;
        font-size: 12px !important;
        width: 100px;
        height: 35px;
    }

    .bgGreen {
        background-color: rgb(122, 196, 12);
    }

    .btnCloseStyle {
        position: relative;
        bottom: 30px;
        left: 141px;
        background-color: rgb(255, 255, 255) !important;
        width: 25px;
        height: 25px;
        border-radius: 20px;
        border-style: none
    }

    .listitemStyle {
        font-size: 12px;
        color: grey;
    }

    .colorgreen {
        color: rgb(122, 196, 12) !important;
        font-size: 12px;
        padding-left: 52px;
        margin-top: 10px;
    }

    .modal {
        --bs-modal-width: 400px !important;
    }
</style>
