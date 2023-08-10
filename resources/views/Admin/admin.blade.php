<!DOCTYPE html>
<html lang="en">

<head>
    @include('tools.adminFunction')
    <style>
        #success_msg {
            position: absolute;
            background-color: rgba(255, 0, 0, 0.233);
            border: none;
            color: white;
            margin: auto;
            align-items: center;
            right: 25px;
        }

        #success_msg button {
            background-color: rgb(0, 0, 0);
            color: white;
            border-radius: 20px;
            border: none;
            margin-left: 30px
        }

        #service_type {
            background-color: black;
        }
    </style>
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
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12 userBody">
                        <div id="notification"></div>
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Users Table</h6>
                            <table class="table table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Vehicle</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody" id="tBody">

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6 vehicleHide">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4 UserName">Basic Form</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Vehicle Name</th>
                                        <th scope="col">Vehicle Number</th>
                                    </tr>
                                </thead>
                                <tbody id="view-tbody">

                                </tbody>
                            </table>
                            <button class="btn btn-dark clearForm vehicleForm">Cancel</button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6 formHide">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4 UserName">Basic Form</h6>
                            <form class="vehicle-form">
                                @csrf
                                <div class="mb-3">
                                    <label for="formName" class="form-label">Vehicle Number Plate</label>
                                    <input type="text" class="form-control" id="formName">
                                    <input type="hidden" id="UserID"> {{--
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div> --}}
                                </div>
                                <div class="mb-3">
                                    <label for="VehicleName" class="form-label">Vehicle Name</label>
                                    <input type="text" class="form-control" id="VehicleName">
                                </div>
                                <button class="btn btn-primary vehicleAdd">Add</button>
                                <button class="btn btn-dark clearForm">Cancel</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-12 ServiceHide">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4" id="vehicle_id"></h6>
                            <table class="table table-hover">
                                <thead id="ServiceHead">
                                    <tr>
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
                            <button class="btn btn-primary btn-history-add" id="HistoryAdd">Add</button>
                            <button class="btn btn-dark ServiceClear">Cancel</button>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6 ShowformHide">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4 ">Service Update</h6>
                            <form class="history-form">
                                @csrf
                                <div class="mb-3">
                                    <label for="discription" class="form-label">Service Discription</label>
                                    <input type="text" class="form-control" id="discription">
                                    <input type="hidden" id="vehicleID">
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="service_type">Service Type</label>
                                        <select class="form-control" id="service_type">
                                        <option>Full Service</option>
                                        <option>Normal Service</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="payments" class="form-label">Service fee</label>
                                    <input type="text" class="form-control" id="payments">
                                </div>
                                <div class="mb-3">
                                    <label for="last_km" class="form-label">KM covered during servicing</label>
                                    <input type="text" class="form-control" id="last_km">
                                </div>
                                <div class="mb-3">
                                    <label for="next_km" class="form-label">Driven KM after service</label>
                                    <input type="text" class="form-control" id="next_km">
                                </div>
                                <div class="mb-3">
                                    <label for="worker" class="form-label">Worker Name</label>
                                    <input type="text" class="form-control" id="worker">
                                </div>
                                <div class="mb-3">
                                    <label for="last_date" class="form-label">Service Date</label>
                                    <input type="text" class="form-control" id="last_date">
                                </div>
                                <button class="btn btn-primary vehicleHistoryAdd">Add</button>
                                <button class="btn btn-dark clearHistoryForm">Cancel</button>
                            </form>
                        </div>
                    </div>
                    <!-- Table End -->


                    <!-- Footer Start -->
                    @include('tools.adminFooter')
                    <!-- Footer End -->
                </div>
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
            </div>

            @include('tools.adminJS')

