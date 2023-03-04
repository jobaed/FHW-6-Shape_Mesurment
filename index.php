<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Shape Measurement</title>
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="col-md-4 mt-5 p-4 shadow rounded">
            <h3 class="text-center mb-3 text-uppercase" style="font-weight: 600;">
                Shape Calculator 
            </h3>
            <form action="process.php" method="post">
                <label for="">Select Shape:</label>
                <select name="shape" id="shape" class="form-control mb-3" required>
                    <option value="">Select Shape</option>
                    <option value="circle">Circle</option>
                    <option value="rectangle">Rectangle</option>
                    <option value="tringle">Tringle</option>
                </select>

                <label for="mesurment" class="display-block">Mesurment:</label>
                <input type="text" class="form-control mb-3" name="mesurment1" id="" placeholder="Enter radius, base or langth" required>
                <input type="text" class="form-control mb-3 d-none" name="mesurment2" id="input-fild" placeholder="Enter height or width">

                <button type="submit" class="btn btn-primary">Meserment</button>
            </form>
        </div>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $("#shape").change(function() {
            if ($(this).val() == 'rectangle') {
                $('#input-fild').removeClass('d-none');
            } else if ($(this).val() == 'tringle') {
                $('#input-fild').removeClass('d-none');
            } else {
                $('#input-fild').addClass('d-none');
            }
        });
    });
</script>

</html>