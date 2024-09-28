@extends('layouts.dashboard.app')
@section('content')
    <div class="overlay d-none"
        style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 9;">
    </div>
    @include('manage_risk.score_data_create')
    <section class="m-groups mt-3">
        <div class="container-fluid">
            <div class="t-manage text-center text-capitalize">
                <h4 class="">{{ __('Manage Risk') }}</h4>
            </div><!--t-manage-->
            <div class="s-c-notation d-flex ">
                <a href="{{route('manage_risk_settings.index')}}" class="text-dark  text-decoration-none m-3"
                    style="padding: 5px 10px;"><i class="fa-solid fa-gear"></i>{{ __('Setting') }}</a>
                <a href="#" class=" text-decoration-none border-primary border  m-3"
                    style="padding: 5px 10px; border-width:2px !important;">{{ __('Manage Credit Notation') }}</a>
            </div><!--s-c-notation-->
        </div><!--container-->
        <div class="row justify-content-end ">
            <div class="col-auto">
                <div class="new-st">
                    <button class="btn btn-secondary btn-m mb-2" onclick="showNewScoringDiv()">
                        <i class="fa-solid fa-plus"></i> {{ __('New Scoring Model') }}
                    </button>
                    <button class="btn btn-secondary btn-m mb-2">
                        <i class="fa-solid fa-plus px-1"></i>{{ __('Add A Pre-Define Model') }}<i
                            class="fa-solid fa-arrow-down px-2"></i>
                    </button>
                </div><!--new-st-->
            </div>
        </div><!--row-->
        </div><!--container-->
    </section><!--m-groups-->
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif
    <div class="three-content mt-2 mb-0">
        <div class="container-fluid">
            <div class="bg p-4" style="background: #cfcbcb; min-height: 50vh;">
                <div class="row">
                    @forelse($scores as $score)
                        <div class="col-lg-3 col-sm-12 col-md-12">
                            <h2 style="text-transform: capitalize; color: blue;">{{ $score->title }}</h2>
                            <span class="text-black-50">{{ __('Custom model') }}</span>
                            <h5 class="text-black-50 mt-3 mb-0">{{ $score->description }}</h5>
                            <div class="d-flex gap-3">
                                <button onclick="showEditScoringDiv({{ $score->id }})"
                                    class="primary-pen btn btn-secondary mb-2 mt-2"><span><i
                                            class="fa-solid fa-pen"></i></span></button>
                                <form action="{{ route('manage_risk.destroy', $score->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mb-2 mt-2"><span><i
                                                class="fa-solid fa-trash"></i></span></button>
                                </form>
                            </div>
                            @include('manage_risk.score_data_edit', [$score->id])
                        </div>
                        <div class="col-lg-5 col-sm-12 col-md-12">
                            <div class="content-text">
                                @foreach ($score->scoreCriterias as $criteria)
                                    @include('manage_risk.score_criteria_edit', [$criteria])
                                    <ul class="d-flex">
                                        <li class=""><a href="#"
                                                onclick="showEditCriterionDiv({{ $criteria->id }})">{{ $criteria->title }}</a></li>
                                        <span class="text-black-50"> {{__("Weight")}} : {{ $criteria->weight }}</span>
                                    </ul>
                                @endforeach
                            </div>
                            {{-- <div class="content-text">
                            <ul class="d-flex">
                                <li class=""><a href="#" onclick="showEditCriterionDiv()">Litige
                                        administratif Franc</a></li>
                                <span class="text-black-50">Weight : 8</span>
                            </ul>
                        </div>
                        <div class="content-text">
                            <ul class="d-flex">
                                <li class=""><a href="#" onclick="showEditCriterionDiv()">Litige
                                        livraison</a></li>
                                <span class="text-black-50">(follow-up action +7 days)</span>
                            </ul>
                        </div>
                        <div class="content-text">
                            <ul class="d-flex">
                                <li class=""><a href="#" onclick="showEditCriterionDiv()">Mise en demeure
                                        envoyee</a></li>
                                <span class="text-black-50">(follow-up action +7 days)</span>
                            </ul>
                        </div> --}}
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 text-lg-end">
                            <div class="the-button mt-3 mb-3 ">
                                <button class="btn btn-secondary d-flex"
                                    onclick="showAddCriterionDiv({{ $score->id }})"><span><i
                                            class="fa-solid fa-plus px-1"></i></span>{{ __('Add a criterion') }}</button>
                            </div>
                        </div>
                        @include('manage_risk.score_criteria_create', [$score])
                    @empty
                        <p>{{ __('No Data Yet...') }}</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
