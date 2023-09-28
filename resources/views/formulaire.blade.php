@extends('Layouts.Base')

@section('content')
<section class="vh-100 bg-image fondregister" >
 
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Disponibilité</h2>

              <form action="{{route('dispo')}}" method="POST">
                  @csrf
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Entre le</label>
                  <input type="date" id="form3Example1cg" name="date1" class="form-control form-control-lg" required />
                  
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Et le</label>
                  <input type="date" id="form3Example1cg" name="date2"  class="form-control form-control-lg"  required/>
                </div>
                
             

                <!-- <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div> -->

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-dark btn-lg btn-block">Enregistrer</button>
                </div>

                <!-- <p class="text-center text-muted mt-5 mb-0"><a href="log"
                    class="fw-bold text-body"><u>se connecter</u></a></p> -->

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection