// jquery code --> data filter
$(document).ready(function () {
    $("#search_btn").click(function (event) {
        event.preventDefault(); // Prevent the form from being submitted

        var value = $("#search").val().toLowerCase();
        var $tableRows = $("#myTable tr");

        $tableRows.hide(); // Hide all table rows initially

        $tableRows.filter(function () {
            return $(this).text().toLowerCase().indexOf(value) > -1;
        }).show();

        // Display "No record found" message if no rows match the search
        if ($tableRows.filter(":visible").length === 0) {
            $("#noRecordFound").show();
        } else {
            $("#noRecordFound").hide();
        }
    });
});