<!DOCTYPE html>
<html lang="en">

<head>
    @include('tools.adminFunction')

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('tools.adminSideBar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('tools.adminHeader')
            <!-- Navbar End -->
            <input type="hidden" id="userID" value="{{ Auth::user()->id }}">

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Last Service time(Km)</p>
                                <h6 class="mb-0" id="before"></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Next Service time (Km)</p>
                                <h6 class="mb-0" id="next"></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->



            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Vehicles</h6>
                        <div class="mb-3">
                            <div class="form-group">
                                <select class="form-control" id="vehicle_name">
                                    <option>--select--</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead id="ServiceHead">
                                <tr class="text-white">
                                    <th scope="col">Discription</th>
                                    <th scope="col">Service Type</th>
                                    <th scope="col">payments</th>
                                    <th scope="col">Before-KM</th>
                                    <th scope="col">After-KM</th>
                                    <th scope="col">Worker</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody id="ServiceBody">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <!-- Footer Start -->
            @include('tools.adminFooter')
            <!-- Footer End -->
        </div>
        <!-- Content End -->
        <input type="hidden" id="vehicleID">


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @include('tools.adminJS')
    <script>
        $(document).ready(function() {
            var Userid = $("#userID").val();

            $.ajax({
                type: "get",
                url: "/before/" + Userid,
                success: function(response) {
                    $('#before').text(response.last_km + " km");
                    $('#next').text(response.next_km + " km");
                    $('#vehicleID').val(response.vehicle_id);
                }
            });
            // console.log(Userid);
            $.ajax({
                type: "get",
                url: "/list/" + Userid,
                success: function(response) {

                    $.each(response.data, function(key, item) {
                        $('#vehicle_name').append(
                            '<option>' + item.vehicle_number + '</option>'
                        )
                    });
                }
            });

            $('#vehicle_name').on('change', function() {
                var selectedValue = $(this).val(); // Get the selected option value

                // Perform an AJAX request to fetch data based on the selected option
                $.ajax({
                    type: 'get',
                    url: '/get-vehicle-details/' + selectedValue, // Replace with your actual route
                    success: function(response) {
                        $('#ServiceBody').html("");
                        $.each(response.data, function(key, item) {
                            $('#ServiceBody').append(
                                '<tr>\
                                <td scope="row">' + item.discription + '</td>\
                                <td>' + item.service_type + '</td>\
                                <td>' + item.payments + '</td>\
                                <td>' + item.last_km + '</td>\
                                <td>' + item.next_km + '</td>\
                                <td>' + item.worker + '</td>\
                                <td>' + item.last_date + '</td>\
                            </tr>'
                            )
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });


        });
    </script>
</body>

</html>