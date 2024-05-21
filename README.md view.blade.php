
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>All View data</title>
</head>

<body>
    {{-- <div class="container">
        <div class="form-group col-md-4">
            <select class="form-control" id="zone" name="zone">
                @if (count($zones) > 0)
                    @foreach ($zones as $zones)
                        <option value="{{ $zones['id'] }}">{{ $zones->name }}</option>
                    @endforeach
                @endif

            </select>
        </div>

        <table>
            <tr>
                <th>s.no</th>
                <th>s.name</th>
            </tr>
            <tbody>
                @if (count($cityes) > 0)
                @foreach ($cityes as $cityes)
                <tr>
                    <td>{{$cityes['id']}}</td>
                    <td>{{$cityes['name']}}</td>
                </tr>

                @endforeach
                @endif
            </tbody>
        </table>
    </div> --}}

    <div class="container">

        <div class="form-group col-md-4">
            <select class="form-control" id="city" name="city">
                <option value="">Select city</option>
                @foreach ($city as $list)
                    <option value="{{ $list->id }}">{{ $list->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group col-md-4">
            <select class="form-control" id="zone" name="zone">
                <option value="">Select Zone</option>
            </select>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#city').change(function() {
             let city_id=$(this).val();
              $.ajax({
                url:'/getzone',
                type: 'POST',
                data: 'city_id='+city_id+'&_token={{csrf_token()}}',
                success:function(result){
                    jQuery('#zone').html(result)
                }
              });


                });
            });

    </script>



    {{-- <script>
        $(document).ready(function() {
            $("#zone").on('change', function() {
                var zone = $(this).val();
                $.ajax({
                    url:"{{route('demo')}}",
                    type: "GET",
                    data: {'zone': zone},
                    success: function(data) {
                        console.log(data);
                    }
                });
            });
         });
    </script> --}}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
