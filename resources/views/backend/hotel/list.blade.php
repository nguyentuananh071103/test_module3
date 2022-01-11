<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<a class="btn btn-success mt-3 mb-3" href="{{route('hotels.create')}}">Thêm mới</a>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Code</th>
        <th>Group</th>
        <th>Name</th>
        <th>Sex</th>
        <th>Phone</th>
        <th>CCCD</th>
        <th>Email</th>
        <th>Address</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($hotels as $key => $hotel)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$hotel->group}}</td>
            <td>{{$hotel->name}}</td>
            <td>{{$hotel->sex}}</td>
            <td>{{$hotel->phone}}</td>
            <td>{{$hotel->cccd}}</td>
            <td>{{$hotel->email}}</td>
            <td>{{$hotel->address}}</td>
            <td><a class="btn btn-warning" href="{{route('hotels.update',$hotel->id)}}">Update</a></td>
            <td><a class="btn btn-danger" onclick="return confirm('Are you sure ??')"
                   href="{{route('hotels.delete',$hotel->id)}}">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
