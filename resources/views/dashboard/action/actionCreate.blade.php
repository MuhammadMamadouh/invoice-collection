<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Action</title>
</head>
<body>
    <h1>{{__('message.create_action')}}</h1>
    <form action="{{ route('actions.store') }}" method="POST">
        @csrf
        <label for="en_name">{{ __('message.action_name') }}:</label>
        <input type="text" id="en_name" name="en_name" >
        @error('en_name')
        {{ $message }}
        @enderror
        <br>
        <label for="number_of_days">{{ __('message.number_of_days') }}:</label>
        <input type="number" id="number_of_days" name="number_of_days" >
        @error('number_of_days')
        {{ $message }}
        @enderror
        <br>
        <label for="actionType_id">{{ __('message.action_type') }}:</label>
        <select id="actionType_id" name="actionType_id" >
            <option selected> </option>
            @foreach($actionTypes as $type)
                <option value="{{ $type->id }}">{{ $type->en_name }}</option>
            @endforeach
        </select>
        @error('actionType_id')
        {{ $message }}
        @enderror
        <br>
        <button type="submit">Create Action</button>
    </form>
</body>
</html>
