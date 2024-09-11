<div class="col-lg-4 text-start">
    <div class="d-flex align-items-center justify-content-between">
        <select class="form-select m-auto w-50" aria-label="Default select example" wire:model.live='selectedContactsId'>
            <option selected>Contact:</option>
            @foreach ($client->contacts as $contact)
                <option value="{{ $contact->id }}">{{ $contact->first_name }} / {{ $contact->last_name }} ({{$contact->clientRole->name}})</option>
            @endforeach
        </select>
    </div>
    @if($selectedContact)
            <div class="d-flex align-items-center justify-content-between">
                <p class="fw-bold">Role:</p>
                <p class="">{{ $selectedContact->clientRole->name ?? 'a' }}</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <p class="fw-bold">Name:</p>
                <p class="">{{ $selectedContact->first_name ?? 'a' }} {{ $selectedContact->last_name ?? 'a' }}</p>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                @<a href="">{{ $selectedContact->email ?? 'a' }}</a>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-phone"></i> &nbsp; &nbsp;
                <a href=""> {{ $selectedContact->phone ?? 'a' }}</a> &nbsp;
                (Phone)
            </div>
            <div class="d-flex align-items-center justify-content-center">
                @if ($selectedContact->contact_for_collection == 1)
                    <i class="fa-solid fa-star"></i> &nbsp; {{ __('Contact for collection') }}
                @endif
            </div>
    @endif
</div>
