<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Service</title>

    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    @include('header')

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Service</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Ajouter service</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Ajouter Service</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                                      {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="nom">Nom de service :</label>
                                            <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrer le Nom" required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="description">Description :</label>
                                            <div class="input-group">
                                                <textarea name="description" class="form-control" id="description" aria-label="With textarea" required></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="image">Image :</label>
                                            <div class="input-group">
                                                <input class="form-control" type="file" name="image" id="image" required>
                                            </div>
                                        </div>

                                        <div class="card-action">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <button type="button" class="btn btn-danger">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('footer')

    <!-- SweetAlert Initialization Script -->
    <script>
        // Display SweetAlert on successful submission
        @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 3000 // Close alert after 3 seconds
        });
        @endif
    </script>

</body>
</html>
