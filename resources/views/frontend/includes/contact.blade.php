<section class="ftco-section ftco-hireme img" style="background-image: url({{ asset('frontend') }}/images/bg_1.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 ftco-animate text-center">
                <h2>I am <span>Available</span> for freelancing</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h1 class="big big-2">Contact</h1>
          <h2 class="mb-4">Contact Me</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
        </div>
      </div>

      <div class="row d-flex contact-info mb-5">
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box text-center p-4 shadow">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-map-signs"></span>
                </div>
                <div>
                    <h3 class="mb-4">Address</h3>
                  <p>{{ $about->address }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box text-center p-4 shadow">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-phone2"></span>
                </div>
                <div>
                    <h3 class="mb-4">Contact Number</h3>
                  <p><a href="tel://1234567920">{{ $about->number }}</a></p>
              </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box text-center p-4 shadow">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-paper-plane"></span>
                </div>
                <div>
                    <h3 class="mb-4">Email Address</h3>
                  <p><a href="mailto:info@yoursite.com">{{ $about->email }}</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box text-center p-4 shadow">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-globe"></span>
                </div>
                <div>
                    <h3 class="mb-4">Website</h3>
                  <p><a href="#">{{ $about->website }}</a></p>
              </div>
            </div>
        </div>
      </div>

      <div class="row no-gutters block-9">
        <div class="col-md-6 order-md-last d-flex">
            <form action="{{Route('contact.store')}}" method="post" class="bg-light p-4 p-md-5 contact-form">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name" name="name" id="name" value="{{ old('name') }}">
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Your Email" name="email" id="email" value="{{ old('email') }}">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject" name="subject" id="subject" value="{{ old('subject') }}">
                    <span class="text-danger">
                        @error('subject')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message" >{{ old('message') }}</textarea>
                    <span class="text-danger">
                        @error('message')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <button type="btn btn-info"  class="btn btn-primary py-3 px-5">Send Message</button>
                </div>
            </form>

        </div>

        <div class="col-md-6 d-flex">
            <div class="img" style="background-image: url({{ asset('frontend') }}/images/about.jpg);"></div>
        </div>
      </div>
    </div>
  </section>
