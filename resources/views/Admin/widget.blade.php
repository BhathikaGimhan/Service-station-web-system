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


            <!-- Widget Start -->
            <div class="container-fluid pt-4 px-4">
                @if (Auth::user()->role == 'Admin')
                <div class="row g-4">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Admin: Users Bokking</h6>
                                <!-- <a id="Checking" style="color: #EB1616"></a> -->
                            </div>
                            <table class="table table-hover table-inverse table-responsive">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>All Users Booking Date & Time</th>
                                        <th>User's Email</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Booking</h6>
                                <a id="Checking" style="color: #EB1616"></a>
                            </div>
                            <form class="bookingForm">
                                @csrf
                                <div class="d-flex mb-2">
                                    <input class="form-control bg-transparent" type="datetime-local" id="DateTime" placeholder="Enter task">
                                    <input type="hidden" id="userID" value="{{ Auth::user()->id }}">
                                    <input type="hidden" id="availability" value="{{ Auth::user()->email }}">
                                    <button type="button" id="AddBTN" class="btn btn-primary ms-2 addBTN">Add</button>
                                </div>
                            </form>
                            <div class="dates">
                                <div class="d-flex align-items-center border-bottom py-2">
                                    <div class="w-100 ms-3">
                                        <div class="d-flex w-100 align-items-center justify-content-between">
                                            <span>Short task goes here...</span>
                                            <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widget End -->


            <!-- Footer Start -->
            @include('tools.adminFooter')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('tools.adminJS')
    <script>
        $(document).ready(function() {
            // $('.addBTN').click(function(e) {
            //     e.preventDefault();
            //     console.log("Checking");

            // });
            fech();
            fullFech();
            $('#AddBTN').prop('disabled', true);

            $('#DateTime').on('change', function() {
                var formData = $(this).val();
                // console.log(formData);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                });
                $.ajax({
                    type: "post",
                    url: "/check_date_time/" + formData,
                    data: formData,
                    dataType: "json",
                    success: function(response) {
                        var res = response.data;
                        $('#Checking').text('Wait a moment to check if your date is available');
                        // console.log(res);frequently-asked-question
                        if (res == null) {
                            setTimeout(function() {
                                $('#Checking').text('Your date and time are available');
                                $('#AddBTN').prop('disabled', false);
                            }, 2000);
                        } else {
                            $('#Checking').text('Sorry, this time is not available');
                        }
                    }
                });

            });


            $(document).on('click', '.addBTN', function(e) {
                e.preventDefault();
                var formData = {};
                $('.bookingForm').find('input').each(function() {
                    var inputName = $(this).attr('id');
                    var inputValue = $(this).val();
                    formData[inputName] = inputValue;
                });
                console.log("workbook");
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                });
                $.ajax({
                    type: "post",
                    url: "/add-date",
                    data: formData,
                    dataType: "json",
                    success: function(response) {
                        $('#DateTime').val("");
                        $('#Checking').text('success');
                        $('#AddBTN').prop('disabled', true);
                        fech();
                        fullFech();
                        setTimeout(function() {
                            $('#Checking').text('');
                        }, 2000);

                    }
                });

            });

            function fech() {
                var id = $('#userID').val();
                $.ajax({
                    type: "get",
                    url: "/fech-date/" + id,
                    success: function(response) {
                        $('.dates').html("");
                        $.each(response.data, function(key, item) {
                            var dateTimeParts = item.work_time.split('T'); // Split into date and time parts
                            var formattedDateTime = dateTimeParts[0] + ', ' + dateTimeParts[1];
                            $('.dates').append(
                                '<div class="d-flex align-items-center border-bottom py-2" id="' + item.id + '">\
                                    <div class="w-100 ms-3">\
                                        <div class="d-flex w-100 align-items-center justify-content-between">\
                                            <span>' + formattedDateTime + '</span>\
                                            <button class="btn btn-sm text-primary delete"><i class="fa fa-times"></i></button>\
                                        </div>\
                                    </div>\
                                </div>'
                            )
                        });
                    }
                });
            }

            $(this).on('click', '.delete', function(e) {
                e.preventDefault();
                var id = $(this).closest('.border-bottom').attr('id');
                console.log(id);
                $.ajax({
                    type: "get",
                    url: "/delete-date/" + id,
                    success: function(response) {
                        fech();
                        fullFech();
                    }
                });
            });

            function fullFech() {
                $.ajax({
                    type: "get",
                    url: "/user-date-fech",
                    success: function(response) {
                        $('.tbody').html("");
                        $.each(response.data, function(key, item) {
                            var dateTimeParts = item.work_time.split('T'); // Split into date and time parts
                            var formattedDateTime = dateTimeParts[0] + ', ' + dateTimeParts[1]; // Format as desired
                            $('.tbody').append(
                                '<tr>\
                                    <td>' + formattedDateTime + '</td>\
                                    <td>' + item.availability + '</td>\
                                </tr>'
                            );
                        });
                    }
                });
            }

        });
    </script>
</body>

</html>