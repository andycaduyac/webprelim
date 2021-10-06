@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <!-- 
                     <div class="col-sm-6">
                        <a class="btn btn-primary float-right"
                            href="{{ route('products.create') }}">
                            Add New
                        </a>
                    </div>
                 -->
               
            </div>
        </div>
    </section>
    
    <style>
        .content{
            
        }
        .body{
            justify-content: center;
            margin: 0 -5px;
        }
        .column{
            float: left;
            width: 33.3%;
            padding: 0 10px;
        }
        .card{
            height: 600px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }

        .price-btn{
            float: right;
            padding: 45px 50px 20px 0;
        }
        button{
            border: none;
            border-radius: 10px;
            padding: 10px;
            background-color: #0978f6;
            color: white;
        }
        button:hover {
            background-color: #0012fb;
        }
        #img {
            padding: 15px;
        }
    </style>

    <div class="content">

        @include('flash::message')


        <div class="clearfix"></div>
        
        <div class="body">
            <div class="column">
                <div class="card">
                    <img src="/images/rtx3080.jpg" id="img">
               <strong>ZOTAC GeForce RTX 3080 TRINITY</strong> <br>
                    <p>
                    The ZOTAC GeForce RTX 3080 TRINITY graphics card has 10 GB of next-generation GDDR6X video memory.
                    This model benefits from high operating frequencies and an improved cooling system for reliability 
                    and long-term performance
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                <img src="/images/samsungodyssey.jpg" id="img">
                    <strong>Samsung 49 “QLED – Odyssey C49G95</strong>  <br>
                    <p>
                    The Samsung Odyssey C49G95TSSR QLED monitor features a 49 “32: 9 VA panel with 1000R curvature and Dual WQHD resolution for incredible gaming immersion. 
                    Superior performance (1ms, 240Hz, FreeSync Premium Pro, G-Sync compatibility), intense colors and HDR1000 image are waiting for you!
                    </p>

                </div>
                
            </div>
            <div class="column">
                <div class="card">
                <img src="/images/rtx3090.jpg" id="img">
                    <strong>INNO3D GeForce RTX 3090</strong>
                    <br>
                    <p>
                    The INNO3D GeForce RTX 3090 GAMING X3 graphics card has 24 GB of next-generation GDDR6X video memory. 
                    This model benefits from high operating frequencies and an improved cooling system for reliability and long-term performance.
                    </p>
                </div>
            </div>
            
        </div>

        <div class="price-btn">
            <a href="/pricings">
                <button>Check Price</button>
            </a>
        </div>
    </div>

@endsection

