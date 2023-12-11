@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="container-fluid p-0 m-0 position-relative">
        <div class="w-100 h-100 bg-black opacity-25 z-1 position-absolute">
        </div>
        <div class="position-absolute top-50 start-0 translate-middle-y z-2 d-flex flex-column "
        style="margin-left:10%; max-width:40%">
            <h4 
            class="text-white mb-0 fw-semibold"
            >Our Latest Collaboration:</h4>
            <h1 
            class="text-white fw-semibold"
            style="font-size:3rem"
            >Fashion Realm x Chainsaw Man</h1>
            <a 
            class="btn bg-dark mt-3 fs-5 text-white fw-semibold py-2 rounded-pill" 
            href=""
            style="max-width:35%"
            >Explore Clothing >></a>
        </div>
        <img 
        src="images/home/chainsaw-man.png" 
        class="img-fluid w-100 object-fit-cover z-0 position-relative" 
        alt="chainsaw-man"
        />
    </div>

    <div class="container-fluid mt-5 mb-5 d-flex justify-content-evenly">

        <div class="container-fluid w-auto position-relative p-0">
            <div class="w-100 h-100 bg-black opacity-25 z-1 position-absolute">
            </div>
            <div class="position-absolute top-50 start-50 translate-middle z-2 opacity-75"
                style="background-color:#D9D9D9">
                    <a class="btn  px-5 py-3">
                        <span class="fw-semibold">All Men</span>
                    </a>
                </div>
            <img 
            src="images/home/men.png"
            class="img-fluid object-fit-cover"
            />
        </div>

        <div class ="container-fluid w-auto position-relative p-0">
            <div class="w-100 h-100 bg-black opacity-25 z-1 position-absolute">
            </div>
            <div class="position-absolute top-50 start-50 translate-middle z-2 opacity-75"
                style="background-color:#D9D9D9">
                    <a class="btn  px-5 py-3"
                    style="opacity:1;">
                        <span class="fw-semibold">All Women</span>
                    </a>
                </div>
            <img 
            src="images/home/women.png"
            class="img-fluid object-fit-cover"
            />
        </div>

    </div>
    

@endsection
