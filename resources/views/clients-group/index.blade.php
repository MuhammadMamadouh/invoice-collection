@extends('layouts.dashboard.app')
@section('content')
    @include('clients-group.create')


    <section class="m-groups my-2">
        <div class="container-fluid">
            <div class="t-manage text-center text-capitalize">
                <h4>{{ _('Manage clients groups') }}</h4>
            </div>
            <!--t-manage-->
            <div class="create my-3">
                <button class="btn btn-secondary" onclick="showCreateClientGroupDiv()">
                    <i class="fa-solid fa-plus"></i> {{ _('Create a group') }}
                </button>
            </div>

            <!-- pagination -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-group d-flex align-items-center">
                    {{ __('display') }}
                    <form action="{{ route('clients-group.store') }}" method="POST">
                        <select name="per_page" class="form-select w-auto m-2" onchange="this.form.submit()">
                            <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                            <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
                            <option value="{{ $clientsGroups->total() }}"
                                {{ request('per_page') == $clientsGroups->total() ? 'selected' : '' }}>
                                {{ $clientsGroups->total() }}</option>
                        </select>
                    </form>
                    <div>{{ $clientsGroups->total() }} items</div>
                </div>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" aria-describedby="emailHelp"
                            placeholder="Multi-columns search" />
                    </div>
                </form>
            </div>

            <div class="d-flex justify-content-center">
                {{ $clientsGroups->appends(['per_page' => request('per_page')])->links('pagination::default') }}
            </div>


            <div class="groups-t position-relative ">
                <table class="table table-striped rounded">
                    <tr class="kall">
                        <td class="check-name border-0">
                            <input type="checkbox" class="chec bg-body-tertiary">
                            <p class="name-d fw-bold">{{ __('Group Name') }}</p>
                        </td>
                        <td class="border-0">
                            <div class="d-flex align-items-center justify-content-start gap-1 ">
                                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                                <p class="pris-d name-d fw-bold">
                                    {{ _('No . of clients in the group') }}
                                </p>
                            </div>
                        </td>
                        <td class="border-0">
                            <p class="operate name-d ">
                            </p>
                        </td>
                    </tr>

                    <!--who-->
                    @foreach ($clientsGroups as $clientsGroup)
                        <tr class="kall">
                            <td class="check-name border-0">
                                <input type="checkbox" class="chec bg-body-tertiary">
                                <p class="name-d">{{ $clientsGroup->en_name }}</p>
                            </td>
                            <td class="border-0">
                                <p class="pris-d name-d text-primary num-p">
                                    {{ $clientsGroup->clients_count }}
                                </p>
                            </td>
                            <td class="border-0">
                                <div class="delete-and-edit mt-2 mb-2" style="display: flex;">
                                    <button type="button" class="text-decoration-none btn btn-secondary rounded"style="margin: 0px 10px;"
                                        onclick="showEditGroupDiv({{ $clientsGroup->id }})"><span><i
                                                class="fa-solid fa-pen"></i></span></button>
                                    @include('clients-group.edit', [$clientsGroup])
                                    <form action="{{ route('clients-group.destroy', $clientsGroup->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this client group?')"
                                            class="text-decoration-none btn btn-danger rounded"><span><i class="fa-solid fa-trash"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <form id="delete-all-form" action="{{ route('clients-group.delete-all') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete all client groups?');">
                        <i class="fa-solid fa-trash"></i> {{ _('Delete All') }}
                    </button>
                </form>
            </div>
            <!--create-->
        </div>
        <!--container-->


    </section>
    <!--m-groups-->
@endsection
@section('scripts')
    <!-- JavaScript Code -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        // Form submission handler
        $('#editGroupForm').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission
            $('#edit-group-clients-select option').prop('selected', true);
            var formData = $(this).serialize();
            var id = $('#editGroupId').val();
            $.ajax({
                url: '/clients-group/' + id,
                type: 'PATCH', // Change POST to PATCH
                data: formData,
                success: function(response) {
                    alert('Data updated successfully!');
                    $('.edit-group-div').hide(); // Hide the edit form
                    window.location.reload(); // Reload the page
                },
                error: function(xhr) {
                    alert('An error occurred: ' + xhr.responseText);
                }
            });
        });


        function showEditGroupDiv(id) {
            $.ajax({
                url: '/clients-group/' + id,
                type: 'GET',
                success: function(response) {
                    // Populate the form fields with the data from the response
                    $('#editGroupId').val(response.id);
                    $('#name').val(response.en_name);

                    // append response.clients to the select with id edit-group-clients-select
                    $('#edit-group-clients-select').empty();
                    $.each(response.clients, function(index, client) {
                        $('#edit-group-clients-select').append('<option selected value="' + client.id +
                            '">' + client.company_code + ' / ' + client.company_name + '</option>');
                    });

                    // Show the edit form
                    $('.edit-group-div').removeClass('d-none');
                },
                error: function(xhr) {
                    alert('An error occurred: ' + xhr.responseText);
                }
            });
        }
        $(document).ready(function() {
            // Move selected clients to the right list
            $('.fa-circle-arrow-right').click(function() {
                $('#edit-clients-select option:selected').each(function() {
                    $(this).remove().appendTo('#edit-group-clients-select');
                });
            });

            // Move selected clients to the left list
            $('.fa-circle-arrow-left').click(function() {
                $('#edit-group-clients-select option:selected').each(function() {
                    $(this).remove().appendTo('#edit-clients-select');
                });
            });
        });

        function hideEditGroupDiv() {
            $('.edit-group-div').addClass('d-none'); // Hide the edit form
        }
    </script>
@endsection
