@extends('User.templates.tpl_default', ['pageId'=>'contact_us'])

@section('css')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css_user/contact_us.css')}}">
<style>
    #stay_here {
        background-color: #fff;
    }

    #stay_here a {
        color: #005745 !important;
    }
</style>

@endsection

@section('content')

<div class="container" id="form">
    <div class="contact_form row ">
        <div class="form col-md-7  ">
            <h2>Contact us</h2>
            <div class="row ">
                <div class="col-md-6 ">
                    <div id="label" for="">Full Name</div>
                    <input type="text" placeholder="Full name">
                </div>
                <div class="col-md-6 ">
                    <div id="label" for="">Email</div>
                    <input type="text" placeholder="Email">
                </div>

                <div class="col-md-12 ">
                    <div id="label" for="">Message</div>
                    <textarea placeholder="Message" name="" id=""></textarea>
                </div>
                <div class="submit">
                    <button type="submit">Send Message</button>
                </div>

            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.661206405767!2d105.8237424760264!3d21.006213588551056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad744eb9a567%3A0x86ebcd89ee0bda7b!2zMTc1IFAuIFTDonkgU8ahbiwgVHJ1bmcgTGnhu4d0LCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1685617048543!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="col-md-5 px-0"></iframe>
    </div>
</div>
<div class="container" id="icon">
    <div class="contact">
        <div class="row mx-0">
            <div class="col-md-3 px-0 " id="iconvstext">
                <div class="icon"><span class="fa fa-map-marker d-flex align-items-center justify-content-center"></span></div>
                <div class="text">Address: <a href="#">175 Tây Sơn, Đống Đa, Hà Nội</a></div>
            </div>
            <div class="col-md-3 px-0 " id="iconvstext">
                <div class="icon"><span class="fa fa-phone d-flex align-items-center justify-content-center "></span></div>
                <div class="text">Phone: <a href="#">+8490999999999</a></div>
            </div>
            <div class="col-md-3 px-0 " id="iconvstext">
                <div class="icon"><span class="fa fa-paper-plane d-flex align-items-center justify-content-center"></span></div>
                <div class="text">Email: <a href="#">TechTitan@gmail.com</a></div>
            </div>
            <div class="col-md-3 px-0 " id="iconvstext">
                <div class="icon"><span class="fa fa-globe d-flex align-items-center justify-content-center"></span></div>
                <div class="text">Website: <a href="#">TechTitan.com</a></div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('js')

@endsection