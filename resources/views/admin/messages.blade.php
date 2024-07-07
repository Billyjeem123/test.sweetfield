@include('admin.includes.header')
<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    @include('admin.includes.sidebar')


    <!-- Content Start -->
    <div class="content">
        @include('admin.includes.navbar')

        <!-- Orders Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row">

                <div class="col-md-12 mb-4">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Customer's Order(s)</h6>
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">Contact No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <th scope="row">{{ $contact->id }}</th>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>{{ $contact->created_at->format('Y-m-d') }}</td>
                                        <td>
                                            <form action="{{ route('messages.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                    @include('admin.partials._pagination', ['items' => $contacts])
                </div>
                <!-- ----- -->
            </div>
        </div>
        <!-- Orders End -->


@include('admin.includes.footer')
