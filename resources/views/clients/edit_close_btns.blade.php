<div class="d-flex justify-content-end gap-3 w-25">
    <div class="icon-holab  ">
        <i class="fa-solid fa-pen text-primary p-2 bg-light"
            onclick="EditHolap({{ $client->id }})"
            style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i>
        <a href="holapDetails.html" target="_blank"><i
                class="fa-solid fa-maximize text-primary p-2 bg-light"style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i></a>
        <i class="fa-solid fa-close text-light p-2 bg-danger"
            onclick="closeHolap({{ $client->id }})"
            style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i>
    </div>
</div>