</body>
<script>
    $(document).ready(function() {
        $('.formHide').hide();
        $('.ShowformHide').hide();
        $('.vehicleHide').hide();
        $.ajax({
            url: '/fetch',
            success: function(response) {
                $('tbody').html("");
                $.each(response.data, function(key, item) {
                    $('.tbody').append(
                        '<tr>\
                        <td scope="row">' + item.id + '</td>\
                        <td>' + item.name + '</td>\
                        <td>' + item.email + '</td>\
                        <td>' + item.role + '</td>\
                        <td class="addBTN"><button class="btn btn-primary btn-vehicle-add" id="VehicleAdd">Add</button>\
                            <button class="btn btn-dark btn-vehicle-view" id="VehicleView">View</button></td>\
                    </tr>'
                    )
                });
            }
        });
        $('tbody').on('click', '.btn-vehicle-add', function(e) {
            e.preventDefault();
            // Get the row containing the clicked button
            var row = $(this).closest('tr');
            // Access data in the row using jQuery, for example:
            var id = row.find('td:eq(0)').text();
            var name = row.find('td:eq(1)').text();
            $('.userBody').removeClass('col-xl-12');
            $('.userBody').addClass('col-xl-6');
            $('.thead th:eq(3), .tbody td:nth-child(4)').hide();
            $('.thead th:eq(4), .tbody td:nth-child(5)').hide();
            $('.formHide').show();
            $('.UserName').text(name + '\'s');
            $('#UserID').val(id);
        });

        $('tbody').on('click', '.btn-vehicle-view', function(e) {
            e.preventDefault();
            // Get the row containing the clicked button
            var row = $(this).closest('tr');
            var id = row.find('td:eq(0)').text();
            var name = row.find('td:eq(1)').text();
            $.ajax({
                url: '/vehicle-view/' + id,
                success: function(response) {
                    $('.vehicleHide').show();
                    $('#view-tbody').html("");
                    $.each(response.data, function(key, item) {
                        $('#view-tbody').append(
                            '<tr>\
                        <td scope="row">' + item.name + '</td>\
                        <td>' + item.vehicle_number + '</td>\
                        <td><button class="btn btn-primary btn-Service" id="Service">Service Details</button></td>\
                    </tr>'
                        )
                    });
                }
            });
            $('.userBody').removeClass('col-xl-12');
            $('.userBody').addClass('col-xl-6');
            $('.thead th:eq(3), .tbody td:nth-child(4)').hide();
            $('.thead th:eq(4), .tbody td:nth-child(5)').hide();
            $('.UserName').text(name + '\'s vehicles');
        });

        $(this).on('click', '.clearForm', function(e) {
            e.preventDefault();
            $('.userBody').removeClass('col-xl-6');
            $('.userBody').addClass('col-xl-12');
            $('.thead th:eq(3), .tbody td:nth-child(4)').show();
            $('.thead th:eq(4), .tbody td:nth-child(5)').show();
            $('#view-tbody').html("");
            $('.formHide').hide();
            $('.vehicleHide').hide();
            $('.vehicle-form').find('input').val("");

        });

        function showAndAutoCloseAlert(message) {
            $('#notification').append(
                '<div id="success_msg" class="alert alert-primary alert-dismissible fade show" role="alert">\
                ' + message + '.\
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                <span aria-hidden="true">&times;</span>\
                </button>\
            </div>'
            );

            setTimeout(function() {
                $('#success_msg').alert('close');
            }, 3000); // 3000 milliseconds (3 seconds) delay before auto-closing
        }

        $(document).on('click', '.vehicleAdd', function(e) {
            e.preventDefault();
            // console.log('hello');
            var formData = {}; // Create an empty object to store the form data
            // Find all input elements inside the '.vehicle-form' class
            $('.vehicle-form').find('input').each(function() {
                var inputName = $(this).attr('id'); // Get the name attribute of the input
                var inputValue = $(this).val(); // Get the value of the input
                formData[inputName] = inputValue; // Store the input value in the formData object
            });

            // console.log('Form Data:', formData);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            $.ajax({
                type: "post",
                url: "/addVehicle",
                data: formData,
                dataType: "json",
                success: function(response) {
                    if (response.status == 200) {
                        showAndAutoCloseAlert(response.messages);
                        $('.clearForm').click(); // Access the data using response.newdata
                    } else {
                        showAndAutoCloseAlert('All fields are required.');
                        // $('.clearForm').click();
                    }

                }
            });
        });


        //Service Add Field making alls are in this section----------------------------------------------------------------

        function fech(id) {
            // console.log(id);
            $.ajax({
                url: "/servies/" + id,
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
                }
            });
        }

        $(".vehicleHistoryAdd").click(function(e) {
            e.preventDefault();
            var formData = {};
            var id = $("#vehicle_id").text();
            $('.history-form').find('input, select').each(function() {
                var inputName = $(this).attr('id');
                var inputValue = $(this).val();
                formData[inputName] = inputValue;
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            console.log(formData);
            $.ajax({
                type: "post",
                url: "/saveHistory/" + id,
                data: formData,
                dataType: "json",
                success: function(response) {
                    if (response.status == 200) {
                        showAndAutoCloseAlert(response.messages);
                        $('.clearHistoryForm').click();
                        fech(response.id); // Access the data using response.newdata
                    } else {
                        showAndAutoCloseAlert('All fields are required.');
                        // $('.clearForm').click();
                    }

                }
            });



        });

        $('.ServiceHide').hide();
        $('#view-tbody').on('click', '.btn-Service', function(e) {
            e.preventDefault();
            $('.ServiceHide').show();
            $('.vehicleForm').hide();
            $('.btn-Service').hide();
            $(this).show();
            var row = $(this).closest('tr');
            var id = row.find('td:eq(1)').text();
            $('#vehicle_id').text(id);
            $('#vehicleID').val(id);
            fech(id);
        });

        function tableShow() {
            $('.ServiceHide').removeClass('col-xl-6');
            $('.ServiceHide').addClass('col-xl-12');
            $('#ServiceHead th:eq(1), #ServiceBody td:nth-child(1)').show();
            $('#ServiceHead th:eq(2), #ServiceBody td:nth-child(6)').show();
            $('#ServiceHead th:eq(3), #ServiceBody td:nth-child(5)').show();
            $('#ServiceHead th:eq(4), #ServiceBody td:nth-child(4)').show();
            $('#ServiceHead th:eq(5), #ServiceBody td:nth-child(3)').show();
            $('#ServiceHead th:eq(0), #ServiceBody td:nth-child(2)').show();
            $('.ServiceClear').show();
        };

        function tableHide() {
            $('.ServiceHide').removeClass('col-xl-12');
            $('.ServiceHide').addClass('col-xl-6');
            $('#ServiceHead th:eq(1), #ServiceBody td:nth-child(1)').hide();
            $('#ServiceHead th:eq(2), #ServiceBody td:nth-child(6)').hide();
            $('#ServiceHead th:eq(3), #ServiceBody td:nth-child(5)').hide();
            $('#ServiceHead th:eq(4), #ServiceBody td:nth-child(4)').hide();
            $('#ServiceHead th:eq(5), #ServiceBody td:nth-child(3)').hide();
            $('#ServiceHead th:eq(0), #ServiceBody td:nth-child(2)').hide();
        };


        $('.ServiceClear').click(function(e) {
            e.preventDefault();
            $('.ServiceHide').hide();
            $('.vehicleForm').show();
            $('.btn-Service').show();
            tableShow();

        });

        $('#HistoryAdd').click(function(e) {
            e.preventDefault();
            tableHide();
            $('.ServiceClear').hide();
            $('.ShowformHide').show();
            // $('.UserName').text(name + '\'s');
            // $('#UserID').val(id);
        });

        $(".clearHistoryForm").click(function(e) {
            e.preventDefault();
            $('.ShowformHide').hide();
            tableShow();
            $('.history-form').find('input').val('');


        });

    });
</script>

</html>
