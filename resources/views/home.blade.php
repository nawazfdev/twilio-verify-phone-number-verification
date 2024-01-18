@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    You are logged in!
                    <iframe
   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3086.5245907909456!2d69.34511552325736!3d30.37532161860637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3357ab5391e79%3A0x7d6c4c83718bd85a!2sSample%20Location%20in%20Pakistan!5e0!3m2!1sen!2sus!4v1673629212535!5m2!1sen!2sus"
   width="600"
   height="450"
   style="border:0;"
   allowfullscreen="" loading="lazy"
   referrerpolicy="no-referrer-when-downgrade">
</iframe>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
