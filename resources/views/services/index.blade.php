@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Services</h1>
                </div>
                <!--
                    <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('services.create') }}">
                        Add New
                    </a>
                </div>
                -->
                
            </div>
        </div>
    </section>
    
    <style>
        .card{
            height: 400px;
        }
        .head{
            margin: 130px 0px 0px 350px;
        }
    </style>

    <div class="content px-3">

        @include('flash::message')

        <div class="card">
            <div class="head">
                <h1>Services</h1>
                <p>We Provide The Best Services For Our Customers</p>
            </div>
        </div>
    </div>

@endsection

