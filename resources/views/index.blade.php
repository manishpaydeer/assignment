<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Volumetric Weight Calculator.</title>

    {{-- cutome styling --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>

    <div class="container mt-2 justify-content-center">
        <div class="text-center">
            <h2 class="main_heading">Volumetric Weight Calculator.</h2>
        </div>

        <div class="card py-3 px-0">

            <form action="" method="post" id="calculateForm">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <div class="row justify-content-center">
                            <input type="radio" name="type" value="KG" checked id="Kg">
                            <label class="col-md-5" for="Kg">Kg (cm) </label>
                        </div>
                        <p class="description"> (Length (cm) x Width (cm) x Height (cm) / 6000)</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="row justify-content-center">
                            <input type="radio" name="type" value="LBS" id="lbs">
                            <label class="col-md-5" for="lbs">lbs (inch)</label>
                        </div>
                        <p class="description"> (Length (cm) x Width (cm) x Height (cm) / 166)</p>
                    </div>
                </div>
                <div class="row form-section justify-content-center">
                    {{-- Taking input from user --}}
                    <div class="col-md-7 justify-content-center">
                        <div class="row mt-2 col-md-12 align-items-center">
                            <div class="col-md-2">
                                <label for="Length" class="col-form-label">Length</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" id="Length" name="length" class="form-control"
                                    aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                        <div class="row mt-2 col-md-12 align-items-center">
                            <div class="col-md-2">
                                <label for="Width" class="col-form-label">Width</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" id="Width" name="width" class="form-control"
                                    aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                        <div class="row mt-2 col-md-12 align-items-center">
                            <div class="col-md-2">
                                <label for="Height" class="col-form-label">Height</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" id="Height" name="height" class="form-control"
                                    aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                        <div class="row mt-2 col-md-12 align-items-center">
                            <div class="col-md-2">
                                <label for="Quantity" class="col-form-label">Quantity</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" value="1" readonly id="Quantity" class="form-control"
                                    aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>
                </div>

            </form>

            <div class="resultSection mt-4">
                <div class="row justify-content-center">
                    <div class="row mt-2 col-md-6 justify-content-center">
                        <div class="col-md-8 text-center">
                            <label for="Volume"  class="main_heading" >Volume (cm)</label>
                            <input type="text" disabled readonly id="finalVolumecm" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                    <div class="row mt-2 col-md-6 justify-content-center">
                        <div class="col-md-8 text-center">
                            <label for="Height" class="main_heading">Volume (lbs)</label>
                            <input type="text" disabled  readonly id="finalVolumelbs"  class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
