@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sales</h1>
                </div>
                <!--
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('sales.create') }}">
                        Add New
                    </a>
                </div>
                -->
                
            </div>
        </div>
    </section>
    <style>
        .card{
            width: 100%;
            height: 500px;
        }
        .top{
            padding: 10px 50px 20px 0px;
        }
        #head-txt{
            padding: 20px 0px 20px 20px;
        }
        .txtfield1{
            margin: 40px 50px 20px 20px;
        }
        .txtfield2{
            margin: -180px 0px 20px 500px;
        }
        .txtfield3{
            margin: 0px 50px 20px 20px;
        }
        input[name="message"]{ 
            line-height: 150px; 
        }
        .submit-btn{
            float: right;
            padding: 10px 40px 20px 0px;
        }
    </style>

    <div class="content px-3">

        @include('flash::message')
        <div class="top">
            <h3>Contact Sales</h3>
            <br>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam laudantium nulla exercitationem,
                id molestias aspernatur corrupti culpa omnis temporibus delectus aliquid, enim ut? 
                Illum modi deleniti officia repudiandae, asperiores a.
            </p>
        </div>
        <div class="card">
            
            <h3 id="head-txt"> Send us an email </h3>

            <div class="txtfield1">
                <form>
                    First Name <br>
                    <input type="text" name="txtbox1" size=50> <br>
                    Company/Organization Name <br>
                    <input type="text" name="txtbox1" size=50> <br>
                    Telephone Number <br>
                    <input type="text" name="txtbox1" size=50> <br>
                </form>
            </div>
            <div class="txtfield2">
                <form>
                    Last Name <br>
                    <input type="text" name="txtbox2" size=50> <br>
                    Country<br>
                    <input type="text" name="txtbox2" size=50> <br>
                    Email<br>
                    <input type="text" name="txtbox2" size=50> <br>
                </form>
               
            </div>
            <div class="txtfield3">
                <form>
                    Message/Concerns <br>
                    <input type="text" name="message" size=115>
                </form>
            </div>

        </div>
        <div class="submit-btn">
            <button>Send</button>
        </div>

    </div>

@endsection

