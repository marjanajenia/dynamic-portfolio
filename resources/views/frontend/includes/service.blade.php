@php
    $service=App\Models\Backend\Service::all();
@endphp
<section class="ftco-section" id="services-section">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center py-5 mt-5">
      <div class="col-md-12 heading-section text-center ftco-animate">
          <h1 class="big big-2">Services</h1>
        <h2 class="mb-4">Services</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
      </div>
    </div>
        <div class="row">
            @foreach($service as $service)
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1 shadow">
                        <span class="icon">
                            {{--  <i class="flaticon-analysis"></i>  --}}
                            <i ><img width="100" src="{{ asset('backend/service/'.$service->pic) }}" alt="" ></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">{{ $service->service }}</h3>
                            <p>{{ $service->description }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
    </div>
</section>
