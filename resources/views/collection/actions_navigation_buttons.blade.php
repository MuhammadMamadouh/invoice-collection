<div class="col-lg-3 col-md-4 col-sm-6">
    <a href="{{route('collection.manual.actions')}}" class="m-1 w-100 btn p-3
        {{ Route::is('collection.manual.actions') ? 'btn-secondary' : 'btn-outline-secondary text-dark' }}">
        <i class="fa-solid fa-hand-point-right"></i> Manual actions
        <span class="badge bg-danger">{{--$manualActionsCount--}}</span>
    </a>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
    <a href="{{route('collection.automatic.actions')}}" class="m-1 w-100 btn p-3
    {{ Route::is('collection.automatic.actions') ? 'btn-secondary' : 'btn-outline-secondary text-dark' }}">
    <i class="fa-solid fa-arrows-rotate"></i> Automatic actions
        <i class="fa-solid fa-triangle-exclamation"></i>
        <span class="badge bg-danger">{{--$automaticActionsCount--}}</span></a>
</div>
<!--btns-->
<div class="col-lg-3 col-md-4 col-sm-6">
    <a href="{{route('collection.actions.history')}}" class="m-1 w-100 btn p-3
    {{ Route::is('collection.actions.history') ? 'btn-secondary' : 'btn-outline-secondary text-dark' }}"><i
            class="fa-solid fa-bars-staggered"></i>Actions history</a>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
    <a href="#" class="m-1 w-100 btn btn-outline-secondary text-dark p-3"><i class="fa-solid fa-bell"></i>
        My Alerts
    <span class="badge bg-danger"></span></a>
</div>
