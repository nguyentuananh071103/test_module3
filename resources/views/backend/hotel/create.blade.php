<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form action="" method="post">
    @csrf
    <div class="form-row">
        <div class="container">
            <div class="col-12">
                <div class="card" style="margin-left:50px;">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <h3>Thêm mới nhân viên</h3>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nhóm nhân viên</label><br>
                            <select name="group" id="hotel">
                                <option value="Quản trị hệ thống">Quản trị hệ thống</option>
                                <option value="Quản lý nhân sự">Quản lý nhân sự</option>
                                <option value="Quản lý phòng">Quản lý bảo vệ</option>
                                <option value="Quản lý dịch vụ">Quản lý dịch vụ</option>
                                <option value="Quản lý lễ tân">Quản lý lễ tân</option>
                                <option value="Quản lý lễ tân">Quản lý nhà bếp</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Số điện thoại</label>
                            <input class="form-control" name="phone" id="inputPassword4" placeholder="+84"
                                   value="{{old('phone')}}">
                            @error('phone')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Số CCCD</label>
                            <input class="form-control" name="cccd" id="inputPassword4" placeholder="927237173137"
                                   value="{{old('cccd')}}">
                            @error('cccd')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Họ tên</label>
                            <input class="form-control" name="name" id="inputPassword4" placeholder="zàng a xùa"
                                   value="{{old('name')}}">
                            @error('name')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input class="form-control" name="email" id="inputPassword4"
                                   placeholder="zangaxua@gmail.com" value="{{old('email')}}">
                            @error('email')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Giới tính</label>
                            <input class="form-control" name="sex" id="inputPassword4" placeholder="nam or nữ"
                                   value="{{old('sex')}}">
                            @error('sex')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlTextarea1">Địa chỉ</label>
                            <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"
                                      value="{{old('address')}}"></textarea>
                            @error('address')
                            <p style="color: red">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div style="padding-left: 1385px">
        <a href="{{route('hotels.list')}}">
            <button type="button" class="btn btn-primary">Quay lại</button>
        </a>
        <button type="submit" class="btn btn-success">Thêm mới</button>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
