@extends('layouts.app')
@section('content')
@include('layouts.navbar')
    <section class="p-3">
      <div class="container-fluid">
        <h4 class="text-center my-3">Delete my account <span class="fw-bold">Business Solutions</span></h4>
        <textarea
        class="form-control"
        id="exampleFormControlTextarea1"
        rows="10"
        placeholder="why?"
      ></textarea>
      <div class=" text-center my-3">
        <button class="btn btn-secondary py-3"><i class="fa-solid fa-trash"></i> Delete my account</button>
      </div>
      </div>
    </section>
    @endsection