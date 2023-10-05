<?php
include('../header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .tdCss {
            padding: 4px 6px !important;
        }

        table.dataTable {
            border-collapse: collapse !important;
        }

        table td {
            font-size: 14px;
            white-space: nowrap;
        }

        .dataTables_length {
            margin-bottom: 20px;
        }

        #emp-data th {
            white-space: nowrap !important;
        }

        #emp-data {
                display: block;
                overflow-x: auto;
            }

        @media only screen and (min-width:1700px) {
            #emp-data {
                display: table;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col">
                <h4 class="pt-2 mb-0">Name</h4>
            </div>
            <div class="col-auto">
                <button class="btn rounded-pill common-btn add-new" data-bs-toggle="modal" data-bs-target="#addModal" href="emp_name_db.php">+
                    Add New</button>
            </div>
        </div>
        <div class="divCss editForm">
            <table class="table table-bordered text-center mb-0" id="emp-data">
                <thead>
                    <tr class="bg-light">
                        <th>Sr</th>
                        <th>Reference No</th>
                        <th>Customer</th>
                        <th>Vehicle</th>
                        <th>Duration of Booking</th>
                        <th>Slot Number</th>
                        <th>Status</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            7545
                        </td>
                        <td>
                            Data
                        </td>
                        <td>
                            RUV
                        </td>
                        <td>
                            1:00 hrs
                        </td>
                        <td>
                            3
                        </td>
                        <td>
                            Data
                        </td>
                        <td>
                            Data
                        </td>

                        <td class="tdCss">
                            10
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            7545
                        </td>
                        <td>
                            Data
                        </td>
                        <td>
                            RUV
                        </td>
                        <td>
                            1:00 hrs
                        </td>
                        <td>
                            3
                        </td>
                        <td>
                            Data
                        </td>
                        <td>
                            Data
                        </td>

                        <td class="tdCss">
                            10
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            7545
                        </td>
                        <td>
                            Data
                        </td>
                        <td>
                            RUV
                        </td>
                        <td>
                            1:00 hrs
                        </td>
                        <td>
                            3
                        </td>
                        <td>
                            Data
                        </td>
                        <td>
                            Data
                        </td>

                        <td class="tdCss">
                            10
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            7545
                        </td>
                        <td>
                            Data
                        </td>
                        <td>
                            RUV
                        </td>
                        <td>
                            1:00 hrs
                        </td>
                        <td>
                            3
                        </td>
                        <td>
                            Data
                        </td>
                        <td>
                            Data
                        </td>

                        <td class="tdCss">
                            10
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!------------------ Add new modal ------------------->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="modal-body" id="addForm" action="emp_name_db.php" method="post">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pay_code">Pay Code</label>
                            <input type="text" name="pay_code" id="pay_code" class="form-control" placeholder="Enter Pay Code" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="department">Department</label>
                            <input type="text" name="department" id="department" class="form-control" placeholder="Enter Department" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Team</label>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="contractor">Contractor Name</label>

                        </div>
                        <div class="col-md-6">
                            <label for="rate">Rate</label>
                            <input type="number" step="0.01" name="rate" id="rate" class="form-control" placeholder="Enter Rate" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="doe">DOJ</label>
                            <input type="date" name="doj" id="doj" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="doe">DOB</label>
                            <input type="date" name="dob" id="dob" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Status</label>
                            <select class="form-select" aria-label="Default select example" name="status" id="idStatus">
                                <option value="" disabled selected>Select Option</option>
                                <option>Active</option>
                                <option class="text-danger">Left</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="doe">DOE</label>
                            <input type="date" name="doe" id="doe" class="form-control">
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn common-btn btn-sm" form="addForm">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!------------------ edit modal ------------------->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="modal-body" id="editForm" action="emp_name_db.php" method="post">

                </form>
                <div class="modal-footer">
                    <button type="submit" name="update" class="btn common-btn btn-sm" form="editForm">Submit</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#emp-data').DataTable({
            "processing": true,
            "lengthMenu": [10, 25, 50, 75, 100],
            "responsive": {
                "details": true
            },
            "columnDefs": [{
                "className": "dt-center",
                "targets": "_all"
            }],

            dom: 'Bfrtip',
            buttons: ['pageLength'],
            language: {
                searchPlaceholder: "Search..."
            }
        });
        $("#teamDropdown").prop("required", true);
        $("#contractor").prop("required", true);
        $("#idStatus").prop("required", true);
    });
</script>
<?php
include('../footer.php');
?>