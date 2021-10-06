@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pricings</h1>
                </div>
                <!--
                    <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('pricings.create') }}">
                        Add New
                    </a>
                </div>
                -->
                
            </div>
        </div>
    </section>

    <style>
        table{
            border-collapse: collapse;
        }
        th, td{
            padding: 20px;
        }
        .card{
            width: 100%;
        }
    </style>

    <div class="content">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="body">
            <div class="column">
                <div class="card">
                    <table>
                        <thead>
                            <th>Product</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <strong>ZOTAC GeForce RTX 3080 TRINITY</strong> </td>
                                <td>₱65,493.10</td>
                            </tr>
                            <tr>
                                <td> <strong>Samsung 49 “QLED – Odyssey C49G95</strong> </td>
                                <td>₱88,584.00</td>
                            </tr>
                           <tr>
                               <td> <strong>INNO3D GeForce RTX 3090</strong> </td>
                               <td>₱152,864.60</td>
                           </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>

@endsection

