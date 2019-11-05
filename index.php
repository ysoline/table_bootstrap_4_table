<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/2a8326ad33.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>

<style>
select.form-control {
    width: 200px;
}
</style>
<button class="btn btn-success m-2" id="target">Refresh</button>

<table id="table" data-height="650" data-sort-name="name" data-toggle="table" data-pagination="true" data-search="true"
    class="table">

    <thead>
        <tr>
            <th data-field="id" class="text-light bg-primary" data-sortable="true">ID</th>
            <th data-field="name" class="text-light bg-primary" data-sortable="true">Item Name</th>
            <th data-field="price" class="text-light bg-primary" data-sortable="true">Item Price</th>
        </tr>
    </thead>

    <tbody>

        <tr class='refresh'>
            <td class="text-dark bg-light">Item 1</td>
            <td class="text-dark bg-light">Item 2</td>
            <td class="text-dark bg-light">Item 3</td>
        </tr>
        <tr>
            <td class="text-dark bg-light">Item 2</td>
            <td class="text-dark bg-light">Item 2</td>
            <td class="text-dark bg-light">Item 4</td>
        </tr>
        <tr>
            <td class="text-dark bg-light">Item 1</td>
            <td class="text-dark bg-light">Item 2</td>
            <td class="text-dark bg-light">Item 3</td>
        </tr>
        <tr>
            <td class="text-dark bg-light">Item 1</td>
            <td class="text-dark bg-light">Item 2</td>
            <td class="text-dark bg-light">Item 3</td>
        </tr>
        <tr>
            <td class="text-dark bg-light">Item 1</td>
            <td class="text-dark bg-light">Item 2</td>
            <td class="text-dark bg-light">Item 3</td>
        </tr>
        <tr>
            <td class="text-dark bg-light">Item 1</td>
            <td class="text-dark bg-light">Item 2</td>
            <td class="text-dark bg-light">Item 3</td>
        </tr>
        <tr>
            <td class="text-dark bg-light">Item 1</td>
            <td class="text-dark bg-light">Item 2</td>
            <td class="text-dark bg-light">Item 3</td>
        </tr>
        <tr>
            <td class="text-dark bg-light">Item 1</td>
            <td class="text-dark bg-light">Item 2</td>
            <td class="text-dark bg-light">Item 3</td>
        </tr>
        <tr>
            <td class="text-dark bg-light">Item 1</td>
            <td class="text-dark bg-light">Item 2</td>
            <td class="text-dark bg-light">Item 3</td>
        </tr>
        <tr>
            <td class="text-dark bg-light">Item 1</td>
            <td class="text-dark bg-light">Item 2</td>
            <td class="text-dark bg-light">Item 3</td>
        </tr>
        <tr>
            <td class="text-dark bg-light">Item 1</td>
            <td class="text-dark bg-light">Item 2</td>
            <td class="text-dark bg-light">Item 3</td>
        </tr>
        <tr>
            <td class="text-dark bg-light">Item 1</td>
            <td class="text-dark bg-light">Item 2</td>
            <td class="text-dark bg-light">Item 3</td>
        </tr>

    </tbody>

</table>

<script>
$("#target").click(function() {
    alert('clicked')
    $(".refresh").load("index.php .refresh");
});
</script>